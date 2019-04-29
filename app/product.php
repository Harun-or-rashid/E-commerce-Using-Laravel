<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class product extends Model implements HasMedia
{
    use HasMediaTrait;
   public $guarded=[];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($product){
        $product->slug=str_slug($product->title);
            }
        );
    }

    public function catagory()
    {
        return $this->hasOne(catagory::Class);
   }
}
