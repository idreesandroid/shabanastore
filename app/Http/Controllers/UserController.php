<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function login(){
        $title = 'Login';
        return view('login')->with('title',$title);
    }

    public function registerUser(Request $request){
        $validatedData = $request->validate([
            'name' => 'required | max:255',
            'email' => 'required | unique:users',
            'mobile' => 'required | min:11',
            'password' => 'required'
        ]);
        $validatedData['created_at'] = date('Y/m/d H:m:s');
        $validatedData['email_verified_at'] = date('Y/m/d H:m:s');
        $validatedData['updated_at'] = date('Y/m/d H:m:s');
        $userId = DB::table('users')->insertGetId($validatedData);
        $title = 'Register User';
        if(isset($userId)){
            return view('/login',compact('title'))->with('register_successfully','Congratulation: You registered successfully...!');
        }else{
            return  back()->with('registration_fails','Sorry: Please Try Again');
        }
    }
    public function loginUser(Request $request){

        $login = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        echo "validate successs fully";
        //$count = User::where('email',$login['email'])->orwhere('phone',$login['email'])->andwhere('password',$login['password'])->count();
        //dd($count);

    }


}
