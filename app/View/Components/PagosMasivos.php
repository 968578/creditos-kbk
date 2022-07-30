<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PagosMasivos extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $accounts ;
    public function __construct($accounts)
    {
        $this->accounts = $accounts;
        dd($this->accounts);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layouts.pagos-masivos');
    }
}
