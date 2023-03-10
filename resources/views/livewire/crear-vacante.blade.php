<form class="md:w-1/2 space-y-5" wire:submit.prevent='crearVacante'>
    <div class="mt-6">
        <x-input-label for="titulo" :value="__('Título Vacante')" />        
        <x-text-input 
            id="titulo" 
            class="block mt-1 w-full" 
            type="text" 
            wire:model="titulo" 
            :value="old('titulo')" 
            placeholder="Título vacante"
        />   
        
        @error('titulo')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>
    <div class="mt-6">
        <x-input-label for="salario" :value="__('Salario Mensual')" />       
       <div class="mt-4">
           
            <select
                id=salario
                wire:model=salario
                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
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
    <div class="mt-6">
        <x-input-label for="categoria" :value="__('Categoría')" />       
       <div class="mt-4">
           
            <select
                id=categoria
                wire:model=categoria
                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
                
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
    <div class="mt-6" >
    <x-input-label for="empresa" :value="__('Empresa')"/>        
        <x-text-input 
        id="empresa" 
        class="block mt-1 w-full"  
        type="text" 
        wire:model="empresa" 
        :value="old('empresa')" 
        placeholder="Empresa: Funval, Fundet"
        />       
       @error('empresa')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>
    <div class="mt-6">
    <x-input-label for="ultmo_dia" :value="__('Último día para postularse')"  />        
        <x-text-input 
        id="ultimo_dia" 
        class="block mt-1 w-full"  
        type="date" 
        wire:model="ultimo_dia" 
        :value="old('ultimo_dia')"         
        />       
       @error('ultimo_dia')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>
    <div class="mt-6">
        <x-input-label for="descripcion" :value="__('Descripción Puesto')"/>        
        <textarea
        wire:model="descripcion" 
        placeholder="Descripción del puesto"  
        class="rounded border-gray-300 text-gray-600 shadow-sm focus:ring-indigo-500 h-72 w-full"   
        ></textarea>     
        @error('descripcion')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>
    <div class="mt-6"">
        <x-input-label for="imagen" :value="__('Imagen')"/>        
        <x-text-input 
        id="imagen" 
        class="block mt-1 w-full"  
        type="file" 
        wire:model="imagen" 
        accept="image/*"        
        />  
        <div class="my-5">
            @if($imagen)
                Imagen:
                <img src="{{ $imagen->temporaryUrl()}}"/>
            @endif
        </div>    
        @error('imagen')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>
    <div class="flex justify-center mt-5">
            <x-primary-button>
                Crear vacantes
            </x-primary-button>
        </div>
</form>


