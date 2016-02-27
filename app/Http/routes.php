<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'ItemsController@index');

Route::get('/products/{id}','ItemsController@show');

Route::get('/addcart/{id}','ItemsController@addCookie');

Route::post('/showcategory/{id}','CategoryController@show');

Route::get('/categories','ItemsController@categoryitem');

/*Route::get('/showcategory', function(){
	$cat_id=Input::get('cat_id');
	$items = DB::table('items')
                ->join('categories', 'items.cat_id', '=', 'categories.cat_id')
                ->join('images', 'items.item_id', '=', 'images.item_id')
                //->select('items.item_name','items.item_price', 'images.image')
                ->where('images.is_default', '=', 1) 
                ->where('categories.cat_id', '=', $cat_id) 
                ->orderBy('items.item_id', 'desc')->take(3)->get();

    
   return Response::json($items);

});*/
//Route::get('/showcategory/{id}', 'ItemsController@showcategory');
//Route::get('/ajax/showcategory', function(){

