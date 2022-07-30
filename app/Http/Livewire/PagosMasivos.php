<?php

namespace App\Http\Livewire;

use App\Models\Account;
use Livewire\Component;

class PagosMasivos extends Component
{

    public $accounts;
    public $array_accounts = [];
    public $pagos_select = [];

    public function mount()
    {
        $this->accounts = Account::all();
        // dd($this->ensayo_accounts);
        $this->array_accounts = $this->accounts;
        // dd($accounts->count());
        // for($i = 0; $i < $this->accounts->count(); $i++){
        //     // $this->accounts[$i]->check = true;
        //     // dd($accounts[$i]);
        //     array_push($this->array_accounts,$this->accounts[$i]);
        // }
        // dd($this->array_accounts);
    }

    public function RemoveChecked()
    {
        // for($i = 0; $i < count($this->array_accounts); $i++){
        //     // dd($this->array_accounts[$i]->check);
        //     if($this->array_accounts[$i]['id'] == $account['id']){
        //         $this->array_accounts[$i]['check'] = false;
        //     }
        // }
        // dd($this->array_accounts);
            // dd($account['id']);
        // dd($this->pagos_select);
    }

    public function PagarTodo()
    {
        dd($this->pagos_select);
    }

    public function render()
    {
        return view('livewire.pagos-masivos');
    }
}
