<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_product extends Model
{
    public $guarded=[];

    public function order()
    {
        return $this->belongsTo(order::class);
    }

    public function product()
    {
        return $this->belongsTo(product::class);
    }
}
