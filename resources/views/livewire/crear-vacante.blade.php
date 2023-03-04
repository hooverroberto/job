<form class="justify-center  w-1/2 space-y-5">
    <div class="mt-6">
        <x-input-label for="titulo" :value="__('Título Vacante')" class="text-l" />        
        <x-text-input 
        id="titulo" 
        class="justify-center mt-2 w-3/4" 
        type="text" 
        name="titulo" 
        :value="old('titulo')" 
        placeholder="Título vacante"
        />       
    </div>
    <div class="mt-6">
        <x-input-label for="salario" :value="__('Salario Mensual')" class="text-6xl" />       
       <div class="mt-4">
           
            <select
                id=salario
                name=salario
                class="rounded border-gray-300 text-gray-600 shadow-sm focus:ring-indigo-500 w-3/4"
            >
            
            </select>
            
        </div>
       
    </div>
    <div class="mt-6">
        <x-input-label for="categoria" :value="__('Categoría')" class="text-6xl" />       
       <div class="mt-4">
           
            <select
                id=categoria
                name=categoria
                class="rounded border-gray-300 text-gray-600 shadow-sm focus:ring-indigo-500 w-3/4"
                
            >            

            </select>
            
        </div>
       
    </div>
    <div class="mt-6">
        <x-input-label for="empresa" :value="__('Empresa')" class="text-6xl" />       
       <div class="mt-4">
           
            <select
                id=empresa
                name=empresa
                class="rounded border-gray-300 text-gray-600 shadow-sm focus:ring-indigo-500 w-3/4" 
                :value="old('empresa')" 
                placeholder="Empresa: ej. Funval, Fundet"
            >            

            </select>
            
        </div>
       
    </div>
</form>


