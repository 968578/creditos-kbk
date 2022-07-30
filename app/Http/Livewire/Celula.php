<?php

namespace App\Http\Livewire;

use App\Models\Celula as ModelsCelula;
use Livewire\Component;

class Celula extends Component
{

    public $celula;
    public $active = false;
    public $active_delete = false;
    public $name;
    public $id_celula;

    protected $rules =[
        'name' => ['required','min:4', 'max:200'],
        
    ];

    public function activeModal()
    {
        $this->active = !$this->active; 
    }

    public function updateCelula()
    {

        $this->validate();

        $old_celula = ModelsCelula::find($this->id_celula);
        $old_celula->name = $this->name;

        $old_celula->save();

        session()->flash('confirmUpdateCelula' . $this->id_celula, 'Celula Actualizada Con Exito');

        return redirect()->route('config');

    }

    public function activeModalDelete()
    {
        $this->active_delete = !$this->active_delete;
    }

    public function deleteCelula()
    {

        $old_celula = ModelsCelula::find($this->id_celula);

        $old_celula->delete();

        session()->flash('confirmDeleteCelula' ,'Celula Eliminada con exito');

        return redirect()->route('config');
    }


    public function mount($celula)
    {
        $this->celula = $celula;
        $this->name = $celula->name;
        $this->id_celula = $celula->id;
    }


    public function render()
    {
        return view('livewire.celula');
    }
}
