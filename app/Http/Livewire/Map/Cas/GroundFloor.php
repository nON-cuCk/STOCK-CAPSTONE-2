<?php

namespace App\Http\Livewire\Map\Cas;

use Livewire\Component;
use App\Models\FireList;
use App\Models\TypeList;
use App\Models\LocationList;

class GroundFloor extends Component
{
    public $selectedFloor = 'ground-floor';

    public function showFloor($floor)
    {
        $this->selectedFloor = $floor;
    }
    public function mount()
    {
        $this->fire_list = FireList::all();

    }
    public function render()
    {
        return view('livewire.map.cas.ground-floor');
    }

}
