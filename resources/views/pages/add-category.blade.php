@extends('main')
@section('content')
    <div class="container text-white">
        <form action="store-category" method="POST" class="mt-5">
            @csrf
            @include("_partials/errors")
            <h3 class="text-center" style="font-size: 200%">Add a Category!</h3>
            <div class="mb-3">
                <label for="name" class="form-label">Title</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            
            <div class="text-center">
                <button type="submit" class="btn btn-primary border-0">Submit</button>
            </div>
        </form>
    </div>
@endsection