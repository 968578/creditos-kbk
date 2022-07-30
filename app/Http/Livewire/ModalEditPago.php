<?php

namespace App\Http\Livewire;


use App\Models\Pago;
use Livewire\Component;

class ModalEditPago extends Component
{
    
    public $account;
    public $pago;
    public $active = false;
    public $active_delete = false;
    public $monto;
    public $fecha_pago;
    public $id_pago;


    public function activeModal()
    {
        $this->active = !$this->active;
        $this->active_delete = false;
    }

    protected $rules = [
        'monto' => ['required','numeric'],
        'fecha_pago' => ['required']
    ];

    public function updatePago()
    {

        $this->validate();
        
        $old_pago = Pago::find($this->id_pago);
        $old_pago->monto = $this->monto;
        $old_pago->fecha_pago = $this->fecha_pago;

        $old_pago->save();

        session()->flash('confirmUpdatePago' . $this->id_pago ,'Pago Actualizado con exito');

    
        return redirect()->route('account.show', [
            'debtor'=> $this->account->debtor_id,
            'account' => $this->account->id
        ]);
    }

    public function activeModalDelete()
    {
        $this->active_delete = !$this->active_delete;
        $this->active = false;
    }

    public function deletePago()
    {
        $this->pago->delete();
        session()->flash('confirmDeletePago','Pago ELiminado con Exito');

        return redirect()->route('account.show',[
            'debtor' => $this->account->debtor,
            'account' => $this ->account
        ]);

    }

    public function mount($pago)
    {
        $this->account = $pago->account;

        $this->pagos = $pago;
        $this->monto = $pago->monto;
        $this->fecha_pago = $pago->fecha_pago;
        $this->id_pago = $pago->id;
        // dd($this->account->id);

    }


    public function render()
    {
        return view('livewire.modal-edit-pago');
    }
}
