<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Venue - Burn 2025')]
class Visiting extends Component
{
    public function render()
    {
        return view('livewire.pages.visiting');
    }
}
