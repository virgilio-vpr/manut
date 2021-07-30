@extends('adminlte::page')

@section('title', "Detalhes da Empresa {$company->name_company}")

@section('content_header')
    <h1>Detalhes da Empresa <b>{{ $company->name_company }}</b></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Nome da Empresa: </strong> {{ $company->name_company }}
                </li>
            </ul>
            <ul>
                <li>
                    <strong>URL da Empresa: </strong> {{ $company->url_company }}
                </li>
            </ul>
            <ul>
                <li>
                    <strong>Logo da Empresa: </strong> {{ $company->logo_company }}
                </li>
            </ul>
            <ul>
                <li>
                    <strong>Descrição: </strong> {{ $company->description }}
                </li>
            </ul>
            <form action="{{ route('companies.destroy', $company->url_company) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> DELETAR A EMPRESA {{ $company->name_company }} </button>
            </form>
        </div>
    </div>
@endsection

