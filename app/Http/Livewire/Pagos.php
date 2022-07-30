<?php

namespace App\Http\Livewire;


use Livewire\Component;
use Illuminate\Http\Request;

class Pagos extends Component
{

    public $account;
    public $pagos = [];
    // public $number = 0;
    

    // public $active = true;

    // public function activeModal()
    // {
    //     $this->active = !$this->active;
    //     // $this->number ++;

    //     // dd('si funciona');
    //     // dd($this);
    //     // dd($this->pagos);
    //     // dd($pago['id']);  

    //     // for ($i = 0; $i < count($this->pagos); $i++){
    //     //     if($this->pagos[$i]['id'] == $pago['id'] ){
    //     //         $this->pagos[$i]['edit'] = true;
    //     //     }else{
    //     //         $this->pagos[$i]['edit'] = false;
    //     //     }
    //     // }
    //         // dd('aqui');
    //     // dd($this->pagos);
    //         // $this->pago['edit'] = true;
        
    // }


    public function mount($account)
    {
        // array_push($this->pagos, $account->pagos);

            $this->pagos = $account->pagos;

        for ($i = 0; $i < count($this->pagos); $i++){
            
            $this->pagos[$i]['edit'] = false;
            
        }
        // $this->pagos[0]->edit = false;
        // dd($this->pagos);
        // $this->account = $account;
        // dd($this->account->pagos[0]);
    }


    
    public function render()
    {
        return view('livewire.pagos');
    }
}
