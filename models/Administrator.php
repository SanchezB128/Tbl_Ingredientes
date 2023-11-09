<?php
/*
	CRUD creado por Oscar Amado
	Contacto: oscarfamado@gmail.com
*/
class Administrator extends db{
	
	private function view_users(){
		try {
			$SQL = "SELECT * FROM tbl_ingredientes";
			$result = $this->connect()->prepare($SQL);
			$result->execute();
			return $result->fetchAll(PDO::FETCH_OBJ);	
		} catch (Exception $e) {
			die('Error Administrator(view_users) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function get_view_users(){
		return $this->view_users();
	}

	private function register_users($data){
		try {
			$SQL = 'INSERT INTO tbl_ingredientes (nombre, descrip, precio_u, unidad_mdd, stock, fecha_cad, cnt_ing) VALUES (?,?,?,?,?,?,?)';
			$result = $this->connect()->prepare($SQL);
			$result->execute(array(
									$data['nombre'],
									$data['descrip'],
									$data['precio_u'],
									$data['unidad_mdd'],
									$data['stock'],
									$data['fecha_cad'],
									$data['cnt_ing']
									)
							);			
		} catch (Exception $e) {
			die('Error Administrator(register_users) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function set_register_user($data){
		$this->register_users($data);
	}

	private function update_user($data){
		try {
			$SQL = 'UPDATE tbl_ingredientes SET nombre = ?, descrip = ?, precio_u = ?, unidad_mdd = ?, stock = ?, 
			fecha_cad = ?, cnt_ing = ? WHERE id_ing = ?';
			$result = $this->connect()->prepare($SQL);
			$result->execute(array(
									$data['nombre'],
									$data['descrip'],
									$data['precio_u'],
									$data['unidad_mdd'],
									$data['stock'],
									$data['fecha_cad'],
									$data['cnt_ing'],
									$data['id_ing']
									)
							);			
		} catch (Exception $e) {
			die('Error Administrator(update_user) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function set_update_user($data){
		$this->update_user($data);
	}

	private function delete_user($id){
		try {
			$SQL = 'DELETE FROM tbl_ingredientes WHERE id_ing = ?';
			$result = $this->connect()->prepare($SQL);
			$result->execute(array($id));			
		} catch (Exception $e) {
			die('Error Administrator(delete_user) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function set_delete_user($id){
		$this->delete_user($id);
	}	
}
?>