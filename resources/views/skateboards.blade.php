<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Skateboards') }}
        </h2>
    </x-slot>

    <div class="justify-content-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mt-5 border-b border-gray-200">
                    <table class="table table-hover table-dark">
                        <thead>
                            <tr class=" border border-bottom-0">
                                <th scope="col">Title</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($skates as $skate)
                            <tr>
                                {{-- <td>{{App\Models\User::where('id', $skate->owner)->get()[0]->name}}</td> --}}
                                <td>{{$skate->title}}</td>
                                <td>{{ $skate->price }}€</td>
                                <td>
                                    <a href="/skate/{{$skate->id}}" class="btn btn-success border border-warning border-2 border-0"><i class="fas fa-arrow-alt-circle-right"></i></a>
                                    <a href="/skate/{{ $skate->id }}/edit" class="btn btn-warning border border-warning border-2 border-0"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="/skate/{{ $skate->id }}/delete/ask" class="btn btn-danger border border-warning border-2 border-0"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
