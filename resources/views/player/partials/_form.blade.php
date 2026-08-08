
<div class="mb-3">
    <label for="name" class="form-label">Nome</label>
    <input type="text" class="form-control" id="name">
</div>

<div class="mb-3">
    <label for="age" class="form-label">Idade</label>
    <input type="number" class="form-control" id="age">
</div>

<div class="mb-3 form-check">
    <label class="form-label" for="height">Altura</label>
    <input type="number" class="form-check-input" id="height">
</div>

<button type="submit" class="btn btn-primary">Salvar</button>
<a href="{{ url()->previous() }}" class="btn btn-danger">Cancelar</a>
