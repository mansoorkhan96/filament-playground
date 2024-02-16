<?php

namespace App\Livewire;

use Livewire\Component;

/**
 * A big boy Livewire component doing a lot of stuff that can be done using the Filament Action Forms
 */
class NameGenerator extends Component
{
    public $aiGeneratedNames = [
        'John',
        'Jane',
        'Bob',
    ];

    public function render()
    {
        return view('livewire.name-generator');
    }
}
