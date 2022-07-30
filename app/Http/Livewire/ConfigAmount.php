<?php

namespace App\Http\Livewire;

use App\Models\Amount;
use Livewire\Component;

class ConfigAmount extends Component
{

    public $amounts;
    public $active = false;

    public $monto;
    public $name;
    public $id_amount;

    protected $rules =[
        'monto' => ['required', 'integer'],
        'name' => ['required','min:4']
    ];
    
    public function mount($amounts)
    {
        // dd($amounts[0]->amount);



        $this->amounts = $amounts[0];
        $this->monto = $amounts[0]->amount;
        // dd(strrev($this->monto));
        // dd( substr($this->monto, 1, 1) );
        // for($i = 0 ; $i < strlen($this->monto) ; $i++ ){
        //     $nueva_palabra ='';
        //     if($i % 3 ===0 &&  $i > 0 ){
        //         $ultima_parte = substr($this->monto, $i);
        //         $primera_parte = substr($this->monto, 0, $i);
        //         $nueva_palabra = $primera_parte . ',' . $ultima_parte;
        //         echo $nueva_palabra . '|||||';
        //     }
        // }
        // dd($this->monto);
        $this->name = $amounts[0]->name;
        $this->id_amount = $amounts[0]->id;
        // dd($this);


    }

    public function chageInputMonto()
    {
        // $this->monto = number_format($this->monto, 0,'.',"'");
    }


    public function activeEditAmount()
    {
        $this->active = !$this->active;
    }

    public function updateAmount()
    {
        $this->validate();

        $old_amount = Amount::find($this->id_amount);
        $old_amount->amount = $this->monto;
        $old_amount->name = $this->name;

        $old_amount->save();

        session()->flash('confirmUpdateAmount','Fondo Actualizado con exito');

        return redirect()->route('config');
    }


    public function render()
    {
        return view('livewire.config.config-amount');
    }
}
