<?php

namespace App\View\Components\sidebar;

use Illuminate\View\Component;

class SidebarItem extends Component
{

    public $route;
    public $active;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $active=false)
    {
        //
        $this->route = $route;
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidebar.sidebar-item');
    }
}
