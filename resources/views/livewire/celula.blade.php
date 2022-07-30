<div>
    @if (session()->has('confirmUpdateCelula' . $id_celula))
        <p class="bg-green-300 p-2  rounded font-mukta font-bold">{{ session('confirmUpdateCelula' . $id_celula) }}</p>
    @endif
    <div class="w-full bg-gray-100 flex  sm:flex-row justify-between rounded-sm p-1 flex-col items-center">
        <p>{{ $celula->name }}</p>
        <div class="grid grid-cols-2 gap-x-3">
            <div class="{{ $active ? 'p-1 bg-blue-500 rounded-md' : '' }}" wire:click='activeModal'>
                <x-button-editar>
                    Editar
                </x-button-editar>
            </div>
            <div class="{{ $active_delete ? 'p-1 bg-red-400 rounded-md' : '' }}" wire:click='activeModalDelete' >
                <x-button-delete>
                    Eliminar
                </x-button-delete>
            </div>
        </div>
    </div>
    <div {{ $active ? 'visible' : 'hidden' }}>
        <div class="w-full flex justify-center">

            <form class="w-1/3" wire:submit.prevent="updateCelula" novalidate>

                <div class="flex flex-col w-full">
                    <x-label-global>Nombre</x-label-global>
                    <input class="border-slate-400 border rounded" wire:model="name" type="text" />

                    @error('name')
                        <x-input-error>
                            {{ $message }}
                        </x-input-error>
                    @enderror

                    <input type="hidden" wire:model="id_celula" />

                    <input class="border rounded bg-indigo-300 p-1 font-bold mt-3 cursor-pointer hover:bg-indigo-400"
                        type="submit" value="Actualizar" />

                </div>
            </form>
        </div>
    </div>
    <div {{$active_delete ? 'visible' : 'hidden'}}>
        <div class="w-full flex justify-center">

            <form class="w-max" wire:submit.prevent="deleteCelula" novalidate>
                <div class="flex flex-col w-full items-center">
                    <x-label-confirm-delete>¿Seguro quieres eliminar la celula <span class="font-oswald ">{{$celula->name}}</span>?</x-label-confirm-delete>
                    
                    <input type="hidden" wire:model="id_celula" />
                    <input type="submit" value="Eliminar" class="bg-red-400 p-1 rounded hover:bg-red-500 cursor-pointer text-center w-1/3" >
                    
                </div>
            </form>
        </div>
    </div>
</div>
