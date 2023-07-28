@extends('adminlte::page')
@section('title', 'Detalhes do Plano')
@section('content_header')
<form action="{{ route('plano.destroy', $plano->plan_id) }}" method="POST" name="frm_plano" >
    @csrf
    @method('DELETE')
    <input type="submit" value="Excluir Plano" class="btn btn-danger"  />
</form>
@stop
@section('content')
<div class="card card-primary">
    <!--    <div class="card-header">
        </div>-->
    <div class="card-body">
        <ul>
            <li><strong>Id: </strong>{{ $plano->plan_id}} </li>
            <li><strong>Nome: </strong>{{ $plano->plan_nome}} </li>
            <li><strong>Preço: </strong>{{ number_format($plano->plan_preco,2,',','.') }} </li>
            <li><strong>Url: </strong>{{ $plano->plan_url}} </li>
            <li><strong>Descrição: </strong>{{ $plano->plan_descricao}} </li>
        </ul>
    </div>   
    <div class="card-footer">
        <a href="https://github.com/PauloCeami">https://github.com/PauloCeami</a> 
    </div>   
</div>
@stop