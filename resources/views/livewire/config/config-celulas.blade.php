<div class="sm:w-3/4  flex flex-col items-center w-4/5 bg-slate-300 rounded pb-4">
    <form action="{{ route('celula.store') }}" method="POST" novalidate>
        @csrf
        <x-label-global>Celula</x-label-global>
        <div class="flex flex-col sm:flex-row sm:items-center gap-x-1">
            <input placeholder="Nombre Celula" class="border-slate-400 border rounded h-min" name='nameCelula'
                type="text" />
            <input class="border rounded bg-indigo-300 p-1 font-bold mt-2 sm:m-0 cursor-pointer hover:bg-indigo-400"
                type="submit" value="Agregar Celula" />
            @error('nameCelula')
                <x-input-error>
                    {{ $message }}
                </x-input-error>
            @enderror
        </div>
    </form>
    <div class="mt-4 flex flex-col w-4/5 gap-y-2">
        @if (session()->has('confirmDeleteCelula'))
            <p class="bg-green-300 p-2  rounded font-mukta font-bold">{{ session('confirmDeleteCelula') }}</p>
        @endif
        @forelse ($celulas as $celula)
            {{-- <div class="w-full bg-gray-100 flex  sm:flex-row justify-between rounded-sm p-1 flex-col items-center">
                <p>{{ $celula->name }}</p>
                <div class="grid grid-cols-2 gap-x-3">
                    <x-button-editar>
                        Editar
                    </x-button-editar>
                    <x-button-delete>
                        Eliminar
                    </x-button-delete>
                </div>
            </div>
            <div>
                ensayo por cada uno
            </div> --}}
            <livewire:celula :celula="$celula"  />
        @empty
        No hay celulas registradas
        @endforelse
        
    </div>

</div>
