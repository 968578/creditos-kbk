<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Accounts extends Component
{

    public $debtor;
    

    public function mount($debtor)
    {
        $this->debtor = $debtor;
    }

    protected $listeners =[
        'redirectAccount' => 'redirectAccount'
    ];


    public function redirectAccount($account)
    {
        
        return redirect()->route('account.show', [
            'debtor'=> $account['debtor_id'],
            'account' => $account['id']
        ]);
    }

    public function render()
    {
        return view('livewire.accounts');
    }
}
