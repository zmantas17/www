<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Skateboards') }}
        </h2>
    </x-slot>
    <div class="justify-content-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="text-right mt-4 max-w-7xl"> 
                <a href="/new-skate" class="btn btn-success ">Add <i class="fas fa-plus-circle"></i></a>
            </div>
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mt-3 border-b border-gray-200">
                    <table class="table table-hover table-dark">
                        <thead>
                            <tr class="border border-bottom-0">
                                <th scope="col">Title</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($skates as $skate)
                            <tr>
                                <td>{{$skate->title}}</td>
                                <td>{{$skate->price }}€</td>
                                <td>
                                    <a href="/skate/{{$skate->id}}" class="btn btn-success"><i class="fas fa-arrow-alt-circle-right"></i></a>
                                    <a href="/skate/{{ $skate->id }}/edit" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="/skate/{{ $skate->id }}/delete/ask" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
