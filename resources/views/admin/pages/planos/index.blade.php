@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
<a class="btn btn-primary" href="{{ route('plano.create') }}"> Adicionar Plano </a>
@stop

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <form action="{{ route('planos.search') }}" method="POST" >
            @csrf
            <div class="col-6">
                <div class="input-group">
                    <input type="search" value="{{ $filter['filter'] ?? '' }}"  name="filter" class="form-control form-control-lg" placeholder="Pesquisar">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-lg btn-default">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
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

                    <td> 
                        <a class="btn btn-dark" href="{{ route('plano.show',$item->plan_id) }}">ver</a>
                        <a class="btn btn-warning" href="{{ route('plano.edit',$item->plan_id) }}">alterar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>   
    <div class="card-footer">
        @if(isset($filter))
        {!! $data->appends($filter)->links() !!}
        @else
        {!! $data->links() !!}
        @endif
    </div>   
</div>
@stop