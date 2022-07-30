<div class=" w-2/3 mb-10">
    
    <h1 class="font-bold underline text-center">
        Nuevo Pago
    </h1>

    <div>
        @if (session()->has('messagePagoConfirm'))
            <p class="bg-green-300 p-2  rounded font-mukta font-bold">{{ session('messagePagoConfirm') }}</p>
        @endif
        <form wire:submit.prevent='storePago'>
            <div class="flex flex-col ">
                <x-label-global>Monto</x-label-global>
                <input class="border-slate-400 border rounded"  wire:model="monto" type="text" />
                @error('monto')
                    <x-input-error>
                        {{ $message }}
                    </x-input-error>
                @enderror

                <x-label-global>Fecha Pago</x-label-global>
                <input class="border-slate-400 border rounded" wire:model='fecha_pago' type="date" />
                @error('fecha_pago')
                    <x-input-error>
                        {{ $message }}
                    </x-input-error>
                @enderror

                <input type="hidden" name="account_id" value={{$account->id}}>

                <input class="border rounded bg-indigo-300 p-1 font-bold mt-3 cursor-pointer hover:bg-indigo-400"
                    type="submit" value="Crear" />

            </div>

        </form>
    </div>
</div>
