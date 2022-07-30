<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PagoMasivoItem extends Component
{

    public $account;

    public function mount($account)
    {
        $this->account = $account;
    }

    public function render()
    {
        return view('livewire.pago-masivo-item');
    }
}
