@extends('main')
@section('content')

    <div class="container d-flex justify-content-center mt-5">
    <div class="card bg-dark border-radius text-white text-center border" style="width: 18rem;">
    <img class="card-img-top p-3" src="{{ url('storage/'.$skate->img) }}" alt="Photo">
    <div class="card-body">
        <h2 class="fs-4 fw-bold">{{$skate->title}}</h2>
        <p class="mb-2">{{$skate->description}}</p>
        <p class="mb-2">{{ number_format($skate->price, 2)}} €</p>
        @if($skate->owner == Auth::id())
            <div class="card-header border-0">
            Ar tikrai norite ištrinti šį įvykį?
                <a href="/skate/{{ $skate->id }}/delete/confirm" class="btn btn-success my-2 border">Taip</a>
                <a href="/skate/{{ $skate->id }}" class="btn btn-danger my-2 mx-4 border">Ne</a>
            </div>
        @endif

   </div>
        <div class="card-footer bg-transparent border-top ">{{App\Models\User::where('id', $skate->owner)->get()[0]->name}}</div>
    </div>
@endsection