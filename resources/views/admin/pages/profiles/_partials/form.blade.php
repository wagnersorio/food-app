@include('admin.includes.alerts')

@csrf

<div class="form-group">
    <label>Nome:</label>
    <input type="text" name="name" id="name" value="{{ $profile->name ?? old('name') }}" class="form-control" placeholder="None:">
</div>
<div class="form-group">
    <label>Descrição:</label>
    <input type="text" name="description" id="description" value="{{ $profile->description  ?? old('description') }}" class="form-control"
           placeholder="Descrição:">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-dark">Salvar</button>
</div>
