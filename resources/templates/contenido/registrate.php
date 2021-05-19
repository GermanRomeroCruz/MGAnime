<?php

	require("src/validar_formulario.php");
	//Definir variables
	$usuario = "";
	$correo = "";
	$contraseña = "";
	$r_contraseña = "";
	$imagen = '';
	$errores = [];
	//Obtenemos el nombre de todos los usuarios y su email
	$nombresUsers = UsuarioManager::getAllNom();
	$mailsUsers = UsuarioManager::getAllMail() ;

	//agregar el post y depurar errores
	if ( isset($_POST) && count($_POST)!=0 ) {

		//NOMBRE
		if (isset($_POST['usuario']) && strlen($_POST['usuario'])>=3 ) {
			foreach($nombresUsers as $fila){
				if(strtolower( $fila['NOMBRE']) != strtolower($_POST['usuario'])){
					$usuario = limpiarCadena($_POST['usuario']);
				}else{
					$errores['error_usuario_duplicado'] = "Ese nombre de usuario ya existe";
				}
			}
		}else{
			$errores['error_usuario'] = "Nombre muy corto";
		}
		//CORREO
		if (isset($_POST['correo']) && filter_var($_POST['correo'],FILTER_VALIDATE_EMAIL) ) {
			foreach($mailsUsers as $fila){
				if($fila['EMAIL'] != $_POST['correo']){
					$correo = limpiarCadena($_POST['correo']);
				}else{
					$errores['error_correo'] = "Correo invalido";
				}
			}
		}else{
			$errores['error_correo'] = "Correo invalido";
		}
		//CONTRASEÑA
		if (isset($_POST['contraseña']) && contraseñaValida($_POST['contraseña'],4) ) {
			$contraseña = limpiarCadena($_POST['contraseña']);
		}else{
			$errores['error_contraseña'] = "Contraseña Invalida";
		}
		//CONFIRMAR CONTRASEÑA
		if (isset($_POST['r_contraseña']) && contraseñaValida($_POST['r_contraseña'],4) ) {
			$r_contraseña = limpiarCadena($_POST['r_contraseña']);
			if (!strcmp($contraseña, $r_contraseña)==0) {
				$errores['error_r_contraseña_dif'] = "No coinciden las contraseñas";
			}else{
				$contraseña = password_hash($contraseña, PASSWORD_DEFAULT);
			}
		}else{
			$errores['error_r_contraseña'] = "Contraseña invalida";
		}
		//IMAGEN
		if(isset($_FILES['imagen']) && $_FILES['imagen']['name']!=''){
			$imagen = limpiarCadena($_FILES['imagen']['name']);
		}else{
			$imagen = '';
		}
	}
	//Hacer el insert y redirigir a Login
	if (count($errores)==0 && count($_POST)>0) {
		$rutaImagen = guardarImagen($usuario,'perfil',$imagen);
		$rol = "USER";
		UsuarioManager::insert($usuario,$contraseña,$correo,$rutaImagen,$rol);

		$usuario = '';
		$contraseña = '';
		$correo ='';
		$rutaImagen='';
		$rol='';
		header('Location: login.php');
		die();
	}

?>

<div class="w-100 d-flex justify-content-center mt-3">
 	<div class="bg-light rounded text-center">
	    <form action="registrate.php" method="POST" enctype="multipart/form-data">
			<h1 class="titulo">Darse de alta</h1>
			<div>
	    		<label for="usuario" class="mt-3">Nombre usuario</label><br>
	    		<div class="input-group mb-3 d-flex justify-content-center mt-3">
			     	<div class="input-group-prepend">
			       	 	<span class="input-group-text bg-dark" id="basic-addon1"><i class="fas fa-user text-white"></i></span>
			     	</div>
	    			<input type="text" name="usuario" id="nombre" placeholder="Escribe tu nombre de usuario" value="<?=$usuario?>" class=""><br>
	    		</div>
	    	</div>
	        <?php if( isset($errores['error_usuario'])) { ?>
	          <br><span class='error'><?=$errores['error_usuario']?></span><br>
	        <?php } ?>
			<?php if( isset($errores['error_usuario_duplicado'])) { ?>
	          <br><span class='error'><?=$errores['error_usuario_duplicado']?></span><br>
	        <?php } ?>
	        <div>
				<label for="correo">Correo </label><br>
				<div class="input-group mb-3 d-flex justify-content-center">
					<div class="input-group-prepend flex-grow-0 mt-3">
					    <span class="input-group-text bg-dark" id="basic-addon1"><i class="fas fa-at text-white"></i></span>
					</div>
					<input type="email" name="correo" id="correo" placeholder="Escribe tu email" value="<?=$correo?>" class="mt-3"><br>
				</div>
			</div>
	        <?php if( isset($errores['error_correo'])) { ?>
	          <br><span class='error'><?=$errores['error_correo']?></span><br>
	        <?php } ?>

		    <div>
				<label>Subir imagen de perfil:</label> <br>
				<input type="file" name="imagen" value="Seleccione archivo" class="btn btn-dark text-white rounded mt-3"> <br>
			</div>
			<?php if( isset($errores['imagen'])) { ?>
				<br><span class='error'><?=$errores['imagen']?></span><br>
			<?php } ?>

			<div>
				<label for="contraseña" class="mt-3">Contraseña </label><br>
				<div class="input-group mb-3 d-flex justify-content-center mt-3">
				    <div class="input-group-prepend">
				        <span class="input-group-text bg-dark" id="basic-addon1"><i class="fas fa-key text-white"></i></span>
				    </div>
					<input type="password" name="contraseña" id="contraseña" placeholder="Escribe tu contraseña" value=""><br>
				</div>
			</div>
	        <?php if( isset($errores['contraseña'])) { ?>
	            <br><span class='error'><?=$errores['contraseña']?></span><br>
	        <?php } ?>

	        <div>
				<label for="r_contraseña">Confirmar Contraseña </label><br>
				<div class="input-group mb-3 d-flex justify-content-center mt-3">
				    <div class="input-group-prepend">
				        <span class="input-group-text bg-dark" id="basic-addon1"><i class="fas fa-key text-white"></i></span>
				    </div>
					<input type="password" name="r_contraseña" id="r_contraseña" placeholder="Confirma tu contraseña" value=""><br>
				</div>
			</div>
	        <?php if( isset($errores['error_r_contraseña'])) { ?>
	          	<br><span class='error'><?=$errores['error_r_contraseña']?></span><br>
	        <?php } ?>

	        <?php if( isset($errores['error_r_contraseña_dif'])) { ?>
	       	   <br><span class='error'><?=$errores['error_r_contraseña_dif']?></span><br>
	        <?php } ?>

			<input type="submit" name="enviar" value="Registrarse" class="btn btn-dark text-white rounded mt-3 mb-3">
	    </form>
   	</div>
</div>
