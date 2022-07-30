<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DetailsDebtorForm extends Component
{

    public $active_delete = false;
    public $debtor;
    public $businesses;
    public $celulas;

    public $name;
    
    public function activeModalDelete()
    {
        $this->active_delete = !$this->active_delete;
    }

    public function deleteDebtor()
    {
        $this->debtor->delete();
        
        return redirect()->route('debtors');
    }

    public function mount($debtor, $businesses, $celulas)
    {
        $this->debtor = $debtor;
        $this->businesses = $businesses;
        $this->celulas = $celulas;
        $this->name = $debtor->name;
    }

    public function render()
    {
        return view('livewire.details-debtor-form');
    }
}
