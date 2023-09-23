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
    public function __construct($name, $price, $img="https://placehold.co/150x150", $stock)
    {
        $this->name = $name;
        $this->price = $price;
        $this->img = $img;
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
