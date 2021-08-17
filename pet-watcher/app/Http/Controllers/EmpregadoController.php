<?php

namespace App\Http\Controllers;

use App\Empregado;
use Illuminate\Http\Request;

class EmpregadoController extends Controller
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
        return view('empregado.create');
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
     * @param  \App\Empregado  $empregado
     * @return \Illuminate\Http\Response
     */
    public function show(Empregado $empregado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empregado  $empregado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empregado $empregado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empregado  $empregado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empregado $empregado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empregado  $empregado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empregado $empregado)
    {
        //
    }
}
