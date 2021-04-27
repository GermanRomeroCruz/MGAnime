<?php
	require("src/validar_formulario.php");
	//Seleccionamos el $id
	$idPublicacion = limpiarCadena(intval($_GET['idPublicacion']));
	//Hacemos el json de ver más y lo pegamos en el html
	$datosPublicacion =json_encode( PublicacionManager::verMasPublicacion(intval($idPublicacion)));
	print_r($datosPublicacion);
?>