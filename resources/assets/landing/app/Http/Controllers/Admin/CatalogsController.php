<?php

namespace App\Http\Controllers\Admin;

use App\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCatalogsRequest;
use App\Http\Requests\Admin\UpdateCatalogsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use Yajra\DataTables\DataTables;

class CatalogsController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Catalog.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('catalog_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = Catalog::query();
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {
                
        if (! Gate::allows('catalog_delete')) {
            return abort(401);
        }
                $query->onlyTrashed();
                $template = 'restoreTemplate';
            }
            $query->select([
                'catalogs.id',
                'catalogs.photo',
                'catalogs.title',
                'catalogs.description',
                'catalogs.price',
            ]);
            $table = Datatables::of($query);

            $table->setRowAttr([
                'data-entry-id' => '{{$id}}',
            ]);
            $table->addColumn('massDelete', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->editColumn('actions', function ($row) use ($template) {
                $gateKey  = 'catalog_';
                $routeKey = 'admin.catalogs';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('photo', function ($row) {
                if($row->photo) { return '<a href="'. asset(env('UPLOAD_PATH').'/' . $row->photo) .'" target="_blank"><img src="'. asset(env('UPLOAD_PATH').'/thumb/' . $row->photo) .'"/>'; };
            });
            $table->editColumn('title', function ($row) {
                return $row->title ? $row->title : '';
            });
            $table->editColumn('description', function ($row) {
                return $row->description ? $row->description : '';
            });
            $table->editColumn('price', function ($row) {
                return $row->price ? $row->price : '';
            });

            $table->rawColumns(['actions','massDelete','photo']);

            return $table->make(true);
        }

        return view('admin.catalogs.index');
    }

    /**
     * Show the form for creating new Catalog.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('catalog_create')) {
            return abort(401);
        }
        return view('admin.catalogs.create');
    }

    /**
     * Store a newly created Catalog in storage.
     *
     * @param  \App\Http\Requests\StoreCatalogsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCatalogsRequest $request)
    {
        if (! Gate::allows('catalog_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $catalog = Catalog::create($request->all());



        return redirect()->route('admin.catalogs.index');
    }


    /**
     * Show the form for editing Catalog.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('catalog_edit')) {
            return abort(401);
        }
        $catalog = Catalog::findOrFail($id);

        return view('admin.catalogs.edit', compact('catalog'));
    }

    /**
     * Update Catalog in storage.
     *
     * @param  \App\Http\Requests\UpdateCatalogsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCatalogsRequest $request, $id)
    {
        if (! Gate::allows('catalog_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $catalog = Catalog::findOrFail($id);
        $catalog->update($request->all());



        return redirect()->route('admin.catalogs.index');
    }


    /**
     * Remove Catalog from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('catalog_delete')) {
            return abort(401);
        }
        $catalog = Catalog::findOrFail($id);
        $catalog->delete();

        return redirect()->route('admin.catalogs.index');
    }

    /**
     * Delete all selected Catalog at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('catalog_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Catalog::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Catalog from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('catalog_delete')) {
            return abort(401);
        }
        $catalog = Catalog::onlyTrashed()->findOrFail($id);
        $catalog->restore();

        return redirect()->route('admin.catalogs.index');
    }

    /**
     * Permanently delete Catalog from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('catalog_delete')) {
            return abort(401);
        }
        $catalog = Catalog::onlyTrashed()->findOrFail($id);
        $catalog->forceDelete();

        return redirect()->route('admin.catalogs.index');
    }
}
