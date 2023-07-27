@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
<h1>Cadastro de Planos</h1>
@stop

@section('content')
<div class="card">
<!--    <div class="card-header">
        
    </div>-->
    <div class="card-body">
        <form class="form" method="POST" action="{{ route('planos.store') }}" >
            @csrf
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="plan_nome" class="form-control" placeholder="Nome:" >
            </div>
            <div class="form-group">
                <label>Preço:</label>
                <input type="text" name="plan_preco" class="form-control" placeholder="Preço:" >
            </div>
            <div class="form-group">
                <label>Descrição:</label>
                <input type="text" name="plan_descricao" class="form-control" placeholder="Descrição:" >
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-dark" >salvar</button>
            </div>
        </form>
    </div>   
    <div class="card-footer">
        <a href="https://github.com/PauloCeami">https://github.com/PauloCeami</a> 
    </div>   
</div>
@stop