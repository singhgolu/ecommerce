<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/* Admin Dashboard Route */
Route::get('user/dashboard', function(){
	return view('user.dashboard');
});
Route::get('test', function(){
	foreach(App\Model\Category::with('subcategories')->where('parent_id', 0)->get() as $data){
		foreach($data->subcategories as $subcategory){
			echo $subcategory->name;
		}
		die();
	}
});
Route::get('/', function () {
    return view('welcome');
});

/* Admin Dashboard Route */
Route::get('admin/dashboard', 'Admin\AdminController@adminDashboard')->name('admin.dashboard');

/* Brand Route */
Route::resource('admin/brand', 'Admin\BrandController');

/* Category Route */
Route::resource('admin/category', 'Admin\CategoryController');

/* Attribute Route */
Route::resource('admin/attribute', 'Admin\AttributeController');

/* Attribute Value Route */
Route::resource('admin/attribute-value', 'Admin\AttributeValueController');

/* Product Route */
Route::resource('admin/product', 'Admin\ProductController');


/* admin login */
Route::get('admin/login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Admin\Auth\LoginController@login');







/* user login system start here*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/* user login system end here*/
