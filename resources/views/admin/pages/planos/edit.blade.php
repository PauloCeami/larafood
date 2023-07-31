@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
<h1>Alterar Plano <b> | ID:.{{ $plano->plan_id   }} | {{ $plano->plan_nome   }} | <b></h1>
            @stop

            @section('content')
            <div class="card card-primary">
                <!--    <div class="card-header">
                      
                
                    </div>-->
                <div class="card-body">
                    <form class="form" method="POST" action="{{ route('plano.update',$plano->plan_id) }}" >
                        @csrf
                        @method('PUT')
                        @include('admin.pages.planos.form')
                    </form>
                </div>   
                <div class="card-footer">
                    <a href="https://github.com/PauloCeami">https://github.com/PauloCeami</a> 
                </div>   
            </div>
            @stop