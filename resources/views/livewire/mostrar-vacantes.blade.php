<div>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">    
            @forelse($vacantes as $vacante)
                <div class="p-6 bg-white border-b border-gray-200 text-gray-900 md:flex md:justify-between md:items-center">
                    <div class="space-y-3">
                        <a href="#" class="text-xl font-bold">
                            {{ $vacante -> titulo }}
                        </a>
                        <p class="text-sm text-gray-600 font-bold">{{ $vacante -> empresa }}</p>
                        <p class="">Último día: {{ $vacante->ultimo_dia}}</p>
                    </div>

                    <div class="flex gap-3 items-center">
                        <a 
                            href="#"
                            class="bg-black-200 py-2 px-4 rounded-lg text-black text-xs font-bold uppercase"
                        >
                            Candidatos
                        </a>

                        <a 
                            href="{{route('vacantes.edit', $vacante->id)}}"
                            class="bg-black-200 py-2 px-4 rounded-lg text-black text-xs font-bold uppercase"
                        >
                            Editar
                        </a>

                        <a 
                            href="#"
                            class="bg-black-200 py-2 px-4 rounded-lg text-black text-xs font-bold uppercase"
                        >
                            Eliminar
                        </a>

                    </div>
                </div>        
        @empty
            <p class="p-3">No hay vacantes que mostrar</p>    
        @endforelse    
    </div>

    <div class="mt-10" style="margin-top: 30px;">
        {{ $vacantes->links()}}
    </div>
</div>

@push('scripts')

    <script>
        alert('Hola')
    </script>

@endpush