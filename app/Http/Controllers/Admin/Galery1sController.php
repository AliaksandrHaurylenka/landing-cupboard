<?php

namespace App\Http\Controllers\Admin;

use App\Galery1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreGalery1sRequest;
use App\Http\Requests\Admin\UpdateGalery1sRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use Yajra\DataTables\DataTables;

class Galery1sController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Galery1.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('galery1_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = Galery1::query();
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {
                
        if (! Gate::allows('galery1_delete')) {
            return abort(401);
        }
                $query->onlyTrashed();
                $template = 'restoreTemplate';
            }
            $query->select([
                'galery1s.id',
                'galery1s.title',
                'galery1s.images',
                'galery1s.content',
            ]);
            $table = Datatables::of($query);

            $table->setRowAttr([
                'data-entry-id' => '{{$id}}',
            ]);
            $table->addColumn('massDelete', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->editColumn('actions', function ($row) use ($template) {
                $gateKey  = 'galery1_';
                $routeKey = 'admin.galery1s';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('title', function ($row) {
                return $row->title ? $row->title : '';
            });
            $table->editColumn('images', function ($row) {
                if($row->images) { return '<a href="'. asset(env('UPLOAD_PATH').'/' . $row->images) .'" target="_blank"><img src="'. asset(env('UPLOAD_PATH').'/thumb/' . $row->images) .'"/>'; };
            });

            $table->rawColumns(['actions','massDelete','images']);

            return $table->make(true);
        }

        return view('admin.galery1s.index');
    }

    /**
     * Show the form for creating new Galery1.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('galery1_create')) {
            return abort(401);
        }
        return view('admin.galery1s.create');
    }

    /**
     * Store a newly created Galery1 in storage.
     *
     * @param  \App\Http\Requests\StoreGalery1sRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGalery1sRequest $request)
    {
        if (! Gate::allows('galery1_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $galery1 = Galery1::create($request->all());



        return redirect()->route('admin.galery1s.index');
    }


    /**
     * Show the form for editing Galery1.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('galery1_edit')) {
            return abort(401);
        }
        $galery1 = Galery1::findOrFail($id);

        return view('admin.galery1s.edit', compact('galery1'));
    }

    /**
     * Update Galery1 in storage.
     *
     * @param  \App\Http\Requests\UpdateGalery1sRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGalery1sRequest $request, $id)
    {
        if (! Gate::allows('galery1_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $galery1 = Galery1::findOrFail($id);
        $galery1->update($request->all());



        return redirect()->route('admin.galery1s.index');
    }


    /**
     * Display Galery1.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('galery1_view')) {
            return abort(401);
        }
        $galery1 = Galery1::findOrFail($id);

        return view('admin.galery1s.show', compact('galery1'));
    }


    /**
     * Remove Galery1 from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('galery1_delete')) {
            return abort(401);
        }
        $galery1 = Galery1::findOrFail($id);
        $galery1->delete();

        return redirect()->route('admin.galery1s.index');
    }

    /**
     * Delete all selected Galery1 at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('galery1_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Galery1::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Galery1 from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('galery1_delete')) {
            return abort(401);
        }
        $galery1 = Galery1::onlyTrashed()->findOrFail($id);
        $galery1->restore();

        return redirect()->route('admin.galery1s.index');
    }

    /**
     * Permanently delete Galery1 from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('galery1_delete')) {
            return abort(401);
        }
        $galery1 = Galery1::onlyTrashed()->findOrFail($id);
        $galery1->forceDelete();

        return redirect()->route('admin.galery1s.index');
    }
}
