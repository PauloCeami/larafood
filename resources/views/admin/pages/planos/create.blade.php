@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
<h1>Cadastro de Planos</h1>
@stop

@section('content')
<div class="card card-primary">
<!--    <div class="card-header">
      

    </div>-->
    <div class="card-body">
        <form class="form" method="POST" action="{{ route('plano.store') }}" >
            @csrf
            @include('admin.pages.planos.form')
        </form>
    </div>   
    <div class="card-footer">
        <a href="https://github.com/PauloCeami">https://github.com/PauloCeami</a> 
    </div>   
</div>
@stop