<div>
    <div class="flex-col divide-y pl-5 sm:divide-y-0 bg-gray-300 flex sm:flex-row sm:divide-x divide-slate-400">
        <a href="{{route('home')}}">
            <x-nav-link>
                Home
            </x-nav-link>
        </a>
        <a  href="{{route('debtor.create')}}">
            <x-nav-link>
                Agregar Deudor
            </x-nav-link>
        </a>
        <a href="{{route('debtors')}}">
            <x-nav-link>
                Deudores
            </x-nav-link>
        </a>
        <a href="{{route('pagos.masivos')}}">
            <x-nav-link>
                Pagar
            </x-nav-link>
        </a>
        <a href="{{route('config')}}">
            <x-nav-link>
                Configuracion
            </x-nav-link>
        </a>
        <a href="#">
            <x-nav-link>
                Cerrar Sesion
            </x-nav-link>
        </a>
    </div>
</div>