<?php

namespace App\Livewire;

use App\Exports\ProductExport;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class ViewProduct extends Component
{
    use WithPagination;

    // public $product_list;

    public function export()
    {
        return Excel::download(new ProductExport, 'product.xlsx');
    }

    public function render()
    {
        $product_list = Product::with('category')->paginate(3);

        // dd($product_list);

        return view('livewire.view-product')->with('product_list', $product_list);
    }
}
