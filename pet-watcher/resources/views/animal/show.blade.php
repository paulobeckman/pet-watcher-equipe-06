@extends('layout')

@section('titulo', 'Animal')
@section('content')

<div class = "container">
    <div class = "row d-flex justify-content-center">
        <div class = "col-md-10 mt-0 mb-4 pt-5">
            <div class = "row z-depth-3">
                <div class = "col-sm-4 bg-info rounded-left">
                    <div class = "card-block text-center text-white">       
                        <i class="bi bi-piggy-bank" style = "font-size:8em"></i>             
                        <h2 class = "font-weight-bold mt-4">{{$animal->nome}}</h2>
                        <h5>Proprietário: {{$proprietario->nome_completo}} </h5>
                    </div>
                </div>
                <div class = "col-sm-8 bg-white rounded-right">
                    
                    <h3 class = "mt-3 text-center">Informações do Animal</h3>
                    <div class = "row">
                        <div class = "col-sm-6">
                            <p class = "font-weight-bold">Código do Microchip:</p>
                            <h6 class = "text-muted">{{$animal->codigo_microchip}}</h6>
                        </div>
                        <div class = "col-sm-6">
                            <p class = "font-weight-bold">Tipo de Aquisição:</p>
                            <h6 class = "text-muted">{{$animal->tipo_aquisicao}}</h6>
                        </div>
                    </div>
                    <div class = "row">
                        <div class = "col-sm-6">
                            <p class = "font-weight-bold">Data Nascimento</p>
                            <h6 class = "text-muted">{{$animal->data_nascimento}}</h6>
                        </div>
                        <div class = "col-sm-6">
                            <p class = "font-weight-bold">Sexo:</p>
                            <h6 class = "text-muted">{{$animal->sexo}}</h6>
                        </div>
                    </div><div class = "row">
                        <div class = "col-sm-6">
                            <p class = "font-weight-bold">Espécie:</p>
                            <h6 class = "text-muted">{{$especie->nome_popular}}</h6>
                        </div>
                        <div class = "col-sm-6">
                            <p class = "font-weight-bold">Porte:</p>
                            <h6 class = "text-muted">{{$animal->porte}}</h6>
                        </div>
                    </div>

                    <div class = "row">
                        <div class = "col-sm-6">
                            @if($animal->ativo === true)
                            @if($pedigree === null)
                            <a class = "btn btn-info mt-5" href=" {{route('pedigree.create',['id' => $animal->id])}}">Cadastrar Pedigree </a>
                            @endif
                            @if($pedigree != null)
                            <h3>Código do pedigree: {{$pedigree->codigo}}</h3>
                            <h3>Origem do pedigree: {{$pedigree->origem}}</h3>
                            @endif
                            <a class = "btn btn-info mt-3 mb-3" href=" {{route('animal.desative',['id' => $animal->id])}}">Desativar cadastro de animal</a>
                            @endif
                    </div>
    
                    <div class = "col-sm-6">
                        @if($animal->ativo === false)
                            <h3>Cadastro inativado pelo motivo: {{$animal->motivo_inativacao}}</h3>
                            @endif                 
                    </div>
                        
                    </div>


                        
                </div>
            </div>
        </div>
    </div>
</div>


@stop
