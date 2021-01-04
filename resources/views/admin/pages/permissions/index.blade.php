@extends('adminlte::page')

@section('title', 'Permissões')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('permissions.index')  }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('permissions.index')  }}" class="active">Permissões</a></li>
    </ol>
    <h1>Permissões <a href="{{ route('permissions.create') }}" class="btn btn-dark">ADD</a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form action="{{ route('permissions.search') }}" method="post" class="form form-inline">
                @csrf
                <input type="text" name="filter" id="filter" placeholder="filtro"
                       value="{{ $filters['filter'] ?? ''  }}"
                       class="form-control">
                <button type="submit" class="btn btn-dark">Pesquisar</button>
            </form>
        </div>
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th style="width: 300px">Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($permissions as $permission)
                    <tr>
                        <td>{{ $permission->name }}</td>
                        <td style="width: 10px">
                            <a href="{{ route('permissions.edit',$permission->id) }}" class="btn btn-info">Editar</a>
                            <a href="{{ route('permissions.show',$permission->id) }}" class="btn btn-warning">Ver</a>
                            <a href="{{ route('permissions.profiles',$permission->id) }}" class="btn btn-info"><i class="fas fa-address-book"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if(isset($filters))
                {!! $permissions->appends($filters)->links("pagination::bootstrap-4") !!}
            @else
                {!! $permissions->links("pagination::bootstrap-4") !!}
            @endif
        </div>
    </div>
@stop

