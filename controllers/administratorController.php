<?php
/*
	CRUD creado por Oscar Amado
	Contacto: oscarfamado@gmail.com
*/
class administratorController extends Administrator{

	function index(){
		require_once('views/all/header.php');
		require_once('views/all/nav.php');
		require_once('views/index/index.php');
		require_once('views/index/modals.php');
		require_once('views/all/footer.php');
	}

	function table_users(){
		?>
		<table class="table table-bordered">
			<thead>
				<tr>
				<th>#</th>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Precio Unidad</th>
				<th>Unidad Medida</th>
				<th>Stock Disponible</th>
				<th>Fecha caducidad </th>
				<th>Cantidad Ingredientes</th>
				</tr>
			</thead>
			<tbody >		
		<?php
		foreach (parent::get_view_users()	as $data) {
		?>
		<tr>
			<td><?php echo $data->id_ing; ?> </td>
			<td><?php echo $data->nombre; ?> </td>
			<td><?php echo $data->descrip; ?> </td>
			<td><?php echo $data->precio_u; ?> </td>
			<td><?php echo $data->unidad_mdd; ?> </td>
			<td><?php echo $data->stock; ?> </td>
			<td><?php echo $data->fecha_cad; ?> </td>
			<td><?php echo $data->cnt_ing; ?> </td>
			<td>
			  <div class="btn-group">
			    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
			    Seleccionar <span class="caret"></span></button>
			    <ul class="dropdown-menu" role="menu">
			      <li><a href="#" onclick="ModalUpdate('<?php echo $data->id_ing; ?>','<?php echo $data->nombre; ?>',
				  '<?php echo $data->descrip; ?>','<?php echo $data->precio_u; ?>','<?php echo $data->unidad_mdd; ?>',
				  '<?php echo $data->stock; ?>','<?php echo $data->fecha_cad; ?>','<?php echo $data->cnt_ing; ?>');">Actualizar</a></li>
			      <li><a href="#" onclick="deleteUser('<?php echo $data->id_ing; ?>');">Borrar</a></li>
			    </ul>
			  </div>
			</td>
		</tr>
		<?php
		}
		?>
			</tbody>
		</table>	
	<?php	
    }
    
	function deleteuser(){		
			parent::set_delete_user($_REQUEST['id']);		
    }

	function registeruser(){
		$data = array(
					'nombre' 		=> $_REQUEST['nombre'],
					'descrip' => $_REQUEST['descrip'],
					'precio_u'		=> $_REQUEST['precio_u'],
					'unidad_mdd'		=> $_REQUEST['unidad_mdd'],
					'stock'		=> $_REQUEST['stock'],
					'fecha_cad'		=> $_REQUEST['fecha_cad'],
					'cnt_ing'		=> $_REQUEST['cnt_ing']
					);		
					parent::set_register_user($data);		
    }    
    
	function updateuser(){
		$data = array(
					'id_ing'		=> $_REQUEST['id_ing'],
					'nombre' 		=> $_REQUEST['nombre'],
					'descrip' => $_REQUEST['descrip'],
					'precio_u'		=> $_REQUEST['precio_u'],
					'unidad_mdd'		=> $_REQUEST['unidad_mdd'],
					'stock'		=> $_REQUEST['stock'],
					'fecha_cad'		=> $_REQUEST['fecha_cad'],
					'cnt_ing'		=> $_REQUEST['cnt_ing']
					);		
			parent::set_update_user($data);		
	}    
    
}

