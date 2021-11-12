<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin') }}
        </h2>
    </x-slot>

    <div class="justify-content-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mt-5 border-b border-gray-200">
                    <div class="alert alert-success p-5" role="alert">
                        <h4 class="alert-heading p-5 text-center" style="font-size: 200%">Welcome to Admin Panel!</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
