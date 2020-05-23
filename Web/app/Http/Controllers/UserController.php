<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use Illuminate\Support\Facades\DB;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Session::has('emaildata'))
        {
            $emaildata = Session::get('emaildata');
            $user = User::where('email',$emaildata)->first();
            // dump($user);
            $products = Product::all();
            $name = $user['firstname']. ' ' . $user['lastname'];
            return view('User.index',['products'=>$products])->withName($name);
        }
        else
        {
            return 'UNAUTHORIZED ACCESS';
        }
    }

    public function orderindex()
    {
        if(Session::has('emaildata'))
        {
            $emaildata = Session::get('emaildata');
            $user = User::where('email',$emaildata)->first();
            // dump($user);
            $products = Product::all();
            $name = $user['firstname']. ' ' . $user['lastname'];
            return view('User.productlist',['products'=>$products])->withName($name);
        }
        else
        {
            return 'UNAUTHORIZED ACCESS';
        }
    }

    public function productdetail($id)
    {
        if(Session::has('emaildata'))
        {
            $emaildata = Session::get('emaildata');
            $user = User::where('email',$emaildata)->first();
            // dump($user);
            $products = Product::Find($id);
            $name = $user['firstname']. ' ' . $user['lastname'];
            return view('Products.user',['products'=>$products])->withName($name);
        }
        else
        {
            return 'UNAUTHORIZED ACCESS';
        }
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
