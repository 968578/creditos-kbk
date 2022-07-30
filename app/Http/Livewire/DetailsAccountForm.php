<?php

namespace App\Http\Livewire;

use App\Models\Account;
use Livewire\Component;
use Illuminate\Http\Request;

class DetailsAccountForm extends Component
{

    // propieades enviados al componente 
    public $debtor;
    public $account;
    public $active_delete= false;

    public function mount($debtor, $account)
    {
        
        $this->debtor = $debtor;
        $this->account = $account;
        $this->id_account = $account->id;
        $this->monto = $account->monto;
        $this->fecha_solicitud = $account->fecha_solicitud;
        $this->fecha_desembolso = $account->fecha_desembolso;
        $this->numero_cuotas = $account->numero_cuotas;
        $this->valor_cuota = $account->valor_cuota;
        $this->fecha_aprobacion = $account->fecha_aprobacion;
        $this->estado = $account->estado;
    }


    // propiedades para el registro de los inputs
    public $id_account;
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

    public function updateAccount(Request $request)
    {
    
        $datos = $this->validate();

        $old_account = Account::find($this->id_account);

        // dd($old_account);

        $old_account->monto = $this->monto;
        $old_account->fecha_solicitud = $this->fecha_solicitud;
        $old_account->fecha_desembolso = $this->fecha_desembolso;
        $old_account->numero_cuotas = $this->numero_cuotas;
        $old_account->valor_cuota = $this->valor_cuota;
        $old_account->fecha_aprobacion = $this->fecha_aprobacion;
        $old_account->estado = $this->estado;

        $old_account->save();

        session()->flash('messageConfirm','Cuenta Actualizada con Exito');

        return redirect()->route('account.show', [
            'debtor'=> $this->debtor->id,
            'account' => $this->id_account
        ]);
    }

    public function activeModalDelete()
    {
        $this->active_delete = !$this->active_delete ;
    }

    public function deleteAccount()
    {
        $this->account->delete();

        return redirect()->route('debtor.show', ['debtor' => $this->debtor]);
    }

    public function render()
    {
        return view('livewire.details-account-form');
    }
}
