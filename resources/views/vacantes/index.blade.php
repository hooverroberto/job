<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mis Vacantes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if(session()->has('mensaje'))
                <div class="w-3/4 px-4 py-2 text-black bg-green-600 rounded text-sm">
                    {{ session('mensaje')}}
                </div>
            @endif
           
            <livewire:mostrar-vacantes />
            
        </div>
    </div>
</x-app-layout>