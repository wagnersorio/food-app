@extends('adminlte::page')

@section('title', "Detalhes da permissão")

@section('content_header')
    <h1>Detalhes da permissão</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li><strong>Nome:</strong> {{ $permission->name }}</li>
                <li><strong>Descrição:</strong> {{ $permission->description }}</li>
            </ul>

            @include('admin.includes.alerts')

            <form action="{{ route('profiles.destroy', $permission->id) }}" class="form" method="POST">
                @csrf
                @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar</button>
            </form>
        </div>
    </div>
@endsection
