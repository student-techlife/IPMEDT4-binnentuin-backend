<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pretest extends Model
{
    protected $table = "pretests";
    protected $fillable = ['name','persons','reservation_time','symptoms'];
    protected $casts = [
        'symptoms' => 'boolean'
    ];
}
