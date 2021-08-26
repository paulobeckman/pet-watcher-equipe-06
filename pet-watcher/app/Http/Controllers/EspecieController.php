<?php

namespace App\Http\Controllers;

use App\Especie;
use Illuminate\Http\Request;

class EspecieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $especie = Especie::all();
        return view('especies.index', compact('especie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('especies.create');
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
        $especie = new Especie();
        $especie->nome_cientifico = $request->nome_cientifico;
        $especie->nome_popular = $request->nome_popular;
        $especie->save();
        return redirect('especies');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Especie  $especie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // $especie = Especie::find($id);
        // return view('especies.show', compact('especies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Especie  $especie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $especie = Especie::find($id);
        return view('especies.edit', compact('especie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Especie  $especie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $especie = Especie::find($id);
        $especie->nome_cientifico = $request->nome_cientifico;
        $especie->nome_popular = $request->nome_popular;
        $especie->save();
        return redirect('especies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Especie  $especie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $especie = Especie::find($id);
        $especie->delete();
        return redirect('especies');
    }
}