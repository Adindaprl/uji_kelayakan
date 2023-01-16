<?php

namespace App\Http\Controllers;

use App\Models\ebook;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class EbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('landing.index');
    }

    public function register() {
        return view('login.register');
    }

    public function login(){
        return view('login.login');
    }

    public function registerAccount(Request $request){
       //validasi input
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'number' => 'required',
            'address' => 'required',
            'password' => 'required',
        ]);
        // input data ke database
        User::create([
            'role'=> 'user',
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'address' => $request->address,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/login')->with('success','Successfully created an account, please login!');
    }

    public function auth(Request $request){
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ], [
            'email.exists' => 'This email is not yet available',
            'email.required' => 'Email is required',
            'password.required' => 'Password is required',
        ]);
        $user = $request->only('email', 'password');
        if (Auth::attempt($user)) {
            return redirect('/ebook');
        } else {
            return redirect('/login')->with('error', 'Login failed, please check and try again!');
        }
    }

    public function ebook(){
        return view('user.ebook');
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
     * @param  \App\Models\ebook  $ebook
     * @return \Illuminate\Http\Response
     */
    public function show(ebook $ebook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ebook  $ebook
     * @return \Illuminate\Http\Response
     */
    public function edit(ebook $ebook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ebook  $ebook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ebook $ebook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ebook  $ebook
     * @return \Illuminate\Http\Response
     */
    public function destroy(ebook $ebook)
    {
        //
    }
}