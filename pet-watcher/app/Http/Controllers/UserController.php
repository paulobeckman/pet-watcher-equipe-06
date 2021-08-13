<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('auth.passwords.reset');
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
     * @param  \App\Proprietario  $proprietario
     * @return \Illuminate\Http\Response
     */
    public function show(Proprietario $proprietario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proprietario  $proprietario
     * @return \Illuminate\Http\Response
     */
    public function edit(Proprietario $proprietario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proprietario  $proprietario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user)
    {
        //
        $User = User::find($user);
        $User->password = $request->password;
        $User->save();
        return redirect(to:'/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proprietario  $proprietario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proprietario $proprietario)
    {
        //
    }
}
