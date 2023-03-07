<form class="justify-center  w-1/2 space-y-5" wire:submit.prevent='crearVacante'>
@csrf
    <div class="mt-6">
        <x-input-label for="titulo" :value="__('Título Vacante')" class="text-l" />        
        <x-text-input 
        id="titulo" 
        class="justify-center mt-2 w-3/4" 
        type="text" 
        wire:model="titulo" 
        :value="old('titulo')" 
        placeholder="Título vacante"
        />   
        
        @error('titulo')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>
    <div class="mt-6" style="padding-top: 25px;">
        <x-input-label for="salario" :value="__('Salario Mensual')" class="text-6xl" />       
       <div class="mt-4">
           
            <select
                id=salario
                wire:model=salario
                class="rounded border-gray-300 text-gray-600 shadow-sm focus:ring-indigo-500 w-3/4"
            >
                <option>-- Seleccione --</option>
                @foreach($salarios as $salario)
                    <option value="{{ $salario->id}}">{{$salario->salario}}</option>
                @endforeach

            </select>
            @error('salario')
            <livewire:mostrar-alerta :message="$message"/>
            @enderror
        </div>
       
    </div>
    <div class="mt-6" style="padding-top: 25px;">
        <x-input-label for="categoria" :value="__('Categoría')" class="text-6xl" />       
       <div class="mt-4">
           
            <select
                id=categoria
                wire:model=categoria
                class="rounded border-gray-300 text-gray-600 shadow-sm focus:ring-indigo-500 w-3/4"
                
            >            
            <option>-- Seleccione --</option>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id}}">{{$categoria->categoria}}</option>
                @endforeach
            </select>
            @error('categoria')
            <livewire:mostrar-alerta :message="$message"/>
            @enderror
        </div>
       
    </div>
    <div class="mt-6" style="padding-top: 25px;">
    <x-input-label for="empresa" :value="__('Empresa')" class="text-l" />        
        <x-text-input 
        id="empresa" 
        class="justify-center mt-2 w-3/4" 
        type="text" 
        wire:model="empresa" 
        :value="old('empresa')" 
        placeholder="Empresa: Funval, Fundet"
        />       
       @error('empresa')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>
    <div class="mt-6" style="padding-top: 25px;">
    <x-input-label for="ultmo_dia" :value="__('Último día para postularse')" class="text-l" />        
        <x-text-input 
        id="ultimo_dia" 
        class="justify-center mt-2 w-3/4" 
        type="date" 
        wire:model="ultimo_dia" 
        :value="old('ultimo_dia')"         
        />       
       @error('ultimo_dia')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>
    <div class="mt-6" style="padding-top: 25px;">
        <x-input-label for="descripcion" :value="__('Descripción Puesto')" class="text-l" />        
        <textarea
        wire:model="descripcion" 
        placeholder="Descripción del puesto"  
        class="rounded border-gray-300 text-gray-600 shadow-sm focus:ring-indigo-500 w-3/4 h-72"   
        ></textarea>     
        @error('descripcion')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>
    <div class="mt-6" style="padding-top: 25px;">
        <x-input-label for="imagen" :value="__('Imagen')" class="text-l" />        
        <x-text-input 
        id="imagen" 
        class="justify-center mt-2 w-3/4" 
        type="file" 
        wire:model="imagen" 
        accept="image/*"        
        />  
        <div class="my-5" style="width:150px; height:150px;">
            @if($imagen)
                Imagen:
                <img src="{{ $imagen->temporaryUrl()}}"/>
            @endif
        </div>    
        @error('imagen')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>
    <div class="flex justify-center mt-5" style="padding-top: 30px;">
            <x-primary-button>
                Crear vacantes
            </x-primary-button>
        </div>
</form>


