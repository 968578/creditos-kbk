<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ConfigBusinesses extends Component
{

    public $businesses;
    
    public function mount($businesses)
    {
        $this->businesses = $businesses;
    }


    public function render()
    {
        return view('livewire.config.config-businesses');
    }
}
