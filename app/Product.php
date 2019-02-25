<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'image',
        'description',
        'content',
        'pack',
        'category_id',
        'isFeatured',
    ];
    public function category(){
        return $this->hasOne('App\Category','id','category_id');
    }
}
