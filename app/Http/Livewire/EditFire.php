<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\FireList;

class EditFire extends Component
{
    public $fireLists;
    public $fireListId;
    public $type;
    public $firename;
    public $serial_number;
    public $installation_date;
    public $expiration_date;

    protected $rules = [
        'firename' => 'required|string|max:255',
        'type' => 'required|string|max:255',
        'serial_number' => 'required|digits:7',
    ];

    public function mount()
    {
        $this->fetchFireLists();
    }

    public function fetchFireLists()
    {
        $this->fireLists = FireList::all();
    }

    public function resetInput()
    {
        $this->firename = null;
        $this->fireListId = null;
        $this->type = null;
        $this->serial_number = null;
        $this->installation_date = null;
        $this->expiration_date = null;
    }

    public function update($id)
    {
        $fireList = FireList::findOrFail($id);
        $this->fireListId = $fireList->id;
        $this->firename = $fireList->firename;
        $this->type = $fireList->type;
        $this->serial_number = $fireList->serial_number;
        $this->installation_date = $fireList->installation_date;
        $this->expiration_date = $fireList->expiration_date;
    }
    public function save()
    {
        $this->validate();

        if ($this->fireListId) {
            $fireList = FireList::findOrFail($this->fireListId);
            $fireList->firename = $this->firename;
            $fireList->type = $this->type;
            $fireList->serial_number = $this->serial_number;
            $fireList->installation_date = $this->installation_date;
            $fireList->expiration_date = $this->expiration_date;
            $fireList->save();
        } else {
            FireList::create([
                'firename' => $this->firename,
                'type' => $this->type,
                'serial_number' => $this->serial_number,
                'installation_date' => $this->installation_date,
                'expiration_date' => $this->expiration_date,
            ]);
        }

        $this->resetInput();
        $this->fetchFireLists();
    }

    public function remove()
    {
        if ($this->fireListId) {
            // Find the fire list entry by ID
            $fireList = FireList::findOrFail($this->fireListId);
            
            // Clear the values of the fields associated with the selected ID
            $fireList->update([
                'firename' => '',
                'type' => '',
                'serial_number' => '',
                'installation_date' => null,
                'expiration_date' => null,
            ]);
        }
    

        $this->resetInput();
        $this->fetchFireLists();
    }


    public function render()
    {
        return view('livewire.edit-fire');
    }
}
