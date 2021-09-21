<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    // 
    //     
    // redirect user that don't have activated accounts
    // 
    //     
    public function redy()
    {
        //dd(Auth::user()->status);
        if (Auth::user()->status == 'activated') {
            // if statement comes here for the different views
            if (Auth::user()->account == 'store') {
                return view('Store.index');
                // ->with('alcoholItems',$items = alcoholItem::orderBy('name')->get())
            } else {
                if (Auth::user()->account == 'service') {
                    return view('service.index');
                } else {
                    if (Auth::user()->account == 'admin') {
                        return view('admin.index');
                    } else {
                        if (Auth::user()->account == 'chef') {
                            return view('chef.index');
                        } else {
                            return view('home');
                        }
                    }
                }
            }
            
            //return view('home');
        } else {

            return view('notActivated');
        }
    }
}
