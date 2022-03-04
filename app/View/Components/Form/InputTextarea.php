<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class InputTextarea extends Component
{
    public $name;
    public $label;
    public $old;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label, $old = "")
    {
        $this->name = $name;
        $this->label = $label;
        $this->old = $old;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.input-textarea');
    }
}
