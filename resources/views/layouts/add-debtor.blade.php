@extends('app')


@section('contenido')
    <div>
        <x-header />
        <x-navigation />
        <x-title-local>
            Agregar Deudor
        </x-title-local>
        <div class="mt-4 flex items-center flex-col gap-y-4" >
            <div class="sm:w-3/4  flex flex-col items-center w-4/5 bg-slate-300 rounded pb-4">
                @if (session('mesaggeConfirm'))
                    <p class="bg-green-300 p-2  rounded font-mukta font-bold">{{session('mesaggeConfirm')}}</p>
                    
                @endif
                
                <form action="{{route('debtor.store')}}" method="POST" novalidate  class="w-1/3">
                    @csrf
                    @if (session('mensaje'))
                        <x-input-error>
                            {{ $message}}
                        </x-input-error>
                    @endif
                    <div class="flex flex-col ">
                        <x-label-global>Nombre Completo</x-label-global>
                        <input class="border-slate-400 border rounded" name='name' type="text" value="{{old('name')}}" />
                        @error('name')
                            <x-input-error>
                                {{ $message }}
                            </x-input-error>
                        @enderror
                        <x-label-global>Cedula</x-label-global>
                        <input class="border-slate-400 border rounded" name='cedula' type="text" value="{{old('cedula')}}" />
                        @error('cedula')
                            <x-input-error>
                                {{ $message }}
                            </x-input-error>
                        @enderror
                        <x-label-global>Cargo</x-label-global>
                        <input class="border-slate-400 border rounded" name='cargo' type="text" value="{{old('cargo')}}" />
                        @error('cargo')
                            <x-input-error>
                                {{ $message }}
                            </x-input-error>
                        @enderror
                        <x-label-global>Empresa</x-label-global>
                        <select name='business_id'  >
                            <option value="">--Selecciona Empresa--</option>
                            @forelse ($businesses as $business)
                                <option value="{{$business->id}}">{{$business->name}}</option>
                            @empty
                                
                            @endforelse
                        </select>
                        @error('business_id')
                            <x-input-error>
                                {{ $message }}
                            </x-input-error>
                        @enderror
                        <x-label-global>Celula</x-label-global>
                        <select name="celula_id" >
                            <option value="">--Selecciona Celula--</option>
                            @forelse ($celulas as $celula)
                                <option value="{{$celula->id}}">{{$celula->name}}</option>
                            @empty
                                
                            @endforelse
                        </select>
                        @error('celula_id')
                            <x-input-error>
                                {{ $message }}
                            </x-input-error>
                        @enderror
                        <input class="border rounded bg-indigo-300 p-1 font-bold mt-3 cursor-pointer hover:bg-indigo-400"
                            type="submit" value="Agregar deudor" />
                            
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
