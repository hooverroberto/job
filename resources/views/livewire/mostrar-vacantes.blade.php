<div>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">    
            @forelse($vacantes as $vacante)
                <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">
                    <div class="space-y-3">
                        <a href="{{ route('vacantes.show', $vacante->id)}}" class="text-xl font-bold">
                            {{ $vacante -> titulo }}
                        </a>
                        <p class="text-sm text-gray-600 font-bold">{{ $vacante -> empresa }}</p>
                        <p class="">Último día: {{ $vacante->ultimo_dia}}</p>
                    </div>

                    <div class="flex flex-col md:flex-row gap-3 items-strech mt-7 md:mt-0">
                        <a 
                            href="{{route('candidatos.index', $vacante)}}"
                            class="bg-orange-500 py-2 px-4 rounded-lg text-white text-xs text-center font-bold uppercase"
                        >
                            Candidatos
                        </a>

                        <a 
                            href="{{route('vacantes.edit', $vacante->id)}}"
                            class="bg-yellow-300 py-2 px-4 rounded-lg text-white text-xs text-center font-bold uppercase"
                        >
                            Editar
                        </a>

                        <button 
                            wire:click="$emit('mostrarAlerta', {{ $vacante->id }})"
                            class="bg-red-600 py-2 px-4 rounded-lg text-white text-xs  text-center font-bold uppercase"
                        >
                            Eliminar
                        </button>

                    </div>
                </div>        
        @empty
            <p class="p-3">No hay vacantes que mostrar</p>    
        @endforelse    
    </div>

    <div class="mt-10"">
        {{ $vacantes->links()}}
    </div>
</div>

@push('scripts')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>

        Livewire.on('mostrarAlerta', vacanteId =>{
                Swal.fire({
                title: 'Elimar vacante',
                text: "Una vacante eliminada, no se puede recuperar!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, ¡Eliminar!',
                cancelButtonText: 'Cancelar',
                }).then((result) => {
                if (result.isConfirmed) {

                    Livewire.emit('eliminarVacante', vacanteId)

                    Swal.fire(
                    'Se elimino la vaacnte!',
                    'Elimanado correctamente.',
                    'success'
                    )
                }
                })
            }) 

        
    </script>

@endpush