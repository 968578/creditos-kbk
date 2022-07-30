<?php

namespace App\Http\Livewire;

use App\Models\Pago;
use Livewire\Component;

class CreatePago extends Component
{

    public $monto;
    public $fecha_pago;

    public $account;

    protected $rules =[
        'monto' => ['required','numeric'],
        'fecha_pago' => ['required'],
    ];

    public function storePago()
    {
        $datos =$this->validate();
        
        Pago::create([
            'monto' => $datos['monto'],
            'fecha_pago' => $datos['fecha_pago'],
            'account_id' => $this->account->id
        ]);

        session()->flash('messagePagoConfirm','Pago Agregado con Exito');

        return redirect()->route('account.show', [
            'debtor'=> $this->account->debtor->id,
            'account' => $this->account->id
        ]);

    }

    public function mount($account)
    {
        $this->account = $account;
    }

    public function render()
    {
        return view('livewire.create-pago');
    }
}
