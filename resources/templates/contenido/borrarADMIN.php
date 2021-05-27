<?php

//Página que se usa para borrar datos desde la página admin
$id = "";
if(isset($_GET['id_usuario'])){
	$id = $_GET['id_usuario'];
  	UsuarioManager::delete($id);
	if ($_SESSION['ID']==$_GET['id_usuario']) {
		session_destroy();
		if ($_COOKIE['recuerdame'] != null) {
			unset($_COOKIE['recuerdame']);
       		setcookie($_COOKIE["recuerdame"],"",time ()-13600,'/');
    	}
	}
}

if(isset($_GET['id_publi'])){
  $id = $_GET['id_publi'];
  PublicacionManager::delete($id);

  borrarImagenes($id);
}

header("Location:admin.php");
die();

?>
