@extends('layout')

@section('titulo', 'Gestão Credenciada')
@section('content')

<div class = "container">
    <div class = "row d-flex justify-content-center">
        <div class = "col-md-10 mt-0 mb-4 pt-5">
            <div class = "row z-depth-3">
                <div class = "col-sm-4 bg-info rounded-left">
                    <div class = "card-block text-center text-white">                     
                        <i class="bi bi-building" style = "font-size:8em"></i>
                        <h2 class = "font-weight-bold mt-4">{{$credenciada->razao_social}}</h2>
                        <h5></h5>
                    </div>
                </div>
                <div class = "col-sm-8 bg-white rounded-right">
                    
                    <h3 class = "mt-3 text-center">Informações</h3>
                    <div class = "row">
                        <div class = "col-sm-6">
                            <p class = "font-weight-bold">Email:</p>
                            <h6 class = "text-muted">{{$credenciada->email}}</h6>
                        </div>
                        <div class = "col-sm-6">
                            <p class = "font-weight-bold">Telefone:</p>
                            <h6 class = "text-muted">{{$credenciada->telefone}}</h6>
                        </div>
                    </div>
                    <div class = "row">
                        <div class = "col-sm-6">
                            <p class = "font-weight-bold">Endereço:</p>
                            <h6 class = "text-muted">{{$credenciada->endereco}}</h6>
                        </div>
                        <div class = "col-sm-6">
                            <p class = "font-weight-bold">CNPJ:</p>
                            <h6 class = "text-muted">{{$credenciada->cnpj}}</h6>
                        </div>
                    </div>

                    <div class = "row">
                        <div class = "col-sm-6">
                        <a class = "btn btn-primary mt-3" href=" {{route('credenciada.edit',$credenciada->id)}}">Editar Informações</a>
                        </div>
                        
                    </div>




                    <h4 class = "mt-3 text-center">Licença</h4>
                    <hr>
                    <div class = "row">
                        @foreach($licencas as $licenca)
                        <div class = "col-sm-6">
                            <p class = "font-weight-bold">Id da Licença</p>
                            <h6 class = "text-muted">{{$licenca->id}}</h6><br>
                            <p class = "font-weight-bold">Data de Vencimento</p>
                            <h6 class = "text-muted">{{$licenca->data_vencimento}}</h6><br>
                            <p class = "font-weight-bold">Data de Licenciamento</p>
                            <h6 class = "text-muted">{{$licenca->data_licenciamento}}</h6><br>
                            
                            @if($licenca->data_revogacao === null)
                        <td> <span style = "color: rgb(10, 194, 10)">Licença Ativa</span>
                            <a style = "margin: .4rem"class = "btn-outline-danger" href=" {{route('licenca.revogar',['id' => $credenciada->id, 'idlicenca' => $licenca->id])}}">Revogar Licenca</a> 
  
                    @endif
                    @if($licenca->data_revogacao != null)
                        <td> Licença revogada na data {{$licenca->data_revogacao}} </td>
                    @endif
                        </div>                  
                        @endforeach

                        <div class = "col-sm-6">
                            <a class = "btn btn-info mt-5 mb-3" href=" {{route('licenca.create',['id' => $credenciada->id])}}">
                                <i class="bi bi-plus-lg"></i>                                
                                Nova Licença
                            </a>

                        </div>
                        
                    </div>

                    <h4 class = "mt-3 text-center">Funcionários</h4>
                    <hr>
                    <div class = "row">
                        @foreach($empregados as $empregado)
                        <div class = "col-sm-6">
                            <p class = "font-weight-bold" style = "font-size: 1.2rem">Nome: {{$empregado->nome_completo}}</p>
                            <h6 class = "text-muted">CPF: {{$empregado->cpf}}</h6>
                        </div>              
                        @endforeach
                        
                    </div>

                    <div class = "col-sm-6">
                        <a class = "btn btn-secondary mt-3" href=" {{route('empregado.create',['id' => $credenciada->id])}}">
                            <i class="bi bi-plus-lg"></i>                                
                            Novo Funcionário
                        </a>
                    </div>


                    <h4 class = "mt-3 text-center">Proprietários de Animais</h4>
                    <hr>
                    <div class = "row">
                        
                        <div class = "col-sm-6">
            <a class="btn btn-success" href=" {{route ('proprietario.index',['id'=>$credenciada->id])}}">Gerenciamento de proprietário de animais</a>
                        </div>              
                      
                    </div>

                    <h4 class = "mt-3 text-center">Animais</h4>
                    <hr>
                    <div class = "row">
                        <div class = "col-sm-6">
                            <a class="btn btn-success mb-3" href=" {{route('animal.index',['id' => $credenciada->id])}}">Gerenciar animais</a>
                        </div>              
                    </div>

                    <h4 class = "mt-3 text-center">Espécies</h4>
                    <hr>
                    <div class = "row">
                        <div class = "col-sm-6">
                            <a class="btn btn-success mb-3" href=" {{action ('EspecieController@index')}}">Gerenciamento de especies</a>
                        </div>              
                    </div>


                        
                </div>
            </div>
        </div>
    </div>
    <a class = "btn btn-primary mb-3" href="{{ url()->previous() }}">
        <i class="bi bi-arrow-left"></i>
        <span>Voltar</span>
    </a>
</div>




@stop



