@include('admin.includes.alerts')
<div class="form-group">
    <label>Logo da Empresa:</label>
    <input type="text" name="logo_company" class="form-control" placeholder="Logo da Empresa:" value="{{ $company->logo_company ?? old('logo_company') }}">
</div>
<div class="form-group">
    <label>Nome da Empresa:</label>
    <input type="text" name="name_company" class="form-control" placeholder="Nome da Empresa:" value="{{ $company->name_company ?? old('name_company') }}">
</div>
<div class="form-group">
    <label>Descrição:</label>
    <input type="text" name="description" class="form-control" placeholder="Descrição:" value="{{ $company->description ?? old('description') }}">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">Enviar</button>
</div>
