@extends('app')


@section('contenido')
    <div>
        <x-header />
        <x-navigation />
        <x-title-local>
            Deudor ---> {{$debtor->name}}
        </x-title-local>
        
        <div class="mt-4 flex items-center flex-col gap-y-4">
            
            <div class="sm:w-3/4  flex flex-col items-center w-4/5 bg-slate-300 rounded pb-4" >
                <div class="grid grid-cols-2 item w-full items-center justify-items-center pt-5">
                    <livewire:details-debtor-form :debtor="$debtor" :businesses="$businesses"  :celulas="$celulas"/>
                    <livewire:create-account :debtor="$debtor" />
                </div>
            </div>

            <livewire:accounts :debtor="$debtor" />    
            
        </div>
    </div>
@endsection
