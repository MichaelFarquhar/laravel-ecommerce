<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class HomeProducts extends Component
{
    public $categories;
    public $products;
    public $sort;
    protected $queryString = ['sort'];

    public function getNewestProducts()
    {
        $this->sort = 'newest';
        $this->products = Product::latest()->take(12)->get();
    }

    public function getLowStockProducts()
    {
        $this->sort = 'low-stock';
        $this->products = Product::orderBy('inventory', 'asc')->take(12)->get();
    }

    public function getCategory($id, $slug)
    {
        $this->sort = $slug;
        $this->products = Product::where('category_id', $id)->get();
    }

    public function mount()
    {
        $this->categories = Category::all();
        $this->getNewestProducts();
    }

    public function render()
    {
        return view('livewire.home-products');
    }
}
