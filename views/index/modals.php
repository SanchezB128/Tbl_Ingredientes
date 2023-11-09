<div id="addUser" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agregar ingrediente</h4>
      </div>
      <div class="modal-body">
		<form name="formUser" onsubmit="register(); return false">
		  <div class="input-group">
		    <input id="nombre" type="text" class="form-control" name="nombre" placeholder="Nombre" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <input id="descrip" type="text" class="form-control" name="descrip" placeholder="Descripcion" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <input id="precio_u" type="number" class="form-control" name="precio_u" placeholder="Precio Unidad" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <input id="unidad_mdd" type="text" class="form-control" name="unidad_mdd" placeholder="Unidad Medida" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <input id="stock" type="number" class="form-control" name="stock" placeholder="Stock Disponible" required autocomplete="off">
		  </div>	
		  <br>
		  <div class="input-group">
		    <input id="fecha_cad" type="date" class="form-control" name="fecha_cad" placeholder="Fecha Caducidad" required autocomplete="off">
		  </div>	  
		  <br>
		  <div class="input-group">
		    <input id="cnt_ing" type="number" class="form-control" name="cnt_ing" placeholder="Cantidad Ingredientes" required autocomplete="off">
		  </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Agregar</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
		</form>
      </div>
    </div>
  </div>
</div>


<div id="updateUser" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Actualizar ingrediente </h4>        
      </div>
      <div class="modal-body">
		<form name="formUserUpdate" onsubmit="update(); return false">
		<input type="text" name="id" id="id" style="display: none;">
		  <div class="input-group">
		    <input id="nombre" type="text" class="form-control" name="nombre" placeholder="Nombre" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <input id="descrip" type="text" class="form-control" name="descrip" placeholder="Descripcion" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <input id="precio_u" type="number" class="form-control" name="precio_u" placeholder="Precio Unidad" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <input id="unidad_mdd" type="text" class="form-control" name="unidad_mdd" placeholder="Unidad Medida" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <input id="stock" type="number" class="form-control" name="stock" placeholder="Stock Disponible" required autocomplete="off">
		  </div>	
		  <br>
		  <div class="input-group">
		    <input id="fecha_cad" type="date" class="form-control" name="fecha_cad" placeholder="Fecha Caducidad" required autocomplete="off">
		  </div>	  
		  <br>
		  <div class="input-group">
		    <input id="cnt_ing" type="number" class="form-control" name="cnt_ing" placeholder="Cantidad Ingredientes" required autocomplete="off">
		  </div>		  
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Actualizar</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
		</form>
      </div>
    </div>
  </div>
</div>