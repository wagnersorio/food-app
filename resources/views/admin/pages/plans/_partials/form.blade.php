@include('admin.includes.alerts')

<div class="form-group">
    <label>Nome:</label>
    <input type="text" name="name" id="name" value="{{ $plan->name ?? old('name') }}" class="form-control" placeholder="None:">
</div>
<div class="form-group">
    <label>Preço:</label>
    <input type="text" name="price" id="price" value="{{ $plan->price  ?? old('price') }}" class="form-control"
           placeholder="Preço:">
</div>
<div class="form-group">
    <label>Descrição:</label>
    <input type="text" name="description" id="description" value="{{ $plan->description  ?? old('description') }}" class="form-control"
           placeholder="Descrição:">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-dark">Salvar</button>
</div>

