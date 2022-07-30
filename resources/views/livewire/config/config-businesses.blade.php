<div class="sm:w-3/4  flex flex-col items-center w-4/5 bg-slate-300 rounded pb-4">
    <form action="{{ route('business.store') }}" method="POST" novalidate>
        @csrf
        <x-label-global>Empresa</x-label-global>
        <div class="flex flex-col sm:flex-row sm:items-center gap-x-1">
            <input placeholder="Nombre Empresa" class="border-slate-400 border rounded h-min" name='nameBusiness'
                type="text" />
            <input class="border rounded bg-indigo-300 p-1 font-bold mt-2 sm:m-0 cursor-pointer hover:bg-indigo-400"
                type="submit" value="Agregar Empresa" />
            @error('nameBusiness')
                <x-input-error>
                    {{ $message }}
                </x-input-error>
            @enderror
        </div>
    </form>
    <div class="mt-4 flex flex-col w-4/5 gap-y-2">
        @if (session()->has('confirmDeleteBusiness'))
            <p class="bg-green-300 p-2  rounded font-mukta font-bold">{{ session('confirmDeleteBusiness') }}</p>
        @endif
        @forelse ($businesses as $business)
            {{-- <div class="w-full bg-gray-100 flex sm:flex-row justify-between rounded-sm p-1 flex-col items-center">
                <p>{{ $business->name }}</p>
                <div class="grid grid-cols-2 gap-x-3">
                    <x-button-editar>
                        Editar
                    </x-button-editar>
                    <x-button-delete>
                        Eliminar
                    </x-button-delete>
                </div>
            </div> --}}
            <livewire:business :business="$business">
            @empty
                No hay empresas Registradas
        @endforelse
    </div>
</div>
