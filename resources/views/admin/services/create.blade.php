@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.services.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.services.store'], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('title', trans('quickadmin.services.fields.title').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('title'))
                        <p class="help-block">
                            {{ $errors->first('title') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('images', trans('quickadmin.services.fields.images').'*', ['class' => 'control-label']) !!}
                    {!! Form::file('images', ['class' => 'form-control', 'style' => 'margin-top: 4px;', 'required' => '']) !!}
                    {!! Form::hidden('images_max_size', 2) !!}
                    {!! Form::hidden('images_max_width', 4096) !!}
                    {!! Form::hidden('images_max_height', 4096) !!}
                    <p class="help-block"></p>
                    @if($errors->has('images'))
                        <p class="help-block">
                            {{ $errors->first('images') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

