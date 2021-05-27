<?php
  require("src/validar_formulario.php");
  $busqueda = "";
  $cadbusca = [];
  $clase = ""; 
  $errores=[];
  if(isset($_POST) && count($_POST)>0){
    //select
    if($_POST['busqueda']){
        $busqueda = limpiarCadena($_POST['busqueda']);
    }else{
        $errores['error_busqueda'] = "Debes introducir texto.";
    }
  }
  //Si la cadena de busqueda y el select son distintas de cadena vácia se meté
  if ($busqueda != ''){
    $cadbusca[0] = PublicacionManager::getAutorSolo($busqueda);
    if($cadbusca[0] != null){
      $cadbusca[1] = PublicacionManager::getTituloSolo($busqueda);
      if ($cadbusca[1] != null ) {
        $cadbusca[2] = PublicacionManager::getCategoriaSolo($busqueda);
      }else{
        $cadbusca[1] = PublicacionManager::getCategoriaSolo($busqueda);
      }
    }else{
      $cadbusca[0] = PublicacionManager::getTituloSolo($busqueda);
      if ($cadbusca[0] != null ) {
        $cadbusca[1] = PublicacionManager::getCategoriaSolo($busqueda);
      }else{
        $cadbusca[0] = PublicacionManager::getCategoriaSolo($busqueda);
      }
    }
  //En caso contrario te redirige a el error
  }else{
    header("Location:page404.php");
    die();
  }
?>
<h1 class="titulo"> Resultados de búsqueda </h1>
<div id="publicacionesPadre">
  <div id="publicaciones"class="publicaciones bg-dark">
    <?php foreach ($cadbusca  as $fila) { ?>
      <?php foreach ($fila  as $filaArray) { ?>
        <div id="publicaciones" class="publicaciones publicacion  border border-light mb-4 mt-4 sombra" data-id="<?=$filaArray['ID_PUBLI']?>">
          <a href="publicacion.php?id=<?= $filaArray['ID_PUBLI']?>">
            <figure><img src="<?= $filaArray['IMAGEN']?>" alt=""></figure>
            <hr>
            <h2 class="negrita text-light"><?= $filaArray['TITULO']?></h2>
          </a>
        </div>
      <?php } ?>
    <?php } ?>
  </div>
</div> 