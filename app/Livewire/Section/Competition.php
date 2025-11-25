<?php

namespace App\Livewire\Section;

use App\Models\WelcomeMessage;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Welcome Messages - REJASELINDO - APASTB')]
class Competition extends Component
{
    public function render()
    {
        $welcomeMessages = WelcomeMessage::where('is_active', true)->orderBy('no_urut', 'asc')->get();
        return view('livewire.section.competition', [
            'welcomeMessages' => $welcomeMessages
        ]);
    }
}
