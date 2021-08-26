<?php

namespace App\Http\Controllers;

use App\Empregado;
use App\Http\Controllers\Auth\RegisterController;
use App\Proprietario;
use App\User;
use Illuminate\Http\Request;

class EmpregadoController extends Controller
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
        $id = $request->id_credenciada;
        $proprietarios = Proprietario::all();
        $empregados = Empregado::all();
        return view('empregado.index', compact('proprietarios', 'empregados', 'id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id = $request->id;
        return view('empregado.create', compact('id'));
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
        $empregadoCadastro = new User();
        $empregado = new Empregado();

        $empregadoCadastro->name = $request->nome_completo;
        $empregadoCadastro->email = $request->cpf;
        $empregadoCadastro->password= bcrypt(substr($request->cpf,0,6));
        $empregadoCadastro->tipo_conta = $request->tipo_conta;
        $empregadoCadastro->save();

        $id_credenciada = $request->id;
        $empregado->nome_completo = $request->nome_completo;
        $empregado->cpf = $request->cpf;
        $empregado->telefone = $request->telefone;
        $empregado->endereco = $request->endereco;
        $empregado->id_credenciada =$id_credenciada;
        $empregado->id_user= $empregadoCadastro->id;
        $empregado->save();

        $login = $request->cpf;
        $password = substr($request->cpf,0,6);


        return view('sucesso-cadastro', compact('login','password'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empregado  $empregado
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $empregado = Empregado::find($id);
        return view ('empregado.show', compact('empregado'));

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
