<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;

class ItemApicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::All();
        return response()->json($items);
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

        $item = new Item();
        $category = Category::find($request->category_id);
         if($category)
         {
            $item->name = $request->name;
            $item->price = $request->price;
            $item->category_id = $request->category_id;
            $image = $request->image;
            $newName = "gallery_".uniqid().".".$image->extension();
            $image -> storeAs("public/gallery",$newName);
            $item->image = $newName;
            $item->expired_date = $request->expired_date;
            $item->save();
            return response()->json('new item is created successfully');
         }

         return response()->json('category id not found');
        //$category_id = $request->$category_id;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return $id;
        $item = Item::find($id);
        if($item){
            return response()->json($item);
        }
        return response()->json('item not found');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return $id;
        $item = Item::find($id);
        if($item){
            return response()->json($item);
        }
        return response()->json('item not found');
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
        $category = Category::find($request->category_id);
        if($category){
            $item = Item::find($id);
            if($item){

                $image = $request->image;
                $newName = "gallery_".uniqid().".".$image->extension();
                $image -> storeAs("public/gallery",$newName);

                $item->name = $request->name;
                $item->price = $request->price;
                $item->category_id = $request->category_id;
                $item->image = $newName;
                $item->expired_date = $request->expired_date;
                $item->update();
                return response()->json($item);
            }
        }

        return response()->json('item not found');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $item = Item::find($id);
       if($item){
        $item->delete();
        return response()->json('Item is deleted');
       }
       return response()->json('Item not found');
    }
}
