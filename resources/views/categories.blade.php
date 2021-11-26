<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="justify-content-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="text-right mt-4 max-w-7xl"> 
                <a href="/add-category" class="btn btn-success ">Add <i class="fas fa-plus-circle"></i></a>
            </div>
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mt-3 border-b border-gray-200">
                    <table class="table table-hover table-dark">
                        <thead>
                            <tr class=" border border-bottom-0">
                                <th scope="col">Title</th>
                                <th scope="col mr-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                {{-- <td>{{App\Models\User::where('id', $category->owner)->get()[0]->name}}</td> --}}
                                <td>{{$category->name}}</td>
                                <td>
                                    <a href="/category/{{ $category->id }}" class="btn btn-success"><i class="fas fa-arrow-alt-circle-right"></i></a>
                                    <a href="/category/{{ $category->id }}/edit" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="/category/{{ $category->id }}/delete/ask" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
