@extends('adminlte::page')

@section('title', "Permissões disponíveis para o perfil {{ $profile->name }}")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('profiles.index')  }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('profiles.index')  }}" class="active">Perfis</a></li>
    </ol>

    <h1>Permissões disponíveis para o perfil <stron>{{ $profile->name }}</stron></h1>

@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form action="{{ route('profiles.profiles.available', $profile->id) }}" method="post" class="form form-inline">
                @csrf
                <input type="text" name="filter" id="filter" placeholder="filtro" value="{{ $filters['filter'] ?? ''  }}"
                       class="form-control">
                <button type="submit" class="btn btn-dark">Pesquisar</button>
            </form>
        </div>
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                </tr>
                </thead>
                <tbody>
                <form action="{{ route('profiles.profiles.attach', $profile->id) }}" method="post">
                    @csrf
                    @foreach($permissions as $permission)
                        <tr>
                            <td><input type="checkbox" name="permissions[]" value="{{ $permission->id }}"></td>
                            <td>{{ $permission->name }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="500">
                            @include('admin.includes.alerts')
                            <button type="submit" class="btn btn-success">Vincular</button></td>
                    </tr>
                </form>
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

