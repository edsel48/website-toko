<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $name;
    public $value;
    public $type;
    public $message;
    public $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $value="", $type="text", $message="", $title)
    {
        //
        $this->name = $name;
        $this->value = $value;
        $this->type = $type;
        $this->message = $message;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
