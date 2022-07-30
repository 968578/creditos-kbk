<div class="sm:w-5/6  flex flex-col items-center w-5/6 bg-slate-300 rounded pb-4 px-6">
    <h1 class="font-bold underline text-center">
        Listado de Pagos
    </h1>
    <p class="w-2/3 font-mukta font-bold mt-2">
        EL proximo pago debe reallizarse el 30 de julio
    </p>
    {{-- @php
        dd($accounts)
    @endphp --}}
    <div class="border border-slate-600 w-full">
        <div class="grid grid-cols-7  text-center">
            <div class="border border-slate-400 bg-indigo-200 font-bold flex flex-row items-center" >
                <x-table-head>Nombre Deudor</x-table-head>
            </div>
            <div class="border border-slate-400 bg-indigo-200 font-bold flex flex-row items-center" >
                <x-table-head>Monto Credito</x-table-head>
            </div>
            <div class="border border-slate-400 bg-indigo-200 font-bold flex flex-row items-center" >
                <x-table-head>Fecha Desembolso</x-table-head>
            </div>
            <div class="border border-slate-400 bg-indigo-200 font-bold flex flex-row items-center" >
                <x-table-head>Numero Cuota</x-table-head>
            </div>
            <div class="border border-slate-400 bg-indigo-200 font-bold flex flex-row items-center" >
                <x-table-head>Valor Cuota</x-table-head>
            </div>
            <div class="border border-slate-400 bg-indigo-200 font-bold flex flex-row items-center" >
                <x-table-head>Fecha Pago (Hoy)</x-table-head>
            </div>
            <div class="border border-slate-400 bg-indigo-200 font-bold flex flex-row items-center" >
                <x-table-head>Confirmar Pago</x-table-head>
            </div>
        </div>
        <div>
            @forelse ($array_accounts as $index => $account)
                {{-- <livewire:pago-masivo-item :account="$account"  /> --}}
                
                    <div class="grid grid-cols-7 items-center justify-center border border-blue-400">
                        <h1 >{{  $account->debtor->name}}</h1>
                        <h1>{{number_format($account->monto)}}</h1>
                        <h1>{{$account->fecha_desembolso}}</h1>
                        <h1>3</h1>
                        <h1>{{number_format($account->valor_cuota)}}</h1>
                        <h1>{{{date("Y-m-d")}}}</h1>
                        <div>
                            <input type="checkbox" wire:model='array_accounts.{{$account->id}}'   />
                            
                        </div>
                    </div>
                
                
                @empty
                No Hay pagos Para procesar
                @endforelse
        </div>
        <div class="bg-red-500" wire:click='PagarTodo'>
            <x-button-editar >
                Pagar Todo
            </x-button-editar >
        </div>

    </div>
</div>
