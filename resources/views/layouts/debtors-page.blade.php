@extends('app')


@section('contenido')
    <div>
        <x-header />
        <x-navigation />
        <x-title-local>
            Deudores
        </x-title-local>
        <div class="mt-4 flex items-center flex-col gap-y-4">
            <x-debtors :debtors="$debtors" />
        </div>
    </div>
@endsection
