@extends("main")
@section("content")

<div class="container">
    <div class="row mr-2">
        @if(count($skates) == 0)
            <h2 class="text-center mt-5 mb-2" style="font-size: 2rem;">We don't have skateboards with {{ App\Models\Category::where('id', $category->id)->get()[0]->name}} category</h2>
            <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fimages.clipartpanda.com%2Fsad-smiley-face-clipart-KinE4gpiq.jpeg&f=1&nofb=1" alt="lol">
        @else
            <h2 class="text-center mt-5 mb-2" style="font-size: 2rem;">We found skateboards with {{ App\Models\Category::where('id', $category->id)->get()[0]->name}} category</h2>
            @foreach($skates as $skate)
                <div class="card bg-dark border-radius text-white text-center border mx-3 my-4 py-2" style="width: 20rem;">
                    <img class="card-img-top" src="{{ url('storage/'.$skate->img) }}" alt="Photo">
                    <div class="card-body">
                        <h5 class="card-title">{{$skate->title}}</h5>
                        <h4  class="text-warning mb-3">Category: {{ App\Models\Category::where('id', $skate->category)->get()[0]->name}}</h4>
                        <a href="/skate/{{$skate->id}}" class="btn btn-primary" style="font-family:Arial Black;"><i class="fas fa-angle-double-left"></i> More <i class="fas fa-angle-double-right"></i> </a>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
{{ $skates->links('_partials.links') }}


@endsection
