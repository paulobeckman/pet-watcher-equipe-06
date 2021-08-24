<?php

namespace App\Http\Controllers;

use App\Credenciada;
use App\Proprietario;
use Illuminate\Http\Request;

class ProprietarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

        $id = $request->id;
        $proprietarios = Proprietario::all()->WHERE('id_credenciada', $id);
        $credenciada = Credenciada::find($id);
        return view('proprietario.index', compact('proprietarios', 'credenciada'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
<<<<<<< Updated upstream
=======
        $id = $request->id;
        return view('proprietario.create', compact('id'));
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
=======
        $proprietario = new Proprietario();
        $id = $request->id;
        $proprietario->tipo_pessoa = $request->tipo_pessoa;
        $proprietario->cpf_cnpj = $request->cpf_cnpj;
        $proprietario->nome_completo = $request->nome_completo;
        $proprietario->telefone = $request->telefone;
        $proprietario->id_credenciada = $id;
        $proprietario->email = $request->email;
        $proprietario->endereco = $request->endereco;
        $proprietario->save();

        return redirect('empregado');

>>>>>>> Stashed changes
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
    public function update(Request $request, Proprietario $proprietario)
    {
        //
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
