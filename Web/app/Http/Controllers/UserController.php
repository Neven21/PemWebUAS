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
                $carts = Cart::where('username',$user->username)->get();
                $total = 0;
                
                return view('User.carttemp',['carts'=>$carts])->withTotal($total)->withName($name);
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
                $cart2 = Cart::where('username',$user['username'])->get();
                $x = 0;
                $y = 0;
                
                if($products->Stock < $request->jumlah)
                {
                    return redirect('/productlist')->with('error', 'Stock tidak cukup');
                    // return 'lebih dari stok tersedia';
                }
                else if($cart2->isEmpty())
                {
                    $totalharga = $products['Harga'] * $request->jumlah;
                    
                    $cart->username = $user['username'];
                    $cart->product_name = $products->ProductName;
                    $cart->qty = $request->jumlah;
                    $cart->price = $products->Harga;
                    $cart->Image = $products->Image;
                    
                    $cart->save();
                    
                    return redirect('/shoppingcart');
                }
                else
                {
                    foreach($cart2 as $cart4)
                    {
                        $product_name = $cart4->product_name;
                        if($product_name == $products->ProductName)
                        {
                            $y = 1;
                            break;
                        }
                        $x = $x + 1;
                    }
                    if($y == 1){
                        $cart3 = Cart::where('product_name',$products->ProductName)->get();
                        $qty = 0;
                        foreach($cart3 as $crt)
                        {
                            $qty =  $crt->qty;
                        }
                        $totalQty = $request->jumlah + $qty;
                        $cart4 = Cart::where('product_name',$products->ProductName)->first();
                        $cart4->qty = $totalQty;
                        
                        $cart4->save();
        
                        return redirect('/shoppingcart');
                    }
                    else
                    {
                        $totalharga = $products['Harga'] * $request->jumlah;
                        
                        $cart->username = $user['username'];
                        $cart->product_name = $products->ProductName;
                        $cart->qty = $request->jumlah;
                        $cart->price = $products->Harga;
                        $cart->Image = $products->Image;
                        
                        $cart->save();
                        
                        return redirect('/shoppingcart');   
                    }
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

            $order = new Product_order();
            $total = $request->totalall;

            $order->username = $user['username'];
            $order->total_price = $total;
            $order->save();

            $carts = Cart::where('username',$user['username'])->get();
            foreach($carts as $crt)
            {
                $userorder = new User_order();
                $products = Product::where('ProductName',$crt->product_name)->first();
                $updatestock = $products->Stock - $crt->qty;
                $products->Stock = $updatestock;
                $products->save();
                
                $userorder->username = $user['username'];
                $userorder->product_name = $crt->product_name;
                $userorder->qty = $crt->qty;
                $userorder->created_at = date('Y-m-d');
                $userorder->save();
            }

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
            $name = $user['firstname'];
            $ordershistory = User_order::where('username',$user->username)->where('rating','>=',1)->get();
            $ordershistory2 = User_order::where('username', $user->username)->where('rating','=',0)->get(); 
            $ordershistory3 = User_order::where('username', $user->username)->get(); 
            return view('User.orderhistory',['users_orders'=>$ordershistory],['users_orders2'=>$ordershistory2])->withName($name)->withOrderhistory3($ordershistory3);
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

            $rating = User_order::where('order_id',$request->orderid)->first();

            $rating->rating = $request->rating;

            $rating->save();

            $avgrating = User_order::where('product_name',$request->productname)->where('rating','>=',1)
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