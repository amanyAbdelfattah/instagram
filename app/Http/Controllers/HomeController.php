<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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
        $user = Auth::user();
        $posts = DB::table('posts')
        ->where('user_id', '=', Auth::user()->id)
        ->get();
        $post = DB::table('posts')
        ->where('user_id', '=', Auth::user()->id)
        ->get()
        ->count();
        return view('home', compact('user', 'posts' , 'post'));
    }
    public function show($id)
    {
        //To show user profile
        $user = User::findOrFail($id);
        return view('userprofile' , compact('user'));
    }
    public function edit($id)
    {
        //To edit user information
        $user = User::findOrFail($id);
        return view('editprofile', compact('user'));
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
        //To update user information: first validate user inputs
        $validator = Validator::make($request->all() , [
            'image' => ['required'],
            'name' => ['required', 'min:4' , 'max:225'],
            'bio' => ['min:10' , 'max:255']
        ]);
        // ERROR: There is no validation rule named string
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        // Second update user in DB
        $user = User::findOrFail($id);
        $user->image = $request->input('image');
        $user->name = $request->input('name');
        $user->bio = $request->input('bio');

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/users/' , $filename);
            $user->image = $filename;
        }
        else{
            return $request;
            $user->image = '';
        }
        $user->update();
        return redirect()->back()->with(['success' => 'Profile is updated']);;
    }
}
