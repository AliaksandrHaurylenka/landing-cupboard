@extends('layouts.app')

@section('content')
  <h3 class="page-title">@lang('quickadmin.catalog.title')</h3>

  {!! Form::model($catalog, ['method' => 'PUT', 'route' => ['admin.catalogs.update', $catalog->id], 'files' => true,]) !!}

  <div class="panel panel-default">
    <div class="panel-heading">
      @lang('quickadmin.qa_edit')
    </div>

    <div class="panel-body">
      <div class="row">
        <div class="col-xs-12 form-group">
          @if ($catalog->photo)
            <a href="{{ asset(env('UPLOAD_PATH').'/'.$catalog->photo) }}" target="_blank"><img
                  src="{{ asset(env('UPLOAD_PATH').'/thumb/'.$catalog->photo) }}"></a>
          @endif
          {!! Form::label('photo', trans('quickadmin.catalog.fields.photo').'', ['class' => 'control-label']) !!}
          {!! Form::file('photo', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
          {!! Form::hidden('photo_max_size', 2) !!}
          {!! Form::hidden('photo_max_width', 4096) !!}
          {!! Form::hidden('photo_max_height', 4096) !!}
          <p class="help-block"></p>
          @if($errors->has('photo'))
            <p class="help-block">
              {{ $errors->first('photo') }}
            </p>
          @endif
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 form-group">
          {!! Form::label('title', trans('quickadmin.catalog.fields.title').'*', ['class' => 'control-label']) !!}
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
          {!! Form::label('description', trans('quickadmin.catalog.fields.description').'', ['class' => 'control-label']) !!}
          {!! Form::text('description', old('description'), ['class' => 'form-control', 'placeholder' => '']) !!}
          <p class="help-block"></p>
          @if($errors->has('description'))
            <p class="help-block">
              {{ $errors->first('description') }}
            </p>
          @endif
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 form-group">
          {!! Form::label('price', trans('quickadmin.catalog.fields.price').'', ['class' => 'control-label']) !!}
          {!! Form::number('price', old('price'), ['class' => 'form-control', 'placeholder' => '']) !!}
          <p class="help-block"></p>
          @if($errors->has('price'))
            <p class="help-block">
              {{ $errors->first('price') }}
            </p>
          @endif
        </div>
      </div>

    </div>
  </div>

  {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
  {!! Form::close() !!}
@stop

