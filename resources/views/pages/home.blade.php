@extends('main')
@section('content')
<div class="container">
    <div class="row d-grid justify-content-center">
        <div class="col-sm-12 my-5">
            <img src="https://cdn.hiconsumption.com/wp-content/uploads/2021/07/Best-Cruiser-Skateboards-FB.jpg" class="img-fluid border border-white border-5 rounded-3" alt="Loading...">
        </div>
    </div>
    <div class="alert alert-dark py-5 text-center text-white" style="background-color: rgb(74, 75, 80);" role="alert">
        <h1 style="font-family:Arial Black; font-size:200%;"> Skateboards We Offer </h1>
    </div>
    
    <div class="d-flex justify-content-center py-1">
        @auth
        <a href="/new-skate" class="btn mx-3 py-2 button btn-lg blue">Add a product!</a>
        <a href="/add-category" class="btn mx-3 button btn-lg blue">Add a category!</a>
        @endauth
    </div>
    <div class="row">
        @foreach($skates as $skate)
                <div class="card bg-dark border-radius text-white text-center border mx-3 my-4 py-2" style="width: 20rem;">
                    <img class="card-img-top" src="{{ url('storage/'.$skate->img) }}" alt="Photo">
                    <div class="card-body">
                    <h5 class="card-title">{{$skate->title}}</h5>
                    <p class="mb-2 text-justify-center text-wrap">{{Str::limit($skate->description, 100)}}</p>
                    <p class="mb-2">{{ number_format($skate->price, 2)}} €</p>
                    <a href="/skate/{{$skate->id}}" class="btn btn-primary" style="font-family:Arial Black;"><i class="fas fa-angle-double-left"></i> More <i class="fas fa-angle-double-right"></i> </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{ $skates->links('_partials.links') }}
    <div class="mb-5"></div>
</div>
@endsection