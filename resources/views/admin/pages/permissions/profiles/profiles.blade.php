@extends('adminlte::page')

@section('title', "Perfis da permissão {{ $permission->name }}")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('profiles.index')  }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('profiles.index')  }}" class="active">Perfis</a></li>
    </ol>
    <h1>Perfis da permissão <strong>{{ $permission->name }}</strong></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th style="width: 300px">Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($profiles as $profile)
                    <tr>
                        <td>{{ $profile->name }}</td>
                        <td style="width: 10px">

                            <a href="{{ route('profiles.permission.detach',[$profile->id, $permission->id]) }}"
                               class="btn btn-danger">DESVINCULAR</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if(isset($filters))
                {!! $profiles->appends($filters)->links("pagination::bootstrap-4") !!}
            @else
                {!! $profiles->links("pagination::bootstrap-4") !!}
            @endif
        </div>
    </div>
@stop

