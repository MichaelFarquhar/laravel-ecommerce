<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\HomeProducts;
use App\Http\Livewire\Toast;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ToastTest extends TestCase
{
    public function test_livewire_component_loads_on_the_home_page_but_is_invisible()
    {
        $this->get('/')
            ->assertSeeLivewire(Toast::class)
            ->assertDontSeeText('Added to cart');
    }

    public function test_toast_shows_when_add_to_cart_button_is_clicked()
    {
        // Livewire::test(HomeProducts::class)
        //     ->emit('addedToCart');

        Livewire::test(Toast::class)
            ->emit('addedToCart')
            ->assertSet('show', true)
            ->assertSee('dded to cart');
    }
}
