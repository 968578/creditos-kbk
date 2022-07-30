@extends('app')


@section('contenido')
    <div>
        <x-header />
        <x-navigation />
        <x-title-local>
            Pago Masivo
        </x-title-local>
        <div class="mt-4 flex items-center flex-col gap-y-4">
            {{-- <div class="sm:w-5/6  flex flex-col items-center w-5/6 bg-slate-300 rounded pb-4 px-6">
                <h1 class="font-bold underline text-center">
                    Listado de Pagos
                </h1>
                <p class="w-2/3 font-mukta font-bold mt-2">
                    EL proximo pago debe reallizarse el 30 de julio
                </p>
                
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
                        @forelse ($accounts as $account)
                            
                            
                                <div class="grid grid-cols-7 items-center justify-center border border-blue-400">
                                    <h1 >{{$account->debtor->name}}</h1>
                                    <h1>{{number_format($account->monto)}}</h1>
                                    <h1>{{$account->fecha_desembolso}}</h1>
                                    <h1>3</h1>
                                    <h1>{{number_format($account->valor_cuota)}}</h1>
                                    <h1>{{{date("Y-m-d")}}}</h1>
                                    <input type="checkbox" >
                                </div>
                            
                            
                            @empty
                            No Hay pagos Para procesar
                            @endforelse
                    </div>
                        <input class="border rounded bg-indigo-300 p-1 font-bold mt-3 cursor-pointer hover:bg-indigo-400"
                type="submit" value="Pagar Todo" />

                </div>
            </div> --}}
            <livewire:pagos-masivos  />
        </div>
        {{-- {{$array_accounts}} --}}
    </div>
@endsection
