<?php

namespace App\Http\Controllers;

use App\Admin\AddAlcoholItem;
use Illuminate\Http\Request;



class AddAlcoholItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request,[
            'name' =>'required|unique:add_alcohol_items',
            'quantity' => 'required',
            'type' => 'required',
            'package' =>'required'
        ]);

       
        AddAlcoholItem::create([
            'name'=>$request->name,
            'quantity'=>$request->quantity,
            'type'=>$request->type,
            'package'=>$request->package
        ]);
        return view('Admin.Alcohol.AddAlcoholItem')
        ->with('items',AddAlcoholItem::orderBy('name')->get());

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\AddAlcoholItem  $addAlcoholItem
     * @return \Illuminate\Http\Response
     */
    public function show(AddAlcoholItem $addAlcoholItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\AddAlcoholItem  $addAlcoholItem
     * @return \Illuminate\Http\Response
     */
    public function edit(AddAlcoholItem $addAlcoholItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\AddAlcoholItem  $addAlcoholItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddAlcoholItem $addAlcoholItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\AddAlcoholItem  $addAlcoholItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(AddAlcoholItem $addAlcoholItem)
    {
        //
    }
}
