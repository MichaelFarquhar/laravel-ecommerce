<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class HomeProducts extends Component
{
    public $categories;

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function hey()
    {
        dd('hey');
    }

    public function render()
    {
        return view('livewire.home-products');
    }
}
