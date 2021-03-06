<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
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
            // $username = $user['username'];
            // $email = $user['email'];
            // $name = $user['firstname']. ' ' . $user['lastname'];
            // $dob = $user['dob'];
            $name = $user['firstname'];
            return view('User.profile')->withUserdata($user)->withName($name);
        }
        else
        {
            return 'UNAUTHORIZED ACCESS';
        }
    }

    public function index2()
    {
        if(Session::has('emaildata'))
        {
            $emaildata = Session::get('emaildata');
            $user = User::where('email',$emaildata)->first();
            // $username = $user['username'];
            // $email = $user['email'];
            // $name = $user['firstname']. ' ' . $user['lastname'];
            // $dob = $user['dob'];
            $name = $user['firstname'];
            return view('Admin.profile')->withUserdata($user)->withName($name);
        }
        else
        {
            return 'UNAUTHORIZED ACCESS';
        }
    }

    public function editindex()
    {
        if(Session::has('emaildata'))
        {
            $emaildata = Session::get('emaildata');
            $user = User::where('email',$emaildata)->first();
            return view('User.editprofile')->withUserdata($user);
        }
        else
        {
            return 'UNAUTHORIZED ACCESS';
        }
    }

    public function editindex2()
    {
        if(Session::has('emaildata'))
        {
            $emaildata = Session::get('emaildata');
            $user = User::where('email',$emaildata)->first();
            return view('Admin.editprofile')->withUserdata($user);
        }
        else
        {
            return 'UNAUTHORIZED ACCESS';
        }
    }

    public function redirectUser(){
        if(Session::has('emaildata'))
        {
            $emaildata = Session::get('emaildata');
            $user = User::where('email',$emaildata)->first();
            if($user['role'] == 'admin')
            {
                return redirect('/adminprofile')->withUserdata($user);
            }
            else
            {
                return redirect('/userprofile')->withUserdata($user);
            }
        }
        else
        {
            return 'UNAUTHORIZED ACCESS';
        }
    }

    public function edit(Request $request)
    {
    
        if(Session::has('emaildata'))
        {
            $emaildata = Session::get('emaildata');
            $user = User::where('email',$emaildata)->first();
            
            $user->password = Hash::make($request->password);
            $user->email = $request->email;
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->dob = $request->dob;

            Session::put('emaildata',$request->email);

            if($request->hasfile('gambar')){
                $file = $request->file('gambar');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/users', $filename);
                $user->picture = $filename;
            }

            $user->save();

            if($user->role == 'admin')
            {
                return redirect('/adminprofile');
            }
            else
            {
                return redirect('/userprofile');
            }
        }
        else
        {
            return 'UNAUTHORIZED ACCESS';
        }
    }
    
    public function editPhoto(Request $request)
    {
    
        if(Session::has('emaildata'))
        {
            $emaildata = Session::get('emaildata');
            $user = User::where('email',$emaildata)->first();
            $user->email = $request->email;

            Session::put('emaildata',$request->email);

            if($request->hasfile('gambar')){
                $file = $request->file('gambar');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/users', $filename);
                $user->picture = $filename;
            }

            $user->save();

            if($user->role == 'admin')
            {
                return redirect('/adminprofile');
            }
            else
            {
                return redirect('/userprofile');
            }
        }
        else
        {
            return 'UNAUTHORIZED ACCESS';
        }
    }
    
    public function editName(Request $request)
    {
    
        if(Session::has('emaildata'))
        {
            $emaildata = Session::get('emaildata');
            $user = User::where('email',$emaildata)->first();
            $user->email = $request->email;
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;

            Session::put('emaildata',$request->email);

            $user->save();

            if($user->role == 'admin')
            {
                return redirect('/adminprofile');
            }
            else
            {
                return redirect('/userprofile');
            }
        }
        else
        {
            return 'UNAUTHORIZED ACCESS';
        }
    }
    
    public function editPass(Request $request)
    {
    
        if(Session::has('emaildata'))
        {
            $emaildata = Session::get('emaildata');
            $user = User::where('email',$emaildata)->first();
            $user->email = $request->email;
            $user->password = Hash::make($request->password);

            Session::put('emaildata',$request->email);

            $user->save();

            if($user->role == 'admin')
            {
                return redirect('/adminprofile');
            }
            else
            {
                return redirect('/userprofile');
            }
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
    public function editedit($id)
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
