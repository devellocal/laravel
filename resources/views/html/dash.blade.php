@extends('layouts.album')

@section('content')
@include('html.inc.box')

@if(count($albums))
      <div class="row">
        @foreach($albums as $album)
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
               <a href="/albums/{{$album->id}}">
                  <img class="thumbnail" src="storage/photos/thumbs/{{$album->thumb}}" alt="{{$album->name}}" width="348" height="225">
                </a>
                <div class="card-body">
                  <p class="card-text"> {{$album->title}} <br> <small>{{$album->body}}</small></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">{{$album->created_at->diffForHumans()}}</small>
                  </div>
                </div>
              </div>
            </div>
        @endforeach
  @else
    <p>No Albums To Display</p>
    <a href="/album/create" class="btn btn-primary">Create an Album</a>
  @endif
    </div>
@endsection
