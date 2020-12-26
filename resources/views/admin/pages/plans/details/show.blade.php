@extends('adminlte::page')

@section('title', "Detalhe do detalhe{{ $detail->name }}")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index')  }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.index')  }}">Planos</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.show',$plan->url) }}">{{ $plan->name }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('details.plan.create',$plan->url) }}">Detalhes</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('details.plan.edit',[$plan->url, $detail->id]) }}"
                                              class="active">Detalhes</a></li>
    </ol>
    <h1>Detalhe do detalhe{{ $detail->name }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li><strong>Nome:</strong>{{ $detail->name }}</li>
            </ul>
        </div>
        <div class="card-footer">
            <form action="{{ route('details.plan.destroy', [$plan->url, $detail->id]) }}" class="form" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Deletar o detalhe {{ $detail->name }}, no plano {{ $plan->name }}</button>
            </form>
        </div>
    </div>
@endsection
