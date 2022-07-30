@extends('app')


@section('contenido')
    <div>
        <x-header />
        <x-navigation />
        <x-title-local>
            Cuenta ---> {{$account->debtor->name}} ---> {{number_format($account->monto)}}
        </x-title-local>

        <div class="mt-4 flex items-center flex-col gap-y-4">
            
            <div class="sm:w-3/4  flex flex-col items-center w-4/5 bg-slate-300 rounded pb-4" >
                <div class="grid grid-cols-2 item w-full items-center justify-items-center pt-5">
                    <livewire:details-account-form :debtor="$account->debtor" :account="$account"/>
                    <livewire:create-pago :account="$account" />
                    
                </div>
            </div> 
            <livewire:pagos :account="$account" >
            
        </div>
        
    </div>
@endsection
