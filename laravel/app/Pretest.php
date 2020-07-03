<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pretest extends Model
{
    protected $table = "pretests";
    protected $fillable = ['persons','reservation_time','symptoms'];
    protected $casts = [
        'symptoms' => 'boolean'
    ];
}
