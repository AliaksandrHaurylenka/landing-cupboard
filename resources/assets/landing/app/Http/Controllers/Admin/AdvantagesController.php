<?php

namespace App\Http\Controllers\Admin;

use App\Advantage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAdvantagesRequest;
use App\Http\Requests\Admin\UpdateAdvantagesRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use Yajra\DataTables\DataTables;

class AdvantagesController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Advantage.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('advantage_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = Advantage::query();
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {
                
        if (! Gate::allows('advantage_delete')) {
            return abort(401);
        }
                $query->onlyTrashed();
                $template = 'restoreTemplate';
            }
            $query->select([
                'advantages.id',
                'advantages.photo',
                'advantages.title',
            ]);
            $table = Datatables::of($query);

            $table->setRowAttr([
                'data-entry-id' => '{{$id}}',
            ]);
            $table->addColumn('massDelete', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->editColumn('actions', function ($row) use ($template) {
                $gateKey  = 'advantage_';
                $routeKey = 'admin.advantages';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('photo', function ($row) {
                if($row->photo) { return '<a href="'. asset(env('UPLOAD_PATH').'/' . $row->photo) .'" target="_blank"><img src="'. asset(env('UPLOAD_PATH').'/thumb/' . $row->photo) .'"/>'; };
            });
            $table->editColumn('title', function ($row) {
                return $row->title ? $row->title : '';
            });

            $table->rawColumns(['actions','massDelete','photo']);

            return $table->make(true);
        }

        return view('admin.advantages.index');
    }

    /**
     * Show the form for creating new Advantage.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('advantage_create')) {
            return abort(401);
        }
        return view('admin.advantages.create');
    }

    /**
     * Store a newly created Advantage in storage.
     *
     * @param  \App\Http\Requests\StoreAdvantagesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdvantagesRequest $request)
    {
        if (! Gate::allows('advantage_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $advantage = Advantage::create($request->all());



        return redirect()->route('admin.advantages.index');
    }


    /**
     * Show the form for editing Advantage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('advantage_edit')) {
            return abort(401);
        }
        $advantage = Advantage::findOrFail($id);

        return view('admin.advantages.edit', compact('advantage'));
    }

    /**
     * Update Advantage in storage.
     *
     * @param  \App\Http\Requests\UpdateAdvantagesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdvantagesRequest $request, $id)
    {
        if (! Gate::allows('advantage_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $advantage = Advantage::findOrFail($id);
        $advantage->update($request->all());



        return redirect()->route('admin.advantages.index');
    }


    /**
     * Remove Advantage from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('advantage_delete')) {
            return abort(401);
        }
        $advantage = Advantage::findOrFail($id);
        $advantage->delete();

        return redirect()->route('admin.advantages.index');
    }

    /**
     * Delete all selected Advantage at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('advantage_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Advantage::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Advantage from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('advantage_delete')) {
            return abort(401);
        }
        $advantage = Advantage::onlyTrashed()->findOrFail($id);
        $advantage->restore();

        return redirect()->route('admin.advantages.index');
    }

    /**
     * Permanently delete Advantage from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('advantage_delete')) {
            return abort(401);
        }
        $advantage = Advantage::onlyTrashed()->findOrFail($id);
        $advantage->forceDelete();

        return redirect()->route('admin.advantages.index');
    }
}
