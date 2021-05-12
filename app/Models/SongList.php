<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SongList extends Model
{
    use HasFactory;

    protected $fillable = ['songlist_name', 'songlist_creator', 'songlist_visible'];

    public function songs()
    {
        return $this->belongsToMany(Song::class);
    }
}
