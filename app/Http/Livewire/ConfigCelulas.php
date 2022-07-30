<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ConfigCelulas extends Component
{

    public $celulas;

    public function mount($celulas)
    {
        $this->celulas = $celulas;
    }


    public function render()
    {
        return view('livewire.config.config-celulas');
    }
}
