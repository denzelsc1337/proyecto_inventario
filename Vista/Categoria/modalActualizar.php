<form id="actualizarDatos">
<div class="modal fade" id="dataUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Modificar Estado:</h4>
      </div>
      <div class="modal-body">
			<div id="datos_ajax"></div>
          <div class="form-group">
            <label for="codigo" class="control-label">Código Categoria:</label>
            <input type="text" class="form-control" id="codigo" name="codigo" required maxlength="2">
			<input type="hidden" class="form-control" id="id" name="id">
          </div>
		  <div class="form-group">
            <label for="cate" class="control-label">Categoria:</label>
            <input type="text" class="form-control" id="cate" name="cate" required maxlength="45">
          </div>
		  <div class="form-group">
            <label for="estado" class="control-label">Estado:</label>
            <input type="text" class="form-control" id="estado" name="estado" required maxlength="3">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar datos</button>
      </div>
    </div>
  </div>
</div>
</form>