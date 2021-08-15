<?php

namespace App\Http\Controllers;

use App\Credenciada;
use App\User;
use Illuminate\Http\Request;

class CredenciadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $credenciada = Credenciada::all();
        return view('credenciada.index', compact('credenciada'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('credenciada.create');
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
        $credenciada = new Credenciada();
        $credenciada->cnpj = $request->cnpj;
        $credenciada->inscricao_estadual = $request->inscricao_estadual;
        $credenciada->razao_social = $request->razao_social;
        $credenciada->telefone = $request->telefone;
        $credenciada->email = $request->email;
        $credenciada->endereco = $request->endereco;
        $credenciada->habilitada = true;
        $credenciada->save();

        $credenciada = new User();
        $credenciada->name = $request->razao_social;
        $credenciada->email = $request->cnpj;
        $credenciada->password= rand(6,9);
        $credenciada->save();
        return redirect(to:'credenciada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Credenciada  $credenciada
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $credenciada = Credenciada::find($id);
        return view('credenciada.show', compact('credenciada'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Credenciada  $credenciada
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $credenciada = Credenciada::find($id);
        return view('credenciada.edit', compact('credenciada'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Credenciada  $credenciada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $credenciada = Credenciada::find($id);
        $credenciada->cnpj = $request->cnpj;
        $credenciada->inscricao_estadual = $request->inscricao_estadual;
        $credenciada->razao_social = $request->razao_social;
        $credenciada->telefone = $request->telefone;
        $credenciada->email = $request->email;
        $credenciada->endereco = $request->endereco;
        $credenciada->save();
        return redirect(to:'credenciada');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Credenciada  $credenciada
     * @return \Illuminate\Http\Response
     */

    public function FormDisable($id){
        $credenciada = Credenciada::find($id);
        return view('credenciada.habilitar', compact('credenciada'));
    }

    public function Uptadedisable(Request $request, $id){
        $credenciada = Credenciada::find($id);
        $credenciada->habilitada = $request->habilitada;
        $credenciada->save();
        return redirect(to:'credenciada');
    }

    public function FormRestPassword(){
        return view('credenciada.auth.reset');
    }

    public function UpdatePassword(Request $request,$user){
        $credenciada = User::find($user);
        $credenciada->password = $request->password;
        return redirect(to:'credenciada');
    }


    public function destroy(Credenciada $credenciada)
    {
        //
    }
}
