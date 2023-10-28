<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{

    public $type;
    public $text;
    public $primary;
    public $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type="button", $text="SOME RANDOM TEXT", $primary=true, $id="some-random-id")
    {
        $this->type = $type;
        $this->text = $text;
        $this->primary = $primary;
        $this->id = $id;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
