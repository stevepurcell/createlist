<?php

namespace App\Http\Livewire;

use App\Models\Song;
use App\Models\SongList;
use App\Models\SongListItem;
use Livewire\Component;

class SongListCreate extends Component
{
    public $invoiceProducts = [];
    public $allProducts = [];
    public $taxes = 20;
    public $songlist_name;
    public $songlist_creator;
    public $songlist_visible;
    public $songListSaved = false;
    public $selectedSongs = [];

    public function render()
    {
        return view('livewire.song-list-create', [
            'data' => $this->read(),
        ]);
    }

    public function read()
    {
        return Song::orderby('id')->get();
    }

    public function saveProduct($index)
    {
        $this->resetErrorBag();
        $product = $this->allProducts->find($this->invoiceProducts[$index]['product_id']);
        $this->invoiceProducts[$index]['product_name'] = $product->name;
        $this->invoiceProducts[$index]['product_price'] = $product->price;
        $this->invoiceProducts[$index]['is_saved'] = true;
    }

    public function saveSongList()
    {
        $songlist = SongList::create([
            'songlist_name' => $this->songlist_name,
            'songlist_creator' => $this->songlist_creator,
            'songlist_visible' => $this->songlist_visible
        ]);

        // dump('Songlist Name:' . $this->songlist_name);
        // dump('Songlist Creator:' . $this->songlist_creator);
        // dump('Songlist Visible:' . $this->songlist_visible);
        // dump('List ID:' . $invoice->id);

        $rowsSelected = count($this->selectedSongs);
        
            for ($i=0; $i < $rowsSelected; $i++) {
                // dump('song id = ' . $this->selectedSongs[$i]);
                // dump('position = ' . $i);
                $songlistitem = SongListItem::create([
                    'songlist_id' => $songlist->id,
                    'song_id' => $this->selectedSongs[$i],
                    'position' => $i,
                ]);
        };
        session()->flash('success', 'Songlist Created Successfully.');
        $songListSaved = true;
        return redirect()->route('show-lists');
    }

}
