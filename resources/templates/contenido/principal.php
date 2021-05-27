<?php
  $datosPublicacion = PublicacionManager::verMasPublicacion(0);
  $lista = [];
  $cuentaTotal = PublicacionFavoritaManager::contarLikes();
  foreach ($cuentaTotal as $ID_PUBLICACION_FAVORITA => $id ) {
      array_push($lista, PublicacionManager::getById($id['ID_PUBLICACION_FAV']));
  }
?>
<div id="texto">
  <?php if($mensaje == true){?> 
    <div >
      <a href="perfil.php" class="badge badge-dark text-decoration-none"><img src="<?=$usuario['IMAGEN']?>" alt="" style="width: 10em"></p>
      <h3>Bienvenido/a <?= $usuario['NOMBRE']?></h3></a>
    </div>
  <?php }?>
</div>
<!-- Top 5 Publicaciones Con Mas Likes -->
<h1 class="titulo"> Top 5 </h1>
<div class="display5 ">
  <?php foreach ($lista   as $fila) { ?>
    <div class="publicaciones publicaciones5 p-3  border border-light mb-4 mt-4" data-id="<?=$fila['ID_PUBLI']?>" >
      <a href="publicacion.php?id=<?= $fila['ID_PUBLI']?>">
        <figure><img src="<?= $fila['IMAGEN']?>" alt=""></figure>
        <hr>
        <h2><?= $fila['TITULO']?></h2>
      </a>
    </div>
  <?php } ?>
</div>
<!-- Publicacion-->
<div id="publicacionesPadre">
  <h1 class="titulo"> Publicaciones </h1>
  <div id="publicaciones"class="publicaciones bg-dark">
    <?php foreach ($datosPublicacion   as $fila) { ?>
      <div id="publicaciones" class="publicaciones publicacion  border border-light mb-4 mt-4 sombra" data-id="<?=$fila['ID_PUBLI']?> ">
        <a href="publicacion.php?id=<?= $fila['ID_PUBLI']?>">
          <figure><img src="<?= $fila['IMAGEN']?>" alt=""></figure>
          <hr>
          <h2 class="negrita text-light"><?= $fila['TITULO']?></h2>
        </a>
      </div>
    <?php } ?>
  </div>
  <button type="button" id="vermasPublicacion">ver más...</button>
</div>
<script type="text/javascript">
  let publicaciones = document.getElementsByClassName('publicaciones');
  let contenedorPublicaciones = document.getElementById('publicacionesPadre');
  $('#vermasPublicacion').click(function(){
    let ultima = publicaciones.length-1;
    let publicacionUltima = document.getElementsByClassName('publicaciones')[ultima].getAttribute('data-id');
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
    let divPublicacion = document.getElementById('publicaciones');
    let btn = document.getElementById('vermasPublicaciones');
    for (let i = 0; i < datosJSON.length; i++) {
      divPublicacion.appendChild(crearPublicacion(datosJSON[i]));
    }
  }
  function crearPublicacion(publicacionJSON){
    let divPublicaciones = crearElemento('div',{id:'publicaciones',class:'publicaciones publicacion border border-light mb-4 mt-4 sombra','data-id':publicacionJSON.ID_PUBLI},null);  
    let a = crearElemento('a',{href:'publicacion.php?id='+ publicacionJSON.ID_PUBLI},null);
    let figure = crearElemento('figure',null,null);
    let img = crearElemento('img',{src:publicacionJSON.IMAGEN},null);
    let hr = crearElemento('hr',null,null);
    let h2 = crearElemento('h2',{'class':'negrita text-light'},publicacionJSON.TITULO);
    figure.appendChild(img);
    a.appendChild(figure);
    a.appendChild(hr);
    a.appendChild(h2);
    divPublicaciones.appendChild(a);
    return divPublicaciones;
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
