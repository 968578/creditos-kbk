<div class=" w-2/3">
    @if (session('mesaggeConfirm'))
        <p class="bg-green-300 p-2  rounded font-mukta font-bold">{{ session('mesaggeConfirm') }}</p>
    @endif
    <form action="{{ route('debtor.edit', ['debtor' => $debtor]) }}" method="POST" novalidate>
        @method('PUT')
        @csrf
        @if (session('mensaje'))
            <x-input-error>
                {{ $message }}
            </x-input-error>
        @endif
        <div class="flex flex-col ">
            <x-label-global>Nombre Completo</x-label-global>
            <input class="border-slate-400 border rounded" name='name' type="text" value="{{ $debtor->name }}" />
            @error('name')
                <x-input-error>
                    {{ $message }}
                </x-input-error>
            @enderror
            <x-label-global>Cedula</x-label-global>
            <input class="border-slate-400 border rounded" name='cedula' type="text"
                value="{{ $debtor->cedula }}" />
            @error('cedula')
                <x-input-error>
                    {{ $message }}
                </x-input-error>
            @enderror
            <x-label-global>Cargo</x-label-global>
            <input class="border-slate-400 border rounded" name='cargo' type="text"
                value="{{ $debtor->cargo }}" />
            @error('cargo')
                <x-input-error>
                    {{ $message }}
                </x-input-error>
            @enderror
            <x-label-global>Empresa</x-label-global>
            <select name='business_id'>
                <option value="">--Selecciona Empresa--</option>
                @forelse ($businesses as $business)
                    <option value="{{ $business->id }}"
                        {{ $business->id === $debtor->business?->id ? 'selected' : '' }}>
                        {{ $business->name }}
                    </option>
                @empty
                @endforelse
            </select>
            @error('business_id')
                <x-input-error>
                    {{ $message }}
                </x-input-error>
            @enderror
            <x-label-global>Celula</x-label-global>
            <select name="celula_id">
                <option value="">--Selecciona Celula--</option>
                @forelse ($celulas as $celula)
                    <option value="{{ $celula->id }}"
                        {{ $celula->id === $debtor->celula?->id ? 'selected' : '' }}>{{ $celula->name }}
                    </option>
                @empty
                @endforelse
            </select>
            @error('celula_id')
                <x-input-error>
                    {{ $message }}
                </x-input-error>
            @enderror
            <input class="border rounded bg-indigo-300 p-1 font-bold mt-3 cursor-pointer hover:bg-indigo-400"
                type="submit" value="Actualizar" />
            <div wire:click='activeModalDelete' class="mt-2">
                <x-button-delete>
                    Eliminar
                </x-button-delete>
            </div>

        </div>
    </form>
    <div {{ $active_delete ? 'visible' : 'hidden' }}>
        <div class="w-full flex justify-center">

            <form class="w-max" wire:submit.prevent="deleteDebtor" novalidate>
                <div class="flex flex-col w-full items-center">
                    <x-label-confirm-delete>¿Eliminar al Deudor <span
                            class="font-oswald ">{{ $debtor->name }}</span>? Tambien se Eliminara sus cuentas y pagos
                    </x-label-confirm-delete>

                    <input type="submit" value="Eliminar"
                        class="bg-red-400 p-1 rounded hover:bg-red-500 cursor-pointer text-center w-1/3" />

                </div>
            </form>
        </div>
    </div>
</div>
