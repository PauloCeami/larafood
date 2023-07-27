@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
<a class="btn btn-primary" href="{{ route('planos.create') }}"> Adicionar Plano </a>
@stop

@section('content')
<div class="card">
<!--    <div class="card-header">
        lista de planos
    </div>-->
    <div class="card-body">
        <table st class="table table-striped">
            <thead>
                <tr>
                    <th>nome</th>
                    <th>preço</th>
                    <th>ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr>
                    <td >{{ $item->plan_nome }}</td>
                    <td>{{ $item->plan_preco }}</td>

                    <td style="width:10px;"> 
                        <a class="btn btn-warning" href="#">ver</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>   
    <div class="card-footer">
        {!! $data->links() !!}
    </div>   
</div>
@stop