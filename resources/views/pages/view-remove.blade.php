@extends('main')
@section('content')

    <div class="container d-flex justify-content-center mt-5">
    <div class="card bg-dark border-radius text-white text-center border" style="width: 18rem;">
    @if(App\Models\Category::where('id', $skate->category)->get()->count() != 0)
    <div class="card-header bg-transparent border-bottom">{{ App\Models\Category::where('id', $skate->category)->get()[0]->name}}</div>
    @endif
    <img class="card-img-top p-3" src="{{ url('storage/'.$skate->img) }}" alt="Photo">
    <div class="card-body">
        <h2 class="fs-4 fw-bold">{{$skate->title}}</h2>
        <p class="mb-2">{{$skate->description}}</p>
        <p class="mb-2">{{ number_format($skate->price, 2)}} €</p>
        @if($skate->owner == Auth::id())
            <div class="card-header border-0">
            Are you sure you want to delete this event? <br>
                <a href="/skate/{{ $skate->id }}/delete/confirm" class="btn btn-success my-2 border">Yes</a>
                <a href="/skate/{{ $skate->id }}" class="btn btn-danger my-2 mx-4 border">No</a>
            </div>
        @endif

   </div>
        <div class="card-header bg-transparent border-top border-0"><span class="text-warning fw-bold">Seller:</span> {{App\Models\User::where('id', $skate->owner)->get()[0]->name}}</div>
    </div>
@endsection