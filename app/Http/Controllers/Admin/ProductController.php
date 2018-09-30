<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Brand;
use App\Model\Category;
use App\Model\Attribute;
use App\Model\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return $product = Product::with('brands')->get();
        $products = Product::all();
        return view('admin.products.list', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /* Fetch all Brands */
        $brands = Brand::all();
        
        /* Fetch all Categories (with parent id 0) */
        $categories = Category::where('parent_id', 0)->get();

        /* Fetch all Subcategories (with parent id not 0) */
        $subcategories = Category::where('parent_id', '!=', 0)->get();

        /* Fetch all Subcategories (with parent id not 0) */
        $attributes = Attribute::all();
        
        return view('admin.products.create', compact('brands', 'categories', 'subcategories', 'attributes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;

        $product = new Product;

        $product->brand_id = $request->brand;
        $product->sku = $request->sku;
        $product->model_no = $request->model;
        $product->name = $request->name;
        $product->slug = str_slug($request->name);
        $product->description = $request->description;
        $product->specification = $request->specification;
        $product->base_price = $request->base_price;
        $product->discount_type = $request->discount_type;
        $product->discount_value = $request->discount_value;
        $product->product_image = $request->image;
        $product->status = $request->status;

        $product->save();

        $product->categories()->sync($request->categories);

        $product->attributes()->sync($request->attribute);

        $product->attributeValues()->sync($request->attribute_value);


        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
