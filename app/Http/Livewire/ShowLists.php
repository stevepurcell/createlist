<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SongList;

class ShowLists extends Component
{
    public function render()
    {
        return view('livewire.show-lists', [
            'data' => $this->read(),
        ]);
    }

    public function read()
    {
        return SongList::orderby('id')->get();
    }
}
