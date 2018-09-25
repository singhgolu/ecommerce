<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    public function attributevalues(){
    	return $this->hasMany('App\Model\AttributeValue');
    }

    public function products(){
    	return $this->belongsToMany('App\Model\Product', 'attribute_products');
    }
}
