<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\Item;
use App\Http\Model\Category;
use DB;
class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $categories = Category::all();
      //print_r($categories);
       $items = DB::table('items')
                ->join('images', 'items.item_id', '=', 'images.item_id')
                //->select('items.item_name','items.item_price', 'images.image')
                ->where('images.is_default', '=', 1)
                ->where('items.cat_id', '=', 1)
                ->orderBy('items.item_id', 'desc')->take(3)->get();
       
       // print_r($items);   

       return view('items.index',compact('categories','items'));
       //return view('items.index')->with("items",$items);
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
       $items = DB::table('items')
                ->join('images', 'items.item_id', '=', 'images.item_id')
                //->select('items.item_name','items.item_price', 'images.image')
                ->where('images.is_default', '=', 1) 
                ->where('items.item_id', '=', $id) 
                ->orderBy('items.item_id', 'desc')->get();

       // print_r(compact($items));
        return view('items.showitems')->with("items",$items);
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
