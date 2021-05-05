
<?php

$datosPublicacion = PublicacionManager::verMasPublicacion(0); 

$lista = [];
$cuentaTotal = PublicacionFavoritaManager::contarLikes();
foreach ($cuentaTotal as $ID_PUBLICACION_FAVORITA => $id ) {
    array_push($lista, PublicacionManager::getById($id['ID_PUBLICACION_FAV']));
}  

?>



<form method="post" action="resultadosBusqueda.php" class="buscador">

  <select class="" name="selectBuscador">
    <option disabled selected value="">Elige una opción</option>
    <option value="nombre_autor">Nombre de Autor</option>
    <option value="nombre_publicacion">Nombre de Publicacion</option>
  </select>
  <p><input type="text" name="busqueda" placeholder="¿Qué quieres buscar?"> </p>
  <input type="submit" name="buscar" value="Buscar">
</form>


<div id="rutinas"class="rutinas">
    <?php foreach ($lista   as $fila) { ?>
      <div id="rutina" class="rutina" data-id="<?=$fila['ID_PUBLI']?> ">
      <a href="publicacion.php?id=<?= $fila['ID_PUBLI']?>">
      <h2><?= $fila['TITULO']?></h2>
      <p class="negrita">Autor:</p>
      <p><?= $fila['AUTOR']?></p>
      <p class="negrita"> Descripcion</p>
      <p><?= $fila['DESCRIPCION']?></p>
      </a>
      </div>
    <?php } ?>
  </div>


<!-- Publicacion-->
<div id="rutinasPadre">
  <h1 class="titulo"> Publicaciones </h1>
  <div id="rutinas"class="rutinas">
    <?php foreach ($datosPublicacion   as $fila) { ?>

      <div id="rutina" class="rutina" data-id="<?=$fila['ID_PUBLI']?> ">
      <a href="publicacion.php?id=<?= $fila['ID_PUBLI']?>">
      <h2><?= $fila['TITULO']?></h2>
      <p class="negrita">Autor:</p>
      <p><?= $fila['AUTOR']?></p>
      <p class="negrita"> Descripcion</p>
      <p><?= $fila['DESCRIPCION']?></p>
      </a>
      </div>
    <?php } ?>
  </div>
  <button type="button" id="vermasPublicacion">ver más...</button>
</div>


<script type="text/javascript">

  let rutinas = document.getElementsByClassName('rutina');
  let contenedorRutinas = document.getElementById('rutinasPadre');

  $('#vermasPublicacion').click(function(){

    let ultima = rutinas.length-1;
    let publicacionUltima = document.getElementsByClassName('rutina')[ultima].getAttribute('data-id');
    let url='respuestaVerMasPublicacion.php?idPublicacion='+publicacionUltima;
    $.ajax(
    {
      url : 'respuestaVerMasPublicacion.php',
      type: "GET",
      data : {idPublicacion: publicacionUltima},

    })
      .done(function(data) {

        let respuesta = JSON.parse(data);

        pintarMasPublicacion(respuesta);

      })
      .fail(function(data) {
        alert( "error" );
      });
  });

  function pintarMasPublicacion(datosJSON){

    let divPublicacion = document.getElementById('rutinas');
    let btn = document.getElementById('vermasRutinas');

    for (let i = 0; i < datosJSON.length; i++) {
      divPublicacion.appendChild(crearPublicacion(datosJSON[i]));
    }
  }

  function crearPublicacion(publicacionJSON){

    let divRutina = crearElemento('div',{id:'rutina',class:'rutina','data-id':publicacionJSON.ID_PUBLI},null);
    let h2 = crearElemento('h2',null,null);
    let a = crearElemento('a',{href:'publicacion.php?id='+ publicacionJSON.ID_PUBLI},publicacionJSON.TITULO);
    let pTituloAutor = crearElemento('p',{'class':'negrita'},'Autor: ');
    let pTituloDescripcion = crearElemento('p',{'class':'negrita'},'Descripcion: ');
    let pAutor = crearElemento('p',null,publicacionJSON.AUTOR);
    let pDescripcion = crearElemento('p',null,publicacionJSON.DESCRIPCION);

    h2.appendChild(a);
    divRutina.appendChild(h2);
    divRutina.appendChild(pTituloAutor);
    divRutina.appendChild(pAutor);
    divRutina.appendChild(pTituloDescripcion);
    divRutina.appendChild(pDescripcion);

    return divRutina;
  }

  /*funcion auxiliar que nos crea los elementos necesarios en el html*/
  function crearElemento(tipo,atributos,contenido){
    const elemento = document.createElement(tipo);
    for(let atr in atributos){
      elemento.setAttribute(atr,atributos[atr]);
    }

    if(typeof contenido === 'string'){
      elemento.appendChild(document.createTextNode(contenido));
    } else if (contenido instanceof HTMLElement){
      elemento.appendChild(elemento);
    } else if (Array.isArray(contenido)){
      contenido.forEach(hijo => elemento.appendChild(hijo));
    }
    return elemento;
  }

</script>
