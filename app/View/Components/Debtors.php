<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Debtors extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $debtors;

    public function __construct($debtors)
    {
        $this->debtors = $debtors;
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.complex.debtors');
    }
}
