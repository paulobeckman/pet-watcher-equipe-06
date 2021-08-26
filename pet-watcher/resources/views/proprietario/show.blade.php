@extends('layout')

@section('titulo','Página do Proprietário do Animal')
@section('content')


<a  href="{{ url()->previous() }}">
    <i class="fa fa-arrow-circle-o-left"></i>
    <span>Voltar</span>
</a>

<div class = "container">
    <div class = "row d-flex justify-content-center">
        <div class = "col-md-10 mt-0 mb-3 pt-5">
            <div class = "row z-depth-3">
                <div class = "col-sm-4 bg-info rounded-left">
                    <div class = "card-block text-center text-white">
                        <i class="bi bi-person-circle" style = "font-size:8em"></i>
                        <h2 class = "font-weight-bold mt-4">{{$proprietario->nome_completo}}</h2>
                        <h5>
                            Tipo de pessoa:
                            @if($proprietario->tipo_pessoa == 0)
                                Jurídica
                            @endif
                    
                            @if($proprietario->tipo_pessoa == 1)
                                Física
                            @endif
                        </h5>
                    </div>
                </div>
                <div class = "col-sm-8 bg-white rounded-right">
                    
                    <h3 class = "mt-3 text-center">Informações</h3>
                    <div class = "row">
                        <div class = "col-sm-6">
                            <p class = "font-weight-bold">Email:</p>
                            <h6 class = "text-muted">{{$proprietario->email}}</h6>
                        </div>
                        <div class = "col-sm-6">
                            <p class = "font-weight-bold">Telefone:</p>
                            <h6 class = "text-muted">{{$proprietario->telefone}}</h6>
                        </div>
                    </div>
                    <div class = "row">
                        <div class = "col-sm-6">
                            <p class = "font-weight-bold">Endereço:</p>
                            <h6 class = "text-muted">{{$proprietario->endereco}}</h6>
                        </div>
                        <div class = "col-sm-6">
                            <p class = "font-weight-bold">CPF/CNPJ:</p>
                            <h6 class = "text-muted">{{$proprietario->cpf_cnpj}}</h6>
                        </div>
                    </div>

                    <h4 class = "mt-3 text-center">Animais</h4>
                    <hr>
                    <div class = "row">
                        @foreach($animais as $animal)
                        <div class = "col-sm-6">
                            <p class = "font-weight-bold" style = "font-size: 1.2rem"><a href=" {{route('animal.show',$animal->id)}} ">{{$animal->nome}}</a></p>
                            <h6 class = "text-muted">Microchip:{{$animal->codigo_microchip}}</h6>
                        </div>              
                        @endforeach
                        
                    </div>

                    <a style = "color: white" class = "btn btn-info mt-5 mb-3" href=" {{route('animal.create',['id_proprietario' => $proprietario->id])}}">
                        <i class="bi bi-plus-lg"></i>
                            Novo Animal
                    </a>
                        
                </div>
            </div>
        </div>
    </div>
</div>



@stop
