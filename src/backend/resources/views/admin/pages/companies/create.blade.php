@extends('adminlte::page')

@section('title', 'Cadastrar Nova Empresa')

@section('content_header')
    <h1>Cadastrar Nova Empresa</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('companies.store') }}" class="form" method="POST">
                @csrf
                <div class="form-group">
                    <label>Nome da Empresa:</label>
                    <input type="text" name="name_company" class="form-control" placeholder="Nome da Empresa:">
                </div>
                <div class="form-group">
                    <label>Logo da Empresa:</label>
                    <input type="text" name="logo_company" class="form-control" placeholder="Logo da Empresa:">
                </div>
                <div class="form-group">
                    <label>descrição:</label>
                    <input type="text" name="description" class="form-control" placeholder="Descrição:">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Enviar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
