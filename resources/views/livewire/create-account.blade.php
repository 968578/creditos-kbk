<div class=" w-2/3 mb-5">

    <h1 class="font-bold underline text-center">
        Nueva Cuenta
    </h1>
    @if (session()->has('messageConfirm'))
        <p class="bg-green-300 p-2  rounded font-mukta font-bold">{{ session('messageConfirm') }}</p>
    @endif
    <form wire:submit.prevent='storeAccount'>
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
            <input wire:model='debtor_id' value="{{ $debtor->id }}" type="hidden" />
            <input class="border rounded bg-indigo-300 p-1 font-bold mt-3 cursor-pointer hover:bg-indigo-400"
                type="submit" value="Crear" />

        </div>

    </form>
</div>
