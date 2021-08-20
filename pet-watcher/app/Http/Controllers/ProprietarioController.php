<?php

namespace App\Http\Controllers;

use App\Proprietario;
use App\User;
use Illuminate\Http\Request;

class ProprietarioController extends Controller
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
        return view('proprietario.create');
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
        $userProprietario = new User();
        $proprietario = new Proprietario();

        $proprietario->tipo_pessoa = $request->tipo_pessoa;
        $proprietario->cpf_cnpj = $request->cpf_cnpj;
        $proprietario->nome_completo = $request->nome_completo;
        $proprietario->telefone = $request->telefone;
        $proprietario->email = $request->email;
        $proprietario->endereco = $request->endereco;
        $proprietario->save();

        return redirect('empregado');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proprietario  $proprietario
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $proprietario = Proprietario::find($id);
        return view('proprietario.show', compact('proprietario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proprietario  $proprietario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $proprietario = Proprietario::find($id);
        return view('proprietario.edit', compact('proprietario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proprietario  $proprietario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $proprietario = Proprietari::find($id);
        $proprietario->tipo_pessoa = $request->tipo_pessoa;
        $proprietario->cpf_cnpj = $request->cpf_cnpj;
        $proprietario->nome_completo = $request->nome_completo;
        $proprietario->telefone = $request->telefone;
        $proprietario->email = $request->email;
        $proprietario->endereco = $request->endereco;
        $proprietario->save();
        return redirect(to:'empregado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proprietario  $proprietario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $proprietario = Proprietario::find($id);
        $proprietario->delete();
        return redirect(to: 'empregado');
    }
}
