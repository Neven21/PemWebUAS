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
            $name = $user['firstname'];
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
            $name = $user['firstname'];
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
            $name = $user['firstname'];
            return view('Products.user',['products'=>$products])->withName($name);
        }
        else
        {
            return 'UNAUTHORIZED ACCESS';
        }
    }

    public function showcart()
    {
        if(Session::has('emaildata'))
        {
            $emaildata = Session::get('emaildata');
            $user = User::where('email',$emaildata)->first();
            $checkcart = Cart::where('username',$user->username)->get();
            $name = $user['firstname'];
            if($checkcart->isEmpty())
            {
                return 'cart is empty';
            }
            else
            {
                $carts = Cart::where('username',$user->username)->get();
                $total = 0;

                foreach($carts as $crt)
                {
                    $total = $total + ($crt->qty * $crt->price);
                }
                
                return view('User.carttemp',['carts'=>$carts])->withTotal($total)->withName($name);
            }
        }
        else
        {
            return 'UNAUTHORIZED ACCESS';
        }
    }

    public function addtocart(Request $request)
    {
        if(Session::has('emaildata'))
        {
                $emaildata = Session::get('emaildata');
                $user = User::where('email',$emaildata)->first();
                // dump($user);
                $products = Product::Find($request->id);
                $cart = new Cart;

                if($products->Stock < $request->jumlah)
                {
                    return redirect('/productlist')->with('error', 'Stock tidak cukup');
                    // return 'lebih dari stok tersedia';
                }
                else
                {
                    $totalharga = $products['Harga'] * $request->jumlah;
                
                    $cart->username = $user['username'];
                    $cart->product_name = $products->ProductName;
                    $cart->qty = $request->jumlah;
                    $cart->price = $products->Harga;

                    $cart->save();

                    return redirect('/productlist');
                }
        }
        else
        {
            return 'UNAUTHORIZED ACCESS';
        }
    }

    public function placeorder(Request $request)
    {
        if(Session::has('emaildata'))
        {
            $emaildata = Session::get('emaildata');
            $user = User::where('email',$emaildata)->first();
            // dump($user);
            // $products = Product::Find($request->id);

            $order = new Product_order;
            $userorder = new User_order;
            $rating = new Rating();

            $total = $request->totalall;

            $order->username = $user['username'];
            $order->total_price = $total;
            $userorder->username = $user['username'];

            $order->save();

            $carts = Cart::all();
            foreach($carts as $crt)
            {
                $products = Product::where('ProductName',$crt->product_name)->first();
                $updatestock = $products->Stock - $crt->qty;
                $products->Stock = $updatestock;
                $products->save();

                $userorder->product_name = $crt->product_name;
                $userorder->qty = $crt->qty;
                $userorder->save();

                $rating->username = $user->username;
                $rating->product_name = $crt->product_name;
                $rating->rating = 0;
                $rating->save();
            }

            // $updatestock = $products->Stock - $request->jumlah;
            // $products->Stock = $updatestock;
            // $products->save();

            $cart = Cart::where('username',$user['username'])->delete();

            return redirect('/productlist');
        }
        else
        {
            return 'UNAUTHORIZED ACCESS';
        }
    }

    public function destroycart($id)
    {
        $cart = Cart::where('cart_id',$id)->first();

        $cart->forceDelete();

        return redirect('/shoppingcart');
    }

    public function showorderhistory()
    {
        if(Session::has('emaildata'))
        {
            $emaildata = Session::get('emaildata');
            $user = User::where('email',$emaildata)->first();
            $checkorder = User_order::where('username',$user->username)->get();
            if($checkorder->isEmpty())
            {
                return 'no order yet';
            }
            else
            {
                $currentrating = Rating::where('username',$user->username)->get();
                $ordershistory = User_order::where('username',$user->username)->get();   
                return view('User.orderhistory',['users_orders'=>$ordershistory],['ratings'=>$currentrating]);
            }
        }
        else
        {
            return 'UNAUTHORIZED ACCESS';
        }
    }

    public function giverating(Request $request)
    {
        if(Session::has('emaildata'))
        {
            $emaildata = Session::get('emaildata');
            $user = User::where('email',$emaildata)->first();

            $rating = Rating::where('username',$user->username)
                                ->where('product_name',$request->productname)
                                ->first();

            $rating->rating = $request->rating;

            $rating->save();

            $avgrating = Rating::where('product_name',$request->productname)
                                    ->avg('rating');
                     
            $product = Product::where('ProductName',$request->productname)->first();
            $product->avg_rating = $avgrating;
            $product->save();

            return redirect('/orderhistory');
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
