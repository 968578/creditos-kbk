<?php

namespace App\Http\Livewire;

use App\Models\Account;
use Livewire\Component;
use Illuminate\Http\Request;

class CreateAccount extends Component
{

    public $debtor;

    public function mount($debtor)
    {
        $this->debtor = $debtor;
    }

    public $monto;
    public $fecha_solicitud;
    public $fecha_desembolso;
    public $numero_cuotas;
    public $valor_cuota;
    public $fecha_aprobacion;
    public $estado;

    protected $rules =[
        'monto' => ['required', 'integer'],
        'fecha_solicitud' => ['required'],
        'fecha_desembolso' => ['nullable'],
        'numero_cuotas' => ['required', 'numeric'],
        'valor_cuota' => ['required','numeric'],
        'fecha_aprobacion' => ['nullable'],
        'estado'=> ['required'],
        

    ];

    public function storeAccount(Request $request)
    {
    
        $datos = $this->validate();

        Account::create([
            'monto' => $datos['monto'],
            'fecha_solicitud' => $datos['fecha_solicitud'],
            'fecha_desembolso' => $datos['fecha_desembolso'],
            'numero_cuotas' => $datos['numero_cuotas'],
            'valor_cuota' => $datos['valor_cuota'],
            'fecha_aprobacion' => $datos['fecha_aprobacion'],
            'estado' => $datos['estado'],
            'cuotas_pagadas' => '0',
            'debtor_id' => $this->debtor->id
        ]);

        session()->flash('messageConfirm','Cuenta Creada con Exito');

        return redirect()->route('debtor.show', ['debtor' => $this->debtor]);
    }

    public function render()
    {
        return view('livewire.create-account');
    }

    
}
