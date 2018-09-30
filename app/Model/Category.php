<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products(){
    	return $this->belongsToMany('App\Model\Product', 'category_products');
    }

    public function subcategories(){
    	return $this->hasMany('App\Model\Category', 'parent_id');
    }
}
