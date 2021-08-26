<?php

namespace App\Http\Controllers;

use App\Pedigree;
use Illuminate\Http\Request;

class PedigreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id = $request->id;
        return view('pedigree.create', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $id = $request->id;
        $pedigree = new Pedigree();
        $pedigree->codigo = $request->codigo;
        $pedigree->origem = $request->origem;
        $pedigree->id_animal = $id;
        $pedigree->save();
        return redirect(route('animal.show', ['animal' => $id]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pedigree  $pedigree
     * @return \Illuminate\Http\Response
     */
    public function show(Pedigree $pedigree)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pedigree  $pedigree
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedigree $pedigree)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pedigree  $pedigree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedigree $pedigree)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pedigree  $pedigree
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedigree $pedigree)
    {
        //
    }
}