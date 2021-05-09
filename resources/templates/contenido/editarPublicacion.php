<?php

	if ($_SESSION["ID"] != null) {
		$idPubli = clear_input($_GET['id_publi']);
	}else{
		header('Location: principal.php');
     	die();
	}
	$publicacion = PublicacionManager::getById($idPubli);
	$nombreUsuario = UsuarioManager::getById($_SESSION['ID']);
	require("$ROOT/src/validar_formulario.php");
	areaPrivada();
	$titulo = $publicacion["TITULO"];
	$descripcion = $publicacion["DESCRIPCION"];
	$autor = $publicacion["AUTOR"];
	$imagen = $publicacion["IMAGEN"];
	$errores = [];
	$categoria = $publicacion["CATEGORIA"];
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
	  if (isset($_FILES['imagen']) && $_FILES['imagen'] != '') {
	    $imagen = limpiarCadena($_FILES['imagen']['name']);
		$nombreUsuario = UsuarioManager::getById($_SESSION['ID']);
	   $rutaImagen = guardarImagen('publicacion/',$idPubli,$_FILES['imagen']['name']);
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
	      PublicacionManager::update($idPubli,$titulo,$autor,$rutaImagen,$descripcion,$categoria);
	  
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

 
  
<div class="subirReceta">
  	<form action="editarPublicacion.php?id_publi=<?=$idPubli?>" method="post" enctype="multipart/form-data">
    <h1>Actualizar publicación</h1>
    <label>Nombre de la publicación:</label> <br>
    <input type="text" name="titulo" value="<?=$titulo?>"> <br>
    <?php if( isset($errores['titulo'])) { ?>
      <br><span class='error'><?=$errores['titulo']?></span><br>
    <?php } ?>

    <label>Nombre del autor:</label> <br>
    <input type="text" name="autor" value="<?=$autor?>"> <br>
    <?php if( isset($errores['autor'])) { ?>
      <br><span class='error'><?=$errores['autor']?></span><br>
    <?php } ?>

    <label>Descripción de la publicación:</label> <br>
    <input type="textarea" name="descripcion" value="<?=$descripcion?>"> <br>
    <?php if( isset($errores['descripcion'])) { ?>
      <br><span class='error'><?=$errores['descripcion']?></span><br>
    <?php } ?>

    <label>Subir imagen de publicación:</label> <br>
    <input type="file" name="imagen" value="Seleccione archivo"> <br>
    <?php if( isset($errores['imagen'])) { ?>
      <br><span class='error'><?=$errores['imagen']?></span><br>
    <?php } ?>

	<label>Nombre de la categoría:</label> <br>
    <input type="text" name="categoria" value="<?=$categoria?>"> <br>
    <?php if( isset($errores['categoria'])) { ?>
      <br><span class='error'><?=$errores['categoria']?></span><br>
    <?php } ?>
    <input type="submit" name="enviar" value="Actualizar" class="boton1">
  </form>
</div>

  