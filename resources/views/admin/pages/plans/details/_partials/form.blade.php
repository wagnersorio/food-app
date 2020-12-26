@include('admin.includes.alerts')

@csrf

<div class="form-group">
    <label>Nome:</label>
    <input type="text" name="name" id="name" value="{{ $detail->name ?? old('name') }}" class="form-control" placeholder="None:">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-info">Salvar</button>
</div>

