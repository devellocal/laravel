@extends('layouts.album')
@section('content')
{!!Form::open(['action' => 'AlbumsControl@store','method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'form-signin' ])!!}
  @csrf
<div class="imageupload panel panel-default">
    <div class="panel-heading clearfix">
        <h3 class="panel-title pull-left">Album Cover Image</h3>
        <div class="btn-group pull-right">
            <button type="button" class="btn btn-default active">File</button>
            <button type="button" class="btn btn-default">URL</button>
        </div>
    </div>
    <div class="file-tab panel-body">
        <label class="btn btn-default btn-file">
            <span>Browse</span>
            {{Form::file('cover')}}
            <input type="file" name="thumb">
        </label>
        <button type="button" class="btn btn-default">Remove</button>
    </div>
    <div class="url-tab panel-body">
        <div class="input-group">
            {{Form::text('cover','',['placeholder' => 'Upload Image From URL', 'class' => 'form-control' ])}}
            <div class="input-group-btn">
                <button type="button" class="btn btn-default">Submit</button>
            </div>
        </div>
        <button type="button" class="btn btn-default">Remove</button>
        {{Form::hidden('cover')}}
    </div>
</div>
    <div class="form-group">
      <label for="exampleFormControlInput1">{{__('Album Name')}}</label>
      {{Form::text('title','',['placeholder' => 'Album Name', 'class' => 'form-control' ])}}
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Album Description</label>
      {{Form::textarea('body','',['placeholder' => 'Album Description', 'class' => 'form-control' ])}}
    </div>
    {{Form::submit('submit', ['class' => 'btn btn-lg btn-primary'])}}
</form>
@endsection