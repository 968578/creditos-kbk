<?php

namespace App\Http\Livewire;

use App\Models\Business as ModelsBusiness;
use Livewire\Component;

class Business extends Component
{

    public $business;
    public $active = false;
    public $activeDelete = false;
    public $name ;
    public $id_business;

    protected $rules =[
        'name' => ['required','min:4', 'max:200'],
        
    ];

    public function mount($business)
    {
        $this->business = $business;
        $this->name = $business->name;
        $this->id_business = $business->id;
    }

    public function activeEditBusiness()
    {
        $this->active = !$this->active;
    }

    public function activeModalDelete()
    {
        $this->activeDelete = !$this->activeDelete;
    }

    public function updateBusiness()
    {
        $this->validate();

        $old_business = ModelsBusiness::find($this->id_business);
        $old_business->name = $this->name;

        $old_business->save();

        session()->flash('confirmUpdateBusiness' . $this->id_business,'Empresa Actualizada con exito');
        
        return redirect()->route('config');
    }

    public function deleteBusiness()
    {
        $old_business = ModelsBusiness::find($this->id_business);

        $old_business->delete();

        session()->flash('confirmDeleteBusiness' ,'Empresa Eliminada con exito');

        return redirect()->route('config');
    }

    public function render()
    {
        return view('livewire.business');
    }
}
