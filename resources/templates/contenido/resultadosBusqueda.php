<?php

  require("src/validar_formulario.php");

  $busqueda = "";
  $selectBuscador = "";
  $select = "";
  $cadbusca ="";
  $clase = "";
  $errores=[];

  if(isset($_POST) && count($_POST)>0){

    //BUSQUEDA
    if($_POST['selectBuscador']){
        $selectBuscador = limpiarCadena($_POST['selectBuscador']);
    }else{
        $errores['error_buscador'] = "Debes seleccionar una opción.";
    }
    //select
    if($_POST['busqueda']){
        $busqueda = limpiarCadena($_POST['busqueda']);
    }else{
        $errores['error_busqueda'] = "Debes introducir texto.";
    }
  }

  //Si la cadena de busqueda y el select son distintas de cadena vácia se meté
  if ($busqueda != '' && $selectBuscador != ''){

    if($selectBuscador == 'nombre_autor'){
      $cadbusca = PublicacionManager::getAutorSolo($busqueda);
      $clase = "autor";
    }
    if($selectBuscador == 'nombre_publicacion'){
      $cadbusca = PublicacionManager::getTituloSolo($busqueda);
      $clase = "publicacion";
    }
  //En caso contrario te redirige a el error
  }else{
    header("Location:page404.php");
    die();
  }

?>

<?php if($clase == "publicacion") {?>
<h1>publicacion:</h1>
<div id="publicacion"class="rutinas">
  <?php foreach ($cadbusca  as $fila) { ?>
    <div id="publicacion" class="rutina" data-id="<?=$fila['ID_PUBLI']?> ">
    <h2><a href="publicacion.php?id=<?= $fila['ID_PUBLI']?>"><?= $fila['TITULO']?></a></h2>
    <p class="negrita">Autor:</p>
    <p><span class="negrita">Autor:</span> <?= $fila['AUTOR']?></p>
    <p class="negrita">Descripcion:</p>
    <p> <br><?= $fila['DESCRIPCION']?></p>
    </div>
  <?php } ?>
</div>
<?php } ?>

<?php if($clase == "autor") {?>
<h1>Recetas:</h1>
<div id="autor" class="recetas">
  <?php foreach ($cadbusca as $fila) { ?>
    <div id="autor" class="receta" data-id="<?=$fila['ID_PUBLI']?> ">
    <h2><a href="receta.php?id=<?= $fila['ID_PUBLI']?>"><?= $fila['AUTOR']?></a></h2>
    <figure><img src="<?=$fila['IMAGEN'] ?>"></figure>
    <h2><a href="publicacion.php?id=<?= $fila['ID_PUBLI']?>"><?= $fila['TITULO']?></a></h2>
    <p class="negrita">Descripcion:</p>
    <p> <br><?= $fila['DESCRIPCION']?></p>
    </div>
  <?php } ?>
</div>
<?php } ?>
