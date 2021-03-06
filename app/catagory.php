<?php

namespace App;

use function foo\func;
use Illuminate\Database\Eloquent\Model;

class catagory extends Model
{
    protected $table='catagories_tablee';
    public $guarded=[];

    protected static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
        static::creating(function ($catagory){
            $catagory->slug = str_slug($catagory->name);
        });
    }

    public function parent_catagory(){
        return $this->belongsTo(__CLASS__);
    }


    public function child_catagory()
    {
        return $this->hasMany(__CLASS__);
    }

    public function products()
    {
        return $this->hasMany(product::Class);
    }
    }

