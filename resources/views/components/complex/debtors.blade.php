<div class="sm:w-3/4  flex flex-col items-center w-4/5 bg-slate-300 rounded pb-4">
    <div class="mt-4 flex flex-col w-4/5 gap-y-2">
        <table class="table-auto gap-1 " >
            <thead>
                <tr >
                    <th class="border border-slate-400 bg-indigo-200">
                        <x-table-head>Nombre</x-table-head>
                    </th>
                    <th class="border border-slate-400 bg-indigo-200" >
                        <x-table-head>Cargo</x-table-head>
                    </th>
                    <th class="border border-slate-400 bg-indigo-200">
                        <x-table-head>Celula</x-table-head>
                    </th>
                    <th class="border border-slate-400 bg-indigo-200">
                        <x-table-head>Empresa</x-table-head>
                    </th >
                    <th class="border border-slate-400 bg-indigo-200">
                        <x-table-head>Estado</x-table-head>
                    </th>

                </tr>
            </thead>
            <tbody>
                @forelse ($debtors as $debtor)
                    <tr class="border border-slate-400 " >
                        <td class="hover:text-indigo-500 font-bold cursor-pointer" >
                            <a href="{{route('debtor.show', ['debtor' => $debtor])}}">
                                <x-table-body>{{$debtor->name}}</x-table-body>
                            </a>
                        </td>
                        <td>
                            <x-table-body>{{$debtor->cargo}}</x-table-body>
                        </td>
                        <td>
                            <x-table-body>{{$debtor?->celula?->name}}</x-table-body>
                        </td>
                        <td>
                            <x-table-body>{{$debtor?->business?->name}}</x-table-body>
                        </td>
                        <td>
                            <x-table-body>{{$debtor->status->name}}</x-table-body>
                        </td>
                    </tr>   
                @empty
                    No hay deudores
                @endforelse
            </tbody>
        </table>
    </div>
</div>
