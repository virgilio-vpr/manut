@extends('adminlte::page')

@section('title', 'Company')

@section('content_header')
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('companies.index') }}">Empresas</a></li>
        </ol>
        <h1>Empresas &ensp;<a href="{{ route('companies.create') }}" class="btn btn-dark"><i class="fas fa-plus"></i></a></h1>
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <form action="{{ route('companies.search') }}" method="post" class="form form-inline">
                @csrf
                <input type="text" name="filter" placeholder="Empresa" class="form-control" value="{{ $filters['filter'] ?? '' }}">
                <button type="submit" class="btn btn-dark"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th width="200">logo</th>
                        <th>Empresa</th>
                        <th width="50">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $company)
                    <tr>
                        <td>
                            {{ $company->logo_company}}
                        </td>
                        <td>
                            {{ $company->name_company}}
                        </td>
                        <td style="width=10px">
                            <a href="{{ route('companies.show', $company->url_company) }}" class="btn btn-warning">VER</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {{ $companies->appends($filters)->links() }}
            @else
                {{ $companies->links() }}
            @endif
        </div>
    </div>
@stop
