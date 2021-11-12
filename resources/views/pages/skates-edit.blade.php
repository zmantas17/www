@extends('main')
@section('content')
    <div class="container text-white">
        <form action="/skate/{{ $skate->id }}/edit" method="POST" class="mt-5" enctype="multipart/form-data">
            @csrf
            {{ method_field("PATCH") }}
            @include("_partials/errors")
            <h3 class="text-center" style="font-size:200%">Edit</h3>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{$skate->title}}">
            </div>
            <label for="price" class="form-label">Choose price</label>
            <div class="input-group mb-3">
                <span class="input-group-text">€</span>
                <input type="number" step="0.01" class="form-control" name="price" id="price" value="{{$skate->price}}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4">{{$skate->description}}</textarea>
            </div>
            <label class="form-label">Choose image</label>
            <div class=" bg-white mb-3">
                <input type="file" class="form-control py-2 border border-radius" name="img">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary border-0">Submit</button>
            </div>
        </form>
    </div>

@endsection