@extends('adminlte::page')

@section('title', 'Company')

@section('content_header')
    <h1>Empresas</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            #filtros
        </div>
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>logo</th>
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
                            <a href="" class="btn btn-warning">VER</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
