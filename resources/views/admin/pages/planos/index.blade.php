@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
    <li class="breadcrumb-item active"><a href="{{ route('planos.index') }}"></a>Planos</li>
</ol>
<a class="btn btn-primary" href="{{ route('plano.create') }}"> <i class="fa fa-solid fa-plus"></i> </a>
@stop

@section('content')


<div class="card card-secondary">
    <div class="card-header">
        <form action="{{ route('planos.search') }}" method="POST" >
            @csrf
            <div class="col-6">
                <div class="input-group">
                    <input type="search" value="{{ $filter['filter'] ?? '' }}"  name="filter" class="form-control form-control-sm" placeholder="Pesquisar">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-sm btn-default">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="card-body table-responsive p-0">
        <table st class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr>
                    <td >{{ $item->plan_id }}</td>
                    <td >{{ $item->plan_nome }}</td>
                    <td>R$ {{ number_format($item->plan_preco,2,'.',',') }}</td><i class="fa-duotone fa-pencil"></i>

            <td> 
                <a class="btn btn-dark" href="{{ route('plano.show',$item->plan_id) }}"><i class="fa fa-eye"></i></a>
                <a class="btn btn-warning" href="{{ route('plano.edit',$item->plan_id) }}"><i class="fa fa-edit"></i></a>
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