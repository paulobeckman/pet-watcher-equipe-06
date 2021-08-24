<?php

namespace App\Http\Controllers;

use App\Animal;
use App\Especie;
use App\Pedigree;
use App\Proprietario;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = $request->id;
        $animais = Animal::all()->WHERE('id_credenciada_responsavel', $id);

        return view('animal.index', compact('animais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $especies = Especie::all();
        $id_proprietario = $request->id_proprietario;
        return view('animal.create', compact('id_proprietario', 'especies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $id_proprietario = $request->id_proprietario;
        $animal = new Animal();
        $proprietario = Proprietario::find($id_proprietario);
        $animal->nome = $request->nome;
        $animal->tipo_aquisicao = $request->tipo_aquisicao;
        $animal->codigo_microchip = $request->codigo_microchip;
        $animal->porte = $request->porte;
        $animal->data_nascimento = $request->data_nascimento;
        $animal->sexo = $request->sexo;
        $animal->id_especie = $request->especie;
        $animal->data_cadastro = now();
        $animal->ativo = true;
        $animal->id_proprietario = $proprietario->id;
        $animal->id_credenciada_responsavel = $proprietario->id_credenciada;

        $animal->save();
        return redirect('animal');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $animal = Animal::find($id);
        $proprietario = Proprietario::find($animal->id_proprietario);
        $especie = Especie::find($animal->id_especie);
        $pedigree = Pedigree::all()->WHERE('id_animal', $id)->first();
        return view('animal.show', compact('animal', 'proprietario', 'especie', 'pedigree'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $animal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animal $animal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $animal)
    {
        //
    }
}
