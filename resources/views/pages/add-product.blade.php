@extends('main')
@section('content')
    <div class="container text-white">
        <form action="store-skate" method="POST" class="mt-5" enctype="multipart/form-data">
            @csrf
            @include("_partials/errors")
            <h5 class="text-center" style="font-size:200%">Sukurkite produktą!</h5>
            <div class="mb-3">
                <label for="title" class="form-label">Pavadinimas</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>
            <label for="price" class="form-label">Pasirinkite kaina</label>
            <div class="input-group mb-3">
                <span class="input-group-text">€</span>
                <input type="number" step="0.01" class="form-control" name="price" id="price">
            </div>
            
            <label class="form-label">Pasirinkite nuotrauka</label>
            <div class=" bg-white mb-3">
                <input type="file" class="form-control py-2 border border-radius" name="img">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Aprašymas</label>
                <textarea class="form-control" id="description" name="description" rows="4"></textarea>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Pasirinkite kategorija</label>
                <select class="form-select" name="category" id="category" aria-label="Default select example">
                @foreach (App\Models\Category::all() as $category)
                    <option value="{{ $category->id }}">{{$category->name}}</option>
                @endforeach
                </select>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary border-0">Pateikti</button>
            </div>
        </form>
    </div>

@endsection