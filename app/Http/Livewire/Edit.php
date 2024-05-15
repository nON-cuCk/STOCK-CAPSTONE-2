<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TypeList;

class Edit extends Component
{
    public $typeLists;
    public $description;
    public $typeListId;

    protected $rules = [
        'description' => 'required|string|max:255',
    ];

    public function mount()
    {
        $this->fetchTypeLists();
    }

    public function fetchTypeLists()
    {
        $this->typeLists = TypeList::all();
    }

    public function resetInput()
    {
        $this->description = null;
        $this->typeListId = null;
    }

    public function edit($id)
    {
        $typeList = TypeList::findOrFail($id);
        $this->typeListId = $typeList->id;
        $this->description = $typeList->description;
    }

    public function save()
    {
        $this->validate();

        if ($this->typeListId) {
            $typeList = TypeList::findOrFail($this->typeListId);
            $typeList->description = $this->description;
            $typeList->save();
        } else {
            TypeList::create(['description' => $this->description]);
        }

        $this->resetInput();
        $this->fetchTypeLists();
    }

    public function delete($id)
    {
        TypeList::findOrFail($id)->delete();
        $this->fetchTypeLists();
    }

    public function render()
    {
        return view('livewire.edit');
    }
}
