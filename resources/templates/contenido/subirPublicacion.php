<?php
	require("$ROOT/src/validar_formulario.php");
	areaPrivada();
	$titulo = "";
	$descripcion = "";
	$autor = "";
	$imagen = "";
	$errores = [];
	$categoria = "";
	$rutaImagen = "";

	if (count($_POST)>0 ) {
		//titulo
		if (isset($_POST['titulo']) && $_POST['titulo'] != '') {
			$titulo = limpiarCadena($_POST['titulo']);
		}else{
			$errores['titulo'] = "El titulo de la publicacion debe ser mayor a 3 caracteres.";
		}
		//autor
		if (isset($_POST['autor']) && $_POST['autor'] != '') {
			$autor = limpiarCadena($_POST['autor']);
		}else{
			$errores['autor'] = "El autor de la publicacion debe ser mayor a 3 caracteres.";
		}
	  //DESCRIPCION
	  if (isset($_POST['descripcion']) && $_POST['descripcion'] != '') {
	    $descripcion = limpiarCadena($_POST['descripcion']);
	  }else{
	    $errores['descripcion'] = "La descripción debe de contener más de 10 caracteres.";
	  }
	  
	  //IMAGEN
	  if (isset($_FILES['imagen']['name']) && $_FILES['imagen']['name'] != '') {
	    $imagen = limpiarCadena($_FILES['imagen']['name']);
			$nombreUsuario = UsuarioManager::getById($id_usuario);
	    $rutaImagen = guardarImagen($nombreUsuario['NOMBRE'].'/recetas',$nombre,$_FILES['imagen']['name']);
	  }else{
	    $errores['imagen'] = "imagen no valida";
	  }
		//categoría
		if (isset($_POST['categoria']) && $_POST['categoria'] != '') {
			$categoria = limpiarCadena($_POST['categoria']);
		}else{
			$errores['categoria'] = "El categoría de la publicacion debe ser mayor a 3 caracteres.";
		}
	  if (count($errores) == 0) {
	      PublicacionManager::insert($titulo,$autor,$rutaImagen,$descripcion,$categoria);
				$titulo = "";
				$descripcion = "";
				$autor = "";
				$imagen = "";
				$categoria = "";
				$errores = [];
				$rutaImagen="";
	      header("Location:principal.php");
	      die();
	  }
	}

?>

<div class="mx-auto m-3 bg-white text-center rounded">
  <form action="subirPublicacion.php" method="post" enctype="multipart/form-data">
    <h1>Subir publicación</h1>
    <label class="titulo w-100 mt-1 mb-1">Nombre de la publicación:</label> <br>
    <input type="text" name="titulo" value="<?=$titulo?>"> <br>
    <?php if( isset($errores['titulo'])) { ?>
      <br><span class='error'><?=$errores['titulo']?></span><br>
    <?php } ?>

    <label class="titulo w-100 mt-1 mb-1">Nombre del autor:</label> <br>
    <input type="text" name="autor" value="<?=$autor?>"> <br>
    <?php if( isset($errores['autor'])) { ?>
      <br><span class='error'><?=$errores['autor']?></span><br>
    <?php } ?>

    <label class="titulo w-100 mt-1 mb-1">Descripción de la publicación:</label> <br>
    <input type="textarea" name="descripcion" value="<?=$descripcion?>"> <br>
    <?php if( isset($errores['descripcion'])) { ?>
      <br><span class='error'><?=$errores['descripcion']?></span><br>
    <?php } ?>

    <label class="titulo w-100 mt-1 mb-1">Subir imagen de publicación:</label> <br>
    <input type="file" name="imagen" value="Seleccione archivo"> <br>
    <?php if( isset($errores['imagen'])) { ?>
      <br><span class='error'><?=$errores['imagen']?></span><br>
    <?php } ?>

	<label class="titulo w-100 mt-1 mb-1">Nombre de la categoría:</label> <br>
    <input type="text" name="categoria" value="<?=$categoria?>"> <br>
    <?php if( isset($errores['categoria'])) { ?>
      <br><span class='error'><?=$errores['categoria']?></span><br>
    <?php } ?>
    <input type="submit" name="enviar" value="Subir Publicacion" class="btn btn-dark text-white m-2 rounded">
  </form>
</div>
