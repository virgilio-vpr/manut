@extends('adminlte::page')

@section('title', 'Cadastrar Diretoria')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('companies.index') }}">Empresas</a></li>
        <li class="breadcrumb-item"><a href="{{ route('companies.show', $company->url_company) }}">{{ $company->name_company }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('directions.company.index', $company->url_company) }}">Diretoria</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('directions.company.create', $company->url_company) }}">Nova</a></li>
    </ol>

    <h1>Cadastrar Diretoria da Empresa {{ $company->name_company }}</h1>
@stop

@section('content')
        <div class="card">
            <div class="card-body">
                <form action="{{ route('directions.company.store', [$company->url_company, $company->id]) }}" class="form" method="POST">
                    @csrf
                    @include('admin.pages.directions._partials.form')
                </form>
            </div>
        </div>
@endsection
