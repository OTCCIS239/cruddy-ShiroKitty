<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    //
    protected $fillable = [
        'title',
        'genre',
        'episodes',
    ];
}
