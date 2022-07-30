<div class="sm:w-3/4  flex flex-col items-center w-4/5 bg-slate-300 rounded pb-4">
    <h1 class="font-bold underline text-center">Cuentas</h1>
    <div class="grib grid-cols-1 mx-2">
        <table>
            <thead>
                <tr>
                    <th class="border border-slate-400 bg-indigo-200">
                        <x-table-head>Monto</x-table-head>
                    </th>
                    <th class="border border-slate-400 bg-indigo-200">
                        <x-table-head>Fecha Solicitud</x-table-head>
                    </th>
                    <th class="border border-slate-400 bg-indigo-200">
                        <x-table-head>Fecha Aprobacion</x-table-head>
                    </th>
                    <th class="border border-slate-400 bg-indigo-200">
                        <x-table-head>Fecha Desembolso</x-table-head>
                    </th>
                    <th class="border border-slate-400 bg-indigo-200">
                        <x-table-head>Numero de cuotas</x-table-head>
                    </th>
                    <th class="border border-slate-400 bg-indigo-200">
                        <x-table-head>Valor Cuota</x-table-head>
                    </th>
                    <th class="border border-slate-400 bg-indigo-200">
                        <x-table-head>Cuotas Pagadas</x-table-head>
                    </th>
                    <th class="border border-slate-400 bg-indigo-200">
                        <x-table-head>Saldo Actual</x-table-head>
                    </th>
                    <th class="border border-slate-400 bg-indigo-200">
                        <x-table-head>Estadoo</x-table-head>
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($debtor->accounts as $account)
                    <tr class="border border-slate-400 hover:bg-indigo-300 cursor-pointer "
                        wire:click="$emitSelf('redirectAccount', {{ $account }})">
                        <td >
                            <x-table-body>{{ number_format($account->monto) }}</x-table-body>
                        </td>
                        <td>
                            <x-table-body>{{ $account->fecha_solicitud }}</x-table-body>
                        </td>
                        <td>
                            <x-table-body>{{ $account->fecha_aprobacion }}</x-table-body>
                        </td>
                        <td>
                            <x-table-body>{{ $account->fecha_desembolso }}</x-table-body>
                        </td>
                        <td>
                            <x-table-body>{{ $account->numero_cuotas }}</x-table-body>
                        </td>
                        <td>
                            <x-table-body>{{ number_format($account->valor_cuota) }}</x-table-body>
                        </td>
                        <td>
                            <x-table-body>{{ $account->cuotas_pagadas }}</x-table-body>
                        </td>
                        <td>
                            <x-table-body>90</x-table-body>
                        </td>
                        <td>
                            <x-table-body>{{ $account->estado }}</x-table-body>
                        </td>
                    </tr>
                @empty
                    No hay cuentas
                @endforelse
            </tbody>
        </table>

        <div>

        </div>
    </div>
</div>
