<?php

namespace App\Http\Controllers;

use App\Licenca;
use Illuminate\Http\Request;


class LicencaController extends Controller
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
        return view('licenca.create', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $licenca = new Licenca();
        $id = $request->id;
        $licenca->data_licenciamento = $request->data_licenciamento;
        $licenca->data_vencimento = $request->data_vencimento;
        $licenca->id_credenciada = $id;
        $licenca->save();
        return redirect(route('credenciada.show', ['id' => $id]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Licenca  $licenca
     * @return \Illuminate\Http\Response
     */
    public function show(Licenca $licenca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Licenca  $licenca
     * @return \Illuminate\Http\Response
     */
    public function edit(Licenca $licenca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Licenca  $licenca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Licenca $licenca)
    {
        //
    }

    public function revogar(Request $request)
    {
        $id = $request->idlicenca;
        $licenca = Licenca::find($id);
        $licenca->data_revogacao = now();
        $licenca->save();
        return back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Licenca  $licenca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Licenca $licenca)
    {
        //
    }
}
