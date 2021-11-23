@extends("main")
@section("content")

<div class="container d-flex justify-content-center mt-5">
    <div class="card bg-dark border-radius text-white text-center border" style="width: 18rem;">
    <div class="card-header border-bottom bg-transparent py-1">
    {{ App\Models\Category::where('id', $skate->category)->get()[0]->name}}
    </div>
    <img class="card-img-top p-3" src="{{ url('storage/'.$skate->img) }}" alt="Photo">
    <div class="card-body">
        <h2 class="fs-4 fw-bold">{{$skate->title}}</h2>
        <p class="mb-2">{{$skate->description}}</p>
        <p class="mb-2">{{ number_format($skate->price, 2)}} €</p>
        @if($skate->owner == Auth::id())
            <a href="/skate/{{ $skate->id }}/edit" class="btn btn-success my-2 mx-2 border">Edit</a>
            <a href="/skate/{{ $skate->id }}/delete/ask" class="btn btn-danger my-2  mx-2 border">Delete</a>
        @endif
    </div>
        <div class="card-header bg-transparent border-top border-0">{{App\Models\User::where('id', $skate->owner)->get()[0]->name}}</div>
    </div>

</div>
@endsection
