<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    public function attributes(){
    	return $this->belongsTo('App\Model\Attribute', 'attribute_id');
    }


    public function products(){
    	return $this->belongsToMany('App\Model\Product', 'attribute_value_products');
    }
}