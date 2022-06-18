<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Toast extends Component
{
    public $show = false;
    public $message = '';

    protected $listeners = ['addedToCart' => 'showToast'];

    public function showToast()
    {
        $this->show = true;
        $this->message = "Item added to cart.";
    }

    public function render()
    {
        return view('livewire.toast');
    }
}
