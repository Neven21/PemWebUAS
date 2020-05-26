<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\Cart;
use App\Product_order;
use App\User_order;
use App\Rating;
use Illuminate\Support\Facades\DB;
use Session;

class DataFilterController extends Controller
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

    public function usersearch(Request $request)
    {
        if(Session::has('emaildata'))
        {
            $emaildata = Session::get('emaildata');
            $user = User::where('email',$emaildata)->first();
            $name = $user['firstname'];

            $search = $request->get('search');
            $filteredproducts = Product::where('ProductName', 'like', '%'.$search.'%')->paginate(5);
            return view('User.productlist',['products'=>$filteredproducts])->withName($name);
        }
        else
        {
            return 'UNAUTHORIZED ACCESS';
        }
    }

    public function adminsearch(Request $request)
    {
        if(Session::has('emaildata'))
        {
            $emaildata = Session::get('emaildata');
            $user = User::where('email',$emaildata)->first();
            $name = $user['firstname'];

            $search = $request->get('search');
            $filteredproducts = Product::where('ProductName', 'like', '%'.$search.'%')->paginate(5);
            return view('Admin.index',['products'=>$filteredproducts])->withName($name);
            
        }
        else
        {
            return 'UNAUTHORIZED ACCESS';
        }
    }

    public function usersortascbyname()
    {
        if(Session::has('emaildata'))
        {
            $emaildata = Session::get('emaildata');
            $user = User::where('email',$emaildata)->first();
            $name = $user['firstname'];

            $sortedproducts = Product::all()->sortBy('ProductName');

            return view('User.productlist',['products'=>$sortedproducts])->withName($name);
            
        }
        else
        {
            return 'UNAUTHORIZED ACCESS';
        }
    }

    public function usersortdescbyname()
    {
        if(Session::has('emaildata'))
        {
            $emaildata = Session::get('emaildata');
            $user = User::where('email',$emaildata)->first();
            $name = $user['firstname'];

            $sortedproducts = Product::all()->sortByDesc('ProductName');

            return view('User.productlist',['products'=>$sortedproducts])->withName($name);
            
        }
        else
        {
            return 'UNAUTHORIZED ACCESS';
        }
    }

    public function usersortascbyprice()
    {
        if(Session::has('emaildata'))
        {
            $emaildata = Session::get('emaildata');
            $user = User::where('email',$emaildata)->first();
            $name = $user['firstname'];

            $sortedproducts = Product::all()->sortBy('Harga');

            return view('User.productlist',['products'=>$sortedproducts])->withName($name);
            
        }
        else
        {
            return 'UNAUTHORIZED ACCESS';
     
     
        }
    }

    public function usersortdescbyprice()
    {
        if(Session::has('emaildata'))
        {
            $emaildata = Session::get('emaildata');
            $user = User::where('email',$emaildata)->first();
            $name = $user['firstname'];

            $sortedproducts = Product::all()->sortByDesc('Harga');

            return view('User.productlist',['products'=>$sortedproducts])->withName($name);
            
        }
        else
        {
            return 'UNAUTHORIZED ACCESS';
        }
    }

    public function makananonly()
    {
        if(Session::has('emaildata'))
        {
            $emaildata = Session::get('emaildata');
            $user = User::where('email',$emaildata)->first();
            $name = $user['firstname'];

            $sortedproducts = Product::where('Category','Makanan')->get();

            return view('User.productlist',['products'=>$sortedproducts])->withName($name);
            
        }
        else
        {
            return 'UNAUTHORIZED ACCESS';
        }
    }

    public function minumanonly()
    {
        if(Session::has('emaildata'))
        {
            $emaildata = Session::get('emaildata');
            $user = User::where('email',$emaildata)->first();
            $name = $user['firstname'];

            $sortedproducts = Product::where('Category','Minuman')->get();

            return view('User.productlist',['products'=>$sortedproducts])->withName($name);
            
        }
        else
        {
            return 'UNAUTHORIZED ACCESS';
        }
    }

    public function filterprice(Request $request)
    {
        if(Session::has('emaildata'))
        {
            $emaildata = Session::get('emaildata');
            $user = User::where('email',$emaildata)->first();
            $name = $user['firstname'];

            $price = $request->get('price');
            if($request->get('type') == 'above')
            {
                $filteredproducts = Product::where('Harga','>=',$price)->get();
            }
            else if($request->get('type') == 'below')
            {
                $filteredproducts = Product::where('Harga','<=',$price)->get();
            }

            return view('User.productlist',['products'=>$filteredproducts])->withName($name);
            
        }
        else
        {
            return 'UNAUTHORIZED ACCESS';
        }
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
