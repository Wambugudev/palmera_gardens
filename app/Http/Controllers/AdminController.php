<?php

namespace App\Http\Controllers;

use App\Admin\Admin;
use Illuminate\Http\Request;
use App\User;
use App\Admin\AddAlcoholItem;



class AdminController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }

    /**
     * Redirect to admin panel
     *
     * 
     */
    public function adminPanel()
    {
        return view('Admin.Panel.index')
        ->with('users',User::All());
    }

    /**
     * Activate Account
     *
     * 
     */
    public function activateAccount($id)
    {
        $user = User::where('id', '=', $id)->first();
        $user->update([
            $user->status = 'activated',
        ]);
        return view('Admin.Panel.index')
        ->with('users',User::All());
    }
    /**
     * deactivate Account
     *
     * 
     */
    public function deactivateAccount($id)
    {
        $user = User::where('id', '=', $id)->first();
        $user->update([
            $user->status = 'pending',
        ]);
        return view('Admin.Panel.index')
        ->with('users',User::All());
    }

    /**
     * Addmin route to add new alcohol item
     *
     * 
     */
    public function AddAlcoholItem()
    {
        return view('Admin.Alcohol.AddAlcoholItem')
        ->with('items',AddAlcoholItem::orderBy('name')->get());
    }
    /**
     * Admin store new alcoholItem
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function StoreAlcoholItem(Request $request)
    {
        dd($request->name);
    }
   
}
