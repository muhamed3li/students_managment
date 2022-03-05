<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class SelectArray extends Component
{
    public $label;
    public $selectdata;
    public $name;
    public $old;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $label,
        $selectdata,
        $name,
        $old = null
    ) {
        $this->label = $label;
        $this->selectdata = $selectdata;
        $this->name = $name;
        $this->old = $old;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.select-array');
    }
}
