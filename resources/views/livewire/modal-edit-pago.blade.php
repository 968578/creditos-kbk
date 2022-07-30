<div>
    @if (session()->has('confirmUpdatePago' . $id_pago))
        <p class="bg-green-300 p-2  rounded font-mukta font-bold">{{ session('confirmUpdatePago' . $id_pago) }}</p>
    @endif
    <div class="border border-slate-400 grid grid-cols-4 items-center">
        <x-table-body>{{number_format($pago->monto) }} </x-table-body>

        <x-table-body>{{ $pago->fecha_pago }}</x-table-body>

        <div wire:click="activeModal" class="{{ $active ? 'bg-blue-500 p-1 rounded-md' : '' }}">
            <x-button-editar>
                Editar
            </x-button-editar>
        </div>
        <div wire:click='activeModalDelete' >
            <x-button-delete>
                Eliminar
            </x-button-delete>
        </div>

    </div>
    <div {{ $active ? 'visible' : 'hidden' }}>
        <div class="w-full flex justify-center">

            <form class="w-1/3" wire:submit.prevent="updatePago" novalidate>

                <div class="flex flex-col w-full">
                    <x-label-global>Monto</x-label-global>
                    <input class="border-slate-400 border rounded" wire:model="monto" type="text" />

                    @error('monto')
                        <x-input-error>
                            {{ $message }}
                        </x-input-error>
                    @enderror

                    <x-label-global>Fecha Pago</x-label-global>
                    <input class="border-slate-400 border rounded" wire:model="fecha_pago" type="date" />
                    @error('fecha_pago')
                        <x-input-error>
                            {{ $message }}
                        </x-input-error>
                    @enderror
                    <input type="hidden" wire:model="id" />

                    <input class="border rounded bg-indigo-300 p-1 font-bold mt-3 cursor-pointer hover:bg-indigo-400"
                        type="submit" value="Actualizar" />

                </div>
            </form>
        </div>
    </div>
    <div {{ $active_delete ? 'visible' : 'hidden' }}>
        <div class="w-full flex justify-center">

            <form class="w-max" wire:submit.prevent="deletePago" novalidate>
                <div class="flex flex-col w-full items-center">
                    <x-label-confirm-delete>¿Eliminar el pago con valor: <span
                            class="font-oswald ">{{ number_format($pago->monto) }}</span>?
                    </x-label-confirm-delete>

                    <input type="submit" value="Eliminar"
                        class="bg-red-400 p-1 rounded hover:bg-red-500 cursor-pointer text-center w-1/3" />

                </div>
            </form>
        </div>
    </div>
</div>


