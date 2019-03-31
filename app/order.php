<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{

    public $guarded=[];

    public function customer()
    {
        return $this->belongsTo(User::class);
    }

    public function processedBy()
    {
        return $this->hasOne(User::class,'processed_by');
    }

    public function products()
    {
        return $this->hasMany(product::class);
    }
}
