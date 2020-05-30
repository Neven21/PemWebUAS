<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\Product_order;
use App\User_order;
use Illuminate\Support\Facades\DB;
use Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Session::get('emaildata') == 'admin@admin.com')
        {
            $emaildata = Session::get('emaildata');
            $user = User::where('email',$emaildata)->first();
            // dump($user);
            $products = Product::all();
            $name = $user['firstname'];
            return view('Admin.index',['products'=>$products])->withName($name);
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
    public function createindex()
    {
        if(Session::get('emaildata') == 'admin@admin.com')
        {
            return view('Products.addproduct');
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
        $this->validate($request, [
            'kategori'     =>  'required',
        ]);

        $product = new Product;
        
        $product->Category = $request->kategori;
        $product->ProductName = $request->name;
        $product->Stock = $request->stock;
        $product->Description = $request->description;
        $product->Harga = $request->harga;
        $product->avg_rating = 0;
        if($request->hasfile('gambar')){
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/products', $filename);
            $product->Image = $filename;
        }

        $product->save();

        return redirect('/adminhome');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Session::get('emaildata') == 'admin@admin.com')
        {
            $emaildata = Session::get('emaildata');
            $user = User::where('email',$emaildata)->first();
            // dump($user);
            $products = Product::Find($id);
            $name = $user['firstname'];
            return view('Products.admin',['products'=>$products])->withName($name);
        }
        else
        {
            return 'UNAUTHORIZED ACCESS';
        }
        
    }

    public function editindex($id)
    {
        if(Session::get('emaildata') == 'admin@admin.com')
        {
            $products = Product::Find($id);
            return view('Products.editproduct',['products'=>$products]);
        }
        else
        {
            return 'UNAUTHORIZED ACCESS';
        }
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
    public function update(Request $request)
    {
        if(Session::get('emaildata') == 'admin@admin.com')
        {
            $product = Product::where('id',$request->id)->first();
            
            $product->ProductName = $request->name;
            $product->Category = $request->category;
            $product->Description = $request->desc;
            $product->Stock = $request->stock;
            $product->Harga = $request->harga;
            if($request->hasfile('gambar')){
                $file = $request->file('gambar');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/products', $filename);
                $product->Image = $filename;
            }
            
            $product->save();

            return redirect('/adminhome');
        }
        else
        {
            return 'UNAUTHORIZED ACCESS';
        }
    }

    public function showorders()
    {
        if(Session::get('emaildata') == 'admin@admin.com')
        {
            $checkorder = Product_order::all();
            $emaildata = Session::get('emaildata');
            $user = User::where('email',$emaildata)->first();
            $name = $user['firstname'];
            if($checkorder->isEmpty())
            {
                return 'no orders yet';
            }
            else
            {
                $orders = Product_order::all();
                $totalincome = 0;
                foreach($orders as $ors)
                {
                    $totalincome = $totalincome + $ors->total_price;
                }
                return view ('Admin.orderlist',['product_orders'=>$orders])->withTotal($totalincome)->withName($name);
             }
        }
        else
        {
            return 'UNAUTHORIZED ACCESS';
        }
    }
    
    public function showgraph()
    {
        if(Session::get('emaildata') == 'admin@admin.com')
        {
            $emaildata = Session::get('emaildata');
            $user = User::where('email',$emaildata)->first();
            $name = $user['firstname'];
            $userorder = User_order::select('product_name')->groupBy('product_name')->get();
            $quantity = User_order::selectRaw('sum(qty) as qty')->groupBy('product_name')->get();
            $categories = [];
            $qty = [];
            if($userorder->isEmpty()){
                return view('Admin.nograph')->withName($name);
            }else{
                foreach($userorder as $usrorder){
                    $categories[] = $usrorder->product_name;
                }
                foreach($quantity as $qtys){
                    $qty[] = $qtys->qty;
                }
                return view ('Admin.graph',['categories'=>$categories],['qty'=>$qty])->withName($name);
            }    
        }
        else
        {
            return 'UNAUTHORIZED ACCESS';
        }
    }



    
    public function destroyorder($id)
    {
        $order = Product_order::where('order_id',$id)->first();
        $order->forceDelete();

        return redirect('/orderlist');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::where('id',$id)->first();

        $product->forceDelete();

        return redirect('/adminhome');
    }
}
