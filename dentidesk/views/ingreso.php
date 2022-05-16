<br>
<div class="card">
  <div class="card-body">
    <div class="mb-3 row text-center">
      <label class="col-sm-2 col-form-label">Ingreso</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="ingreso" placeholder="Ingresar valor" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" />
      </div>
      <div class="col-sm-2">
        <button type="button" class="btn btn-success mb-3" id="envIngreso">Enviar</button>
      </div>
    </div>
  </div>
</div>