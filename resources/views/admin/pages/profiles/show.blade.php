@extends('adminlte::page')

@section('title', "Detalhes do perfil")

@section('content_header')
    <h1>Detalhes do perfil</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li><strong>Nome:</strong> {{ $profile->name }}</li>
                <li><strong>Descrição:</strong> {{ $profile->description }}</li>
            </ul>

            @include('admin.includes.alerts')

            <form action="{{ route('profiles.destroy', $profile->id) }}" class="form" method="POST">
                @csrf
                @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar</button>
            </form>
        </div>
    </div>
@endsection
