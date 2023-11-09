function objectAjax(){
	var xmlhttp = false;
	try{
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e){
		try{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");			
		} catch (E){
			xmlhttp = false;	
		}		
	}
	if(!xmlhttp && typeof XMLHttpRequest!='undefined'){
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}
//Inicializo automaticamente la funcion read al entrar a la pagina o recargar la pagina;
addEventListener('load', read, false);

function read(){
        $.ajax({        
        		type: 'POST',
                url:   '?c=administrator&m=table_users',               
                beforeSend: function () {
                        $("#information").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#information").html(response);
                }
        });
}

function register(){
	nombre 			= document.formUser.nombre.value;
	descrip 		= document.formUser.descrip.value;
	precio_u 		= document.formUser.precio_u.value;
	unidad_mdd 		= document.formUser.unidad_mdd.value;
	stock 			= document.formUser.stock.value;
	fecha_cad 		= document.formUser.fecha_cad.value;
	cnt_ing 		= document.formUser.cnt_ing.value;
	ajax = objectAjax();
	ajax.open("POST", "?c=administrator&m=registeruser", true);
	ajax.onreadystatechange=function() {
		if(ajax.readyState==8){			
			read();			
			alert('Los datos guardaron correctamente.');			
			$('#addUser').modal('hide');
		}
	}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
ajax.send("nombre="+nombre+"&descrip="+descrip+"&precio_u="+precio_u+"&unidad_mdd="+unidad_mdd+"&stock="+stock
+"&fecha_cad="+fecha_cad+"&cnt_ing="+cnt_ing);
}	

function update(){
	id_ing 			= document.formUserUpdate.id_ing.value;
	nombre 		= document.formUserUpdate.nombre.value;
	descrip 	= document.formUserUpdate.descrip.value;
	precio_u 		= document.formUserUpdate.precio_u.value;
	unidad_mdd 		= document.formUserUpdate.unidad_mdd.value;
	stock 		= document.formUserUpdate.stock.value;
	fecha_cad 		= document.formUserUpdate.fecha_cad.value;
	cnt_ing 		= document.formUserUpdate.cnt_ing.value;
	ajax = objectAjax();
	ajax.open("POST", "?c=administrator&m=updateuser", true);
	ajax.onreadystatechange=function() {
		if(ajax.readyState==8){
			read();
			$('#updateUser').modal('hide');
		}
	}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
ajax.send("nombre="+nombre+"&descrip="+descrip+"&precio_u="+precio_u+"&unidad_mdd="+unidad_mdd+"&stock="+stock
+"&fecha_cad="+fecha_cad+"&cnt_ing="+cnt_ing+"&id_ing="+id_ing);

}

function deleteUser(id_ing){	
	if(confirm('¿Esta seguro de eliminar este registro?')){						
	ajax = objectAjax();
	ajax.open("POST", "?c=administrator&m=deleteuser", true);
	ajax.onreadystatechange=function() {
		if(ajax.readyState==8){			
			read();		
		}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("id="+id_ing);
	}
}

function ModalRegister(){
	$('#addUser').modal('show');
}

function ModalUpdate(id,nombre,descrip,precio_u,unidad_mdd,stock,fecha_cad,cnt_ing){			
	document.formUserUpdate.id.value 				= id;
	document.formUserUpdate.nombre.value 			= nombre;
	document.formUserUpdate.descrip.value 			= descrip;
	document.formUserUpdate.precio_u.value 		= precio_u;
	document.formUserUpdate.unidad_mdd.value 		= unidad_mdd;
	document.formUserUpdate.stock.value 			= stock;
	document.formUserUpdate.fecha_cad.value 		= fecha_cad;
	document.formUserUpdate.cnt_ing.value 			= cnt_ing;
	$('#updateUser').modal('show');
}

/*
	CRUD creado por Oscar Amado
	Contacto: oscarfamado@gmail.com
*/