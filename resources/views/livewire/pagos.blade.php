<div class="sm:w-3/4  flex flex-col items-center w-4/5 bg-slate-300 rounded p-4">
    @if (session()->has('confirmDeletePago'))
            <p class="bg-green-300 p-2  rounded font-mukta font-bold">{{ session('confirmDeletePago') }}</p>
        @endif
    <h1 class="font-bold underline text-center">Pagos</h1>
    <div class="grib grid-cols-1 mx-2 w-full">
        <div class="w-full">
            <div class="grid grid-cols-4 " >
                <div class="border border-slate-400 bg-indigo-200 text-center font-bold">
                    <x-table-head >Monto</x-table-head>
                </div>
                <div class="border border-slate-400 bg-indigo-200 text-center font-bold">
                    <x-table-head>Fecha Pago</x-table-head>
                </div>
                <div class="border border-slate-400 bg-indigo-200 text-center font-bold">
                    <x-table-head>Editar</x-table-head>
                </div>
                <div class="border border-slate-400 bg-indigo-200 text-center font-bold">
                    <x-table-head>Eliminar</x-table-head>
                </div>

            </div>
            <div class="grid grid-rows-1">

                @forelse ($pagos as $pago)

                    <livewire:modal-edit-pago :pago="$pago" wire:key="{{ $pago->id }}"  />
                @empty
                No hay pagos realizados
                @endforelse

                </div>
        </div>

        <div>

        </div>
    </div>
</div>
