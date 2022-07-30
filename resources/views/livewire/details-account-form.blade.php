<div class=" w-2/3 mb-10">

    <div>
        @if (session()->has('messageConfirm'))
            <p class="bg-green-300 p-2  rounded font-mukta font-bold">{{ session('messageConfirm') }}</p>
        @endif
        <form wire:submit.prevent='updateAccount'>
            <div class="flex flex-col ">
                <x-label-global>Monto</x-label-global>
                <input class="border-slate-400 border rounded" wire:model="monto" type="text" />
                @error('monto')
                    <x-input-error>
                        {{ $message }}
                    </x-input-error>
                @enderror

                <x-label-global>Fecha Solicitud</x-label-global>
                <input class="border-slate-400 border rounded" wire:model='fecha_solicitud' type="date" />
                @error('fecha_solicitud')
                    <x-input-error>
                        {{ $message }}
                    </x-input-error>
                @enderror
                <x-label-global>Fecha Desembolso</x-label-global>
                <input class="border-slate-400 border rounded" wire:model='fecha_desembolso' type="date" />
                @error('fecha_desembolso')
                    <x-input-error>
                        {{ $message }}
                    </x-input-error>
                @enderror
                <x-label-global>Numero de cuotas</x-label-global>
                <input class="border-slate-400 border rounded" wire:model='numero_cuotas' type="text" />
                @error('numero_cuotas')
                    <x-input-error>
                        {{ $message }}
                    </x-input-error>
                @enderror
                <x-label-global>Valor Cuota</x-label-global>
                <input class="border-slate-400 border rounded" wire:model='valor_cuota' type="text" />
                @error('valor_cuota')
                    <x-input-error>
                        {{ $message }}
                    </x-input-error>
                @enderror
                <x-label-global>Fecha Aprobacion</x-label-global>
                <input class="border-slate-400 border rounded" wire:model='fecha_aprobacion' type="date" />
                <x-label-global>Estado</x-label-global>

                <select wire:model="estado">
                    <option value="">--Selecciona Estado--</option>
                    <option value="Vigente">Vigente</option>
                    <option value="Esperando">Esperando</option>
                </select>
                @error('estado')
                    <x-input-error>
                        {{ $message }}
                    </x-input-error>
                @enderror
                <input class="border rounded bg-indigo-300 p-1 font-bold mt-3 cursor-pointer hover:bg-indigo-400"
                    type="submit" value="Actualizar" />
                <div wire:click='activeModalDelete' class="mt-2">
                    <x-button-delete>
                        Eliminar
                    </x-button-delete>
                </div>

            </div>

        </form>
        <div {{ $active_delete ? 'visible' : 'hidden' }}>
            <div class="w-full flex justify-center">

                <form class="w-max" wire:submit.prevent="deleteAccount" novalidate>
                    <div class="flex flex-col w-full items-center">
                        <x-label-confirm-delete>¿Eliminar cuenta de <span
                                class="font-oswald ">{{ number_format($monto) }}</span>? Tambien se Eliminara sus pagos
                        </x-label-confirm-delete>

                        <input type="submit" value="Eliminar"
                            class="bg-red-400 p-1 rounded hover:bg-red-500 cursor-pointer text-center w-1/3" />

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
