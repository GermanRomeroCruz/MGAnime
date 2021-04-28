<?php

	if ($_SESSION["ID"] != null) {
		$idCom = clear_input($_GET['idCom']);
	}else{
		header('Location: principal.php');
     	die();
	}
	$comentario = ComentarioManager::getById($idCom);

	if (isset($_POST) && count($_POST)>0) {
		$comCambiado = clear_input($_POST['comCambiado']);
		ComentarioManager::update($idCom,$comCambiado,date("Y-m-d H:i:s"));
		header('Location: publicacion.php?id=$comentario[ID_COMENTARIO_PUBLI]');
     	die();
	}
?>

 <form action="editarComentario.php?idCom=<?=$idCom?>" method="post">
  <textarea name="comCambiado" id="comCambiado" rows="10" cols="30" ><?=$comentario['CONTENIDO']?></textarea><br>
  <button>Actualizar</button>
</form>