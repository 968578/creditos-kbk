@extends('app')


@section('contenido')
<div>
  <x-header/>
  <div class="flex justify-center items-center min-h-screen ">
    <div class="bg-gray-50 p-7 rounded">
      <form action="{{route('login.store')}}" method="POST" novalidate>
        @csrf
        @if (session('mensaje'))
          <x-input-error>
            {{session('mensaje')}}
          </x-input-error>
        @endif
        <div class="flex flex-col ">
          <x-label-global> Nombre </x-label-global>
          <input  class="border-slate-400 border rounded" name='username'  type="text" />
          @error('username')
            <x-input-error>
              {{$message}}
            </x-input-error>
          @enderror
          
          <x-label-global> Contraseña</x-label-global>
          <input  class="border-slate-400 border rounded" name='password' type="password"/>
          @error('password')
            <x-input-error>
              {{$message}}
            </x-input-error>
          @enderror
          <input class="border rounded bg-indigo-300 p-1 font-bold mt-3 cursor-pointer hover:bg-indigo-400" 
            type="submit" value="Ingresar" />
        </div>
      </form>
    </div>
  </div>

</div>
@endsection