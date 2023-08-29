<?php

namespace App\View\Components\product;

use App\Models\Inventory\Product;
use Illuminate\View\Component;

class ProductCard extends Component
{
    public $name;
    public $price;
    public $img;
    public $stock;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $price, $img, $stock)
    {
        $this->name = $name;
        $this->price = $price;
        $this->img = $img;

        if ($this->img == "") $this->img = "https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fmyrescuedogrescuedme.files.wordpress.com%2F2011%2F09%2Fboo-the-worlds-cutest-dog-profile-picture-on-facebook.jpg&f=1&nofb=1&ipt=221500745647a9d36bc2773e810b0707b5b18ee76d041b83f47d980a5fab9dc8&ipo=images";

        $this->stock = $stock;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // dd($this->product);
        return view('components.product.product-card');
    }
}
