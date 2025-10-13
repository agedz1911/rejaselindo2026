<?php

namespace App\Livewire\Pages;

use App\Models\ScheduleSession;
use App\Models\Time;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Program at Glance - REJASELINDO - APASTB')]
class AtGlance extends Component
{
    public $atglances;
    public $dua;
    public $tiga;
    public $empat;

    public function mount()
    {
        $this->atglances = ScheduleSession::all();
        $this->dua = $this->atglances->where('date', '2026-06-2')->sortBy('no_urut');
        $this->tiga = $this->atglances->where('date', '2026-06-3')->sortBy('no_urut');
        $this->empat = $this->atglances->where('date', '2026-06-4')->sortBy('no_urut');
    }

    public function render()
    {
        return view('livewire.pages.at-glance');
    }
}
