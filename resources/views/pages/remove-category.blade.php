@extends('main')
@section('content')

    <div class="container d-flex justify-content-center mt-5">
    <div class="card bg-dark border-radius text-white text-center border" style="width: 18rem;">
    <div class="card-body">
        <h2 class="fs-4 fw-bold">{{$category->name}}</h2>
        <div class="card-header border-0">
            <p>Ar tikrai norite ištrinti šią kategoriją?</p>
            <a href="/category/{{ $category->id }}/delete/confirm" class="btn btn-success my-2 border">Taip</a>
            <a href="/category/{{ $category->id }}" class="btn btn-danger my-2 mx-4 border">Ne</a>
        </div>
    
@endsection