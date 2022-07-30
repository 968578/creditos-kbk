<div class="sm:w-3/4  flex flex-col items-center w-4/5 bg-slate-300 rounded pb-4">

    <x-label-global>Fondos Total</x-label-global>
    @if (session()->has('confirmUpdateAmount'))
        <p class="bg-green-300 p-2  rounded font-mukta font-bold">{{ session('confirmUpdateAmount') }}</p>
    @endif
    <div class="mt-4 flex flex-col w-4/5 gap-y-2">
        <div class="w-full bg-gray-100 flex  sm:flex-row justify-between rounded-sm p-1 flex-col items-center">
            @if ($amounts->count())
                <p>{{ $amounts->name }}</p>
                <p>{{ number_format($amounts->amount) }}</p>
            @endif
            <div class="grid  gap-x-3 {{$active ? 'p-1 bg-blue-500 rounded-md': ''}}" wire:click='activeEditAmount'>
                <x-button-editar>
                    Editar
                </x-button-editar>
            </div>
        </div>
        <div {{ $active ? 'visible' : 'hidden' }}>
            <div class="w-full flex justify-center">

                <form class="w-1/3" wire:submit.prevent="updateAmount" novalidate>

                    <div class="flex flex-col w-full">
                        <x-label-global>Nombre</x-label-global>
                        <input class="border-slate-400 border rounded" wire:model="name" type="text" />

                        @error('name')
                            <x-input-error>
                                {{ $message }}
                            </x-input-error>
                        @enderror

                        <x-label-global>Monto</x-label-global>
                        <input class="border-slate-400 border rounded" wire:model="monto" wire:keydown="chageInputMonto" type="text" />

                        @error('monto')
                            <x-input-error>
                                {{ $message }}
                            </x-input-error>
                        @enderror

                        <input type="hidden" wire:model="id_amount" />

                        <input
                            class="border rounded bg-indigo-300 p-1 font-bold mt-3 cursor-pointer hover:bg-indigo-400"
                            type="submit" value="Actualizar" />

                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
