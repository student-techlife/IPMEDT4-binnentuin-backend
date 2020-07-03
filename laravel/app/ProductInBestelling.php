<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductInBestelling extends Model
{
    protected $table = "product_in_bestellingen";
    protected $fillable = ['product_id', 'bestel_id', 'aantal'];
}
