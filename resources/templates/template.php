<?php
/*
Template base del proyecto para no repetir código
Son necesarias las variables
  $titulo
  $ruta_contenido
*/

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$titulo?></title>
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="css/cssGeneral.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="JS/scroll.js"></script>
  </head>
  <body class="bg-dark">
      <?php
          require("$ROOT/resources/templates/autentificacion.php");
          require("$ROOT/resources/templates/navegacion.php");
      ?>
      <div class="grow">
        <?php
          if (!file_exists($main = "$ROOT/resources/templates/contenido$ruta_contenido")) {
            require("$ROOT/resources/templates/contenido/page404.php");
          }else{
            require("$ROOT/resources/templates/contenido$ruta_contenido");
          }
        ?>
      </div>
    
   <?php
      require("$ROOT/resources/templates/pie.php");
    ?>
    <button class='scroll botonSubir'>
            <svg class="icon" viewBox="0 0 16 16">
                <title>Flecha</title>
                <g stroke-width="1" stroke="currentColor">
                    <polyline fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="15.5,11.5 8,4 0.5,11.5 ">
                    </polyline>
                </g>
            </svg>
    </button>

  </body>
</html>
