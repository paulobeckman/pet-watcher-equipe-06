<?php

namespace App\Http\Controllers;

use App\Credenciada;
use App\Proprietario;
use App\Animal;
use Illuminate\Http\Request;

class ProprietarioController extends Controller
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
        $id = $request->id;
        return view('proprietario.create', compact('id'));

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

        return redirect('proprietario');
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
        $animais = Animal::all()->WHERE('id_proprietario', $id);
        $proprietario = Proprietario::find($id);
        return view('proprietario.show', compact('proprietario', 'animais'));
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
        $proprietario = Proprietario::find($id);
        $proprietario->tipo_pessoa = $request->tipo_pessoa;
        $proprietario->cpf_cnpj = $request->cpf_cnpj;
        $proprietario->nome_completo = $request->nome_completo;
        $proprietario->telefone = $request->telefone;
        $proprietario->email = $request->email;
        $proprietario->endereco = $request->endereco;
        $proprietario->save();
        return redirect('proprietario');
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
        return redirect('proprietario');
    }
}
