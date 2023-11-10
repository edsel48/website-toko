<?php

namespace Database\Seeders;

use App\Models\Auth\User;
use App\Models\Inventory\Size;
use App\Models\Inventory\Unit;
use App\Models\Inventory\Promo;
use Illuminate\Database\Seeder;
use App\Models\Inventory\Product;
use App\Models\Inventory\Category;
use App\Models\Inventory\Supplier;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $AMOUNT = 11;

        // create admin
        $admin = new User;
        $admin->username = "admin";
        $admin->password = "admin";
        $admin->email = "admin@admin";
        $admin->phone = "admin";
        $admin->type = 0;
        $admin->save();

        // create user
        $user = new User;
        $user->username = "user";
        $user->password = "user";
        $user->email = "user@user";
        $user->phone = "user";
        $user->type = 1;
        $user->save();

        // create suppliers
        for($i = 1; $i < $AMOUNT; $i++)
        {
            $supplier = new Supplier;
            $supplier->name = "supplier - " . $i;
            $supplier->save();
        }

        //create category
        for($i = 1; $i < $AMOUNT; $i++)
        {
            $category = new Category;
            $category->name = "category - " . $i;
            $category->save();
        }

        $product = new Product;
        $product->name = "product";
        $product->description = "description";
        $product->img = "";
        $product->stock = 288;
        $product->category_id = 1;
        $product->supplier_id = 1;
        $product->save();

        //unit
        $unit = new Unit;
        $unit->product_id = $product->id;
        $unit->unit_name = "pcs";
        $unit->price = 100;
        $unit->quantity = 1;
        $unit->level = 1;
        $unit->save();

        //size
        $size = new Size;
        $size->unit_id = $unit->id;
        $size->length = 1;
        $size->width = 1;
        $size->height = 1;
        $size->weight = 0.1;
        $size->save();

        $unit = new Unit;
        $unit->product_id = $product->id;
        $unit->unit_name = "dozen";
        $unit->price = 100 * 12;
        $unit->quantity = 12;
        $unit->level = 2;
        $unit->save();

        $size = new Size;
        $size->unit_id = $unit->id;
        $size->length = 12;
        $size->width = 12;
        $size->height = 1;
        $size->weight = 1.2;
        $size->save();

        $unit = new Unit;
        $unit->product_id = $product->id;
        $unit->unit_name = "box";
        $unit->price = 100 * 12 * 12;
        $unit->quantity = 144;
        $unit->level = 3;
        $unit->save();

        $size = new Size;
        $size->unit_id = $unit->id;
        $size->length = 12;
        $size->width = 12;
        $size->height = 12;
        $size->weight = 14.4;
        $size->save();

        // create promo
        $promo = new Promo;
        $promo->id = 1;
        $promo->name = "promo-1";
        $promo->product_id = 1;
        $promo->start_date = date("11-07-23");
        $promo->end_date = date("12-07-23");
        $promo->discount = 10;
        $promo->min_purchase = 1;
        $promo->save();

    }
}
