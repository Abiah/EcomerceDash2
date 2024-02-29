<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product as ItemProduct;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Product extends Component
{
    public $category;

    public $pro_name;

    public $serial_number;

    public $pro_cat;

    public $brand;

    public $slug;

    public $price;

    public $color;

    public function mount()
    {
        $this->category = Category::all();
    }

    public function addItem()
    {

        try {
            DB::beginTransaction();
            ItemProduct::create([
                'name' => $this->pro_name,
                'slug' => $this->slug,
                'price' => $this->price,
                'color' => $this->color,
                'category_id' => $this->pro_cat,
            ]);
            DB::commit();
            session()->flash('status', 'Product Added Successfully');

            $this->redirect(Product::class);
        } catch (\Throwable $th) {
            throw $th;
            DB::rollback();
            session()->flash('status', 'Please Try Again');

            $this->redirect(Product::class);
        }
    }

    public function render()
    {
        return view('livewire.product')->with('cat', $this->category);
    }
}
