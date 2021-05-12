<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SongListItem extends Model
{
    use HasFactory;
    protected $fillable = ['songlist_id', 'song_id', 'position'];

    public function songs()
    {
        return $this->belongsToMany(Song::class);
    }
}
