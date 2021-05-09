<?php

//Página que se usa para borrar datos desde la página admin
$id = "";
if(isset($_GET['id_usuario'])){
  $id = $_GET['id_usuario'];
  UsuarioManager::delete($id);
}

if(isset($_GET['id_publi'])){
  $id = $_GET['id_publi'];
  PublicacionManager::delete($id);

  borrarImagenes($id);
}


header("Location:admin.php");
die();

?>
