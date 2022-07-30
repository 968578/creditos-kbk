@extends('app')


@section('contenido')
  <div>
    <x-header/>
    <x-navigation/>
    <x-title-local>
      Configuracion
  </x-title-local>
    <div class="mt-4 flex items-center flex-col gap-y-4" >

      <livewire:config-amount :amounts="$amounts" />
      
      <livewire:config-businesses :businesses="$businesses" >
      
      <livewire:config-celulas :celulas="$celulas" />
    </div>
  </div>

@endsection