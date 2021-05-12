<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowSetlists extends Component
{

    public $setlist_id = $id;

    public function render()
    {
        return view('livewire.show-setlist', [
            'data' => $this->setlist_id,
        ]);
    }
}
