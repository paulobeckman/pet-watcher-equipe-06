@extends('layout')

@section('titulo', 'Gestão Credenciada')
@section('content')

<div class="card">
   
    <div class="card-body">
        <h5 class="card-title"> {{$credenciada->razao_social}}    </h5>
        <p class="card-text">Localizada em: {{$credenciada->endereco  }}</p>

        <table class = "table">


            <tbody>
        
                @foreach($licencas as $licenca)
                <thead>
                    <th>Id da Licença</th>
                    <th>Data de Vencimento</th>
                    <th>Data de Licenciamento</th>
                    <th></th>
                    <th></th>
                </thead>
                <tr>
                    <td> {{$licenca->id}} </td>
                    <td> {{$licenca->data_vencimento}} </td>
                    <td> {{$licenca->data_licenciamento}} </td>
                    @if($licenca->data_revogacao === null)
                        <td> Licença Ativa
                            <a style = "margin: .4rem"class = "btn-outline-danger" href=" {{route('licenca.revogar',['id' => $credenciada->id, 'idlicenca' => $licenca->id])}}">Revogar Licenca</a> 
  
                    @endif
                    @if($licenca->data_revogacao != null)
                        <td> licença revogada na data {{$licenca->data_revogacao}} </td>
                    @endif
        
                </tr>
                @endforeach
                           

        </table>
        <br>
        <h4>Funcionários de {{$credenciada->razao_social}}</h4>

        @foreach($empregados as $empregado)
                <tr>
                    <td> {{$empregado->nome_completo}} </td>
                </tr><br>
        @endforeach


        <tr>
            <a class = "btn btn-primary" href=" {{route('credenciada.edit',$credenciada->id)}}">Editar {{$credenciada->razao_social}}</a>
            <a style = "margin: 1rem"class = "btn btn-secondary" href=" {{route('empregado.create',['id' => $credenciada->id])}}">Cadastrar funcionários</a>
            <a class = "btn btn-info" href=" {{route('licenca.create',['id' => $credenciada->id])}}">Cadastrar licença para {{$credenciada->razao_social}}</a><br><br>
            <a class="btn btn-success" href=" {{route('animal.index',['id' => $credenciada->id])}}">Gerenciar animais</a>
            <a class="btn btn-success" href=" {{route ('proprietario.index',['id'=>$credenciada->id])}}">Gerenciamento de proprietário de animais</a>
        </tr>


    </div>
  </div>



@stop



