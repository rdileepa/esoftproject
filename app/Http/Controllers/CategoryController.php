<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\Item;
use App\Http\Model\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       
     
    }



    public function showcategory($id){

       /* $items = DB::table('items')
                ->join('categories', 'items.cat_id', '=', 'categories.cat_id_id')
                ->join('images', 'items.item_id', '=', 'images.item_id')
                //->select('items.item_name','items.item_price', 'images.image')
                ->where('images.is_default', '=', 1)
                ->orderBy('items.item_id', 'desc')->take(3)->get();
                */

        return Response::json($id);
        

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {
       
       if (url()=="http://laravel_ex1"){
             $items = Item::select('items.item_name','items.item_price', 'images.image','items.item_id')
                ->join('categories', 'items.cat_id', '=', 'categories.cat_id')
                ->join('images', 'items.item_id', '=', 'images.item_id')
                ->where('images.is_default', '=', 1) 
                ->where('categories.cat_id', '=', $id) 
                ->orderBy('items.item_id', 'desc')->take(3)->get();

        }else {
             $items = Item::select('items.item_name','items.item_price', 'images.image','items.item_id')
                ->join('categories', 'items.cat_id', '=', 'categories.cat_id')
                ->join('images', 'items.item_id', '=', 'images.item_id')
                ->where('images.is_default', '=', 1) 
                ->where('categories.cat_id', '=', $id) 
                ->orderBy('items.item_id', 'desc')->get();


        }
      
        


       
      return view('items.homeitems')->with("items",$items);
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
