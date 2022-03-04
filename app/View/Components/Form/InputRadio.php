<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class InputRadio extends Component
{
    public $label;
    public $arr;
    public $name;
    public $old;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $label,
        $arr,
        $name,
        $old = null,
    ) {
        $this->label = $label;
        $this->arr = $arr;
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
        return view('components.form.input-radio');
    }
}
