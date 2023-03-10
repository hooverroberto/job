<div>

    <livewire:filtrar-vacantes />
    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <h3 class="font-extrabold text-4xl text-gray-600 mb-12">Nuestras Vacantes disponibles</h3>
            
            <div class="bg-white shadow-sm rounded-lg p-6 divide-y divide-gray-300">
                @forelse ( $vacantes as $vacante )
                    <div class="md:flex md: justify-between md:items-center py-3">

                        <div class="flex-1">
                            <a class="text-3xl font-extrabold text-gray-400" href="{{ route('vacantes.show', $vacante->id)}}">
                                {{$vacante->titulo}}
                            </a>
                            <p class="text-base text-gray-600 mb-1">{{$vacante->empresa}}</p>
                            <p class="text-xs font-bold text-gray-600 mb-1">{{$vacante->categoria->categoria}}</p>
                            <p class="text-xs font-bold text-gray-600 mb-1">{{$vacante->salario->categoria}}</p>
                            <p class="font-bold text-xs text-gray-500">
                              Último día para postularse:
                              <span class="font-normal">{{$vacante->ultimo_dia}}</span>  
                            </p>
                        </div>

                        <div class="mt-5 md:mt-0">
                            <a 
                            href="{{ route('vacantes.show', $vacante->id)}}"
                            class="bg-gray-500 p-3 text-sm uppercas font-bold text-white rounded-lg block text-center"
                            >
                                Ver Vacante
                            </a>
                        </div>

                    </div>

                @empty 
                    <p>No hay vacantes aún</p>
                @endforelse

            </div>
        </div>
    </div>
</div>
