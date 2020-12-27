@extends('adminlte::page')

@section('title', 'Perfis')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('profiles.index')  }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('profiles.index')  }}" class="active">Perfis</a></li>
    </ol>
    <h1>Perfis <a href="{{ route('profiles.create') }}" class="btn btn-dark">ADD</a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form action="{{ route('profiles.search') }}" method="post" class="form form-inline">
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
                    <th>Nome</th>
                    <th style="width: 300px">Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($profiles as $profile)
                    <tr>
                        <td>{{ $profile->name }}</td>
                        <td style="width: 10px">
                            {{--<a href="{{ route('details.plan.index',$plan->url) }}" class="btn btn-primary">Detalhes</a>--}}
                            <a href="{{ route('profiles.edit',$profile->id) }}" class="btn btn-info">Editar</a>
                            <a href="{{ route('profiles.show',$profile->id) }}" class="btn btn-warning">Ver</a>
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

