<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bestellingen extends Model
{
    protected $table = "bestellingen";
    protected $fillable = ['naam','email','totaalPrijs','status'];
}
