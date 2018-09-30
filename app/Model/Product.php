<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function brands(){
    	return $this->belongsTo('App\Model\Brand', 'brand_id');
    }

    public function attributes(){
    	return $this->belongsToMany('App\Model\Attribute', 'attribute_products');
    }

    public function attributeValues(){
    	return $this->belongsToMany('App\Model\AttributeValue', 'attribute_value_products');
    }

    public function categories(){
    	return $this->belongsToMany('App\Model\Category', 'category_products');
    }
}
