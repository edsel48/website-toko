<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Link extends Component
{

    public $route;
    public $primary;
    public $text;
    public $on;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $primary=true, $text, $on=false)
    {
        $this->route = $route;
        $this->primary = $primary;
        $this->text = $text;
        $this->on = $on;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.link');
    }
}
