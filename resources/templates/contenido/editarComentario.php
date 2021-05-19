<?php

	if ($_SESSION["ID"] != null) {
		$idCom = clear_input($_GET['idCom']);
	}else{
		header('Location: principal.php');
     	die();
	}
	$comentario = ComentarioManager::getById($idCom);
	if (count($comentario)== 0) {
		header('Location: page404.php');
     	die();
	}
	if (isset($_POST) && count($_POST)>0) {
		$comCambiado = clear_input($_POST['comCambiado']);
		ComentarioManager::update($idCom,$comCambiado,date("Y-m-d H:i:s"));
		header('Location: publicacion.php?id='.$comentario['ID_COMENTARIO_PUBLI']);
     	die();
	}
?>
<div class="w-100 d-flex justify-content-center">
	<div class="bg-white rounded text-center">
		<h1 class="titulo">Actualiza tu comentario</h1>
		 <form action="editarComentario.php?idCom=<?=$idCom?>" method="post">
		  <textarea name="comCambiado" id="comCambiado" rows="10" cols="30" class="mt-3"><?=$comentario['CONTENIDO']?></textarea><br>
		  <button class="btn btn-dark mt-3 mb-3 rounded">Actualizar</button>
		</form>
	</div>
</div>