<?php

namespace App\Http\Controllers\Admin;

use App\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSlidesRequest;
use App\Http\Requests\Admin\UpdateSlidesRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use Yajra\DataTables\DataTables;

class SlidesController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Slide.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('slide_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = Slide::query();
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {
                
        if (! Gate::allows('slide_delete')) {
            return abort(401);
        }
                $query->onlyTrashed();
                $template = 'restoreTemplate';
            }
            $query->select([
                'slides.id',
                'slides.photo',
                'slides.text',
            ]);
            $table = Datatables::of($query);

            $table->setRowAttr([
                'data-entry-id' => '{{$id}}',
            ]);
            $table->addColumn('massDelete', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->editColumn('actions', function ($row) use ($template) {
                $gateKey  = 'slide_';
                $routeKey = 'admin.slides';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('photo', function ($row) {
                if($row->photo) { return '<a href="'. asset(env('UPLOAD_PATH').'/' . $row->photo) .'" target="_blank"><img src="'. asset(env('UPLOAD_PATH').'/thumb/' . $row->photo) .'"/>'; };
            });
            $table->editColumn('text', function ($row) {
                return $row->text ? $row->text : '';
            });

            $table->rawColumns(['actions','massDelete','photo']);

            return $table->make(true);
        }

        return view('admin.slides.index');
    }

    /**
     * Show the form for creating new Slide.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('slide_create')) {
            return abort(401);
        }
        return view('admin.slides.create');
    }

    /**
     * Store a newly created Slide in storage.
     *
     * @param  \App\Http\Requests\StoreSlidesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSlidesRequest $request)
    {
        if (! Gate::allows('slide_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $slide = Slide::create($request->all());



        return redirect()->route('admin.slides.index');
    }


    /**
     * Show the form for editing Slide.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('slide_edit')) {
            return abort(401);
        }
        $slide = Slide::findOrFail($id);

        return view('admin.slides.edit', compact('slide'));
    }

    /**
     * Update Slide in storage.
     *
     * @param  \App\Http\Requests\UpdateSlidesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSlidesRequest $request, $id)
    {
        if (! Gate::allows('slide_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $slide = Slide::findOrFail($id);
        $slide->update($request->all());



        return redirect()->route('admin.slides.index');
    }


    /**
     * Remove Slide from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('slide_delete')) {
            return abort(401);
        }
        $slide = Slide::findOrFail($id);
        $slide->delete();

        return redirect()->route('admin.slides.index');
    }

    /**
     * Delete all selected Slide at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('slide_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Slide::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Slide from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('slide_delete')) {
            return abort(401);
        }
        $slide = Slide::onlyTrashed()->findOrFail($id);
        $slide->restore();

        return redirect()->route('admin.slides.index');
    }

    /**
     * Permanently delete Slide from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('slide_delete')) {
            return abort(401);
        }
        $slide = Slide::onlyTrashed()->findOrFail($id);
        $slide->forceDelete();

        return redirect()->route('admin.slides.index');
    }
}
