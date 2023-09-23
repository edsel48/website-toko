<?php

namespace App\View\Components\user;

use Illuminate\View\Component;

class UserLogo extends Component
{

    public $type;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type="main")
    {
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.user.user-logo');
    }
}
