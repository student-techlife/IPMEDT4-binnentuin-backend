<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producten extends Model
{
    protected $table = "producten";
    protected $fillable = ['naam', 'beschrijving', 'categorie', 'prijs', 'locatie'];
    public $timestamps = false;
}
