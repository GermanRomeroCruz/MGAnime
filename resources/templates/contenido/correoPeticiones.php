<?php
  //REQUIRES
  require 'vendor/autoload.php';
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  use PHPMailer\PHPMailer\SMTP;
  require 'vendor/phpmailer/phpmailer/src/Exception.php';
  require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
  require 'vendor/phpmailer/phpmailer/src/SMTP.php';

  $datosEmail['server']=$config['mail_server'];
  $datosEmail['correo']=$config['mail_correo'];
  $datosEmail['pass']=$config['mail_password'];
  $errores = [];
  $correoDestinatario = 'mganimetfg@gmail.com';
  $correoSugerencia = "";
  $respuesta;
  $oculto = [];

  if ( count($_POST) > 0) {
    if ( isset($_POST['email']) && $_POST['email'] != null) {
      $correoSugerencia = clear_input($_POST['email']);
    }else{
      $errores['email'] = 'Introduce un correo';
    }
    if ( isset($_POST['sugerencia']) && $_POST['sugerencia'] != null) {
      $sugerencia = clear_input($_POST['sugerencia']);
    }else{
      $errores['sugerencia'] = 'Introduce una sugerencia';
    }
    if ( $errores == null ) {

      //Inicializar
      $mail = new PHPMailer();
      $mail->IsSMTP();
      $mail->Mailer = "smtp";
      $mail->SMTPOptions = array(
                              'ssl' => array(
                              'verify_peer' => false,
                              'verify_peer_name' => false,
                              'allow_self_signed' => true
                              )
                            );
      $mail->SMTPDebug  = 0;
      $mail->SMTPAuth   = TRUE;
      $mail->SMTPSecure = "tls";
      $mail->Port       = 587;                        //puerto
      $mail->Host       = $datosEmail['server'];           //servidor
      $mail->Username   = $datosEmail['correo'];      //tu correo
      $mail->Password   = $datosEmail['pass'];              //contraseña

      $http = 'http://localhost:9000/';
      $mail->IsHTML(true);
      $mail->AddAddress($correoDestinatario);    //destinatario
      $mail->SetFrom($datosEmail['correo'], "MGAnime");                    // quien envia el correo
      //$mail->AddReplyTo("reply-to-email@domain", "reply-to-name");          para añadir otro destinatario
      //$mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");       con copia oculta

      $mail->Subject = "MGAnime - Sugerencia";                               //cabecera
      $content =
        "<h1>MGAnime</1>".
        "<h3>La sugerencia es de: </h3> <h4>".$correoSugerencia."</h4>" .
        "<h3>La sugerencia es: </h3> <p>".
        $sugerencia.
        "</p>".
        "<p>Saludos</p>"
      ;
      //ENVIAR EMAIL
    $mail->MsgHTML($content);
    if(!$mail->Send()) {
      $respuesta = 'Error al enviar correo con su sugerencia. Vuelva a intentarlo por favor';

    } else {
      $respuesta = 'Hemos enviado un correo con su solicitud, muchas gracias.';
    }
  }
  }

  ?>
<div class="w-100 d-flex justify-content-center">
  <div class="bg-light rounded">
    <?php if( isset($respuesta) && $respuesta != null) { ?>
      <h4><?=$respuesta?></h4>
    <?php }else{ ?>
      <form action="correoPeticiones.php" method="post">
        <label class="titulo w-100 " for="email">Introduce tu correo</label>
        <br>
        <input type="email" name="email" id='email' class="w-100 mt-1 mb-1">
        <br>
        <?php if( isset($errores['email']) ) { ?>
          <span class="error m-1"><?=$errores['email']?></span>
          <br>
        <?php } ?>
        <label class="titulo w-100">Introduce tu sugerencia</label>
        <textarea name="sugerencia" rows="10" cols="40" placeholder="Introduce tu sugerencia" class="w-100 mt-1 mb-1"></textarea>
        <br>
        <?php if( isset($errores['email']) ) { ?>
          <span class="error m-1"><?=$errores['sugerencia']?></span>
          <br>
        <?php } ?>
        <div class="d-flex justify-content-center">
          <input class="btn btn-dark m-2 " type="submit" name="enviar" value="Enviar">
        </div>
      </form>
    <?php } ?>
  </div>
</div>