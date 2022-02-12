<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SelectSearch extends Component
{
    public $label;
    public $selectdata;
    public $key;
    public $name;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label,$selectdata,$name,$key = "name")
    {
        $this->label = $label;
        $this->selectdata = $selectdata;
        $this->key = $key;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.select-search');
    }
}
