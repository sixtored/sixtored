<?php require("include/session.php"); ?>
<!DOCTYPE html>
<html lang="es">
<title>Software para empresas de Tv cable e internet Multi servicios</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="programa de gestion de abonados servicios de tarifa plana, facturacion de servicios, gestion de abonados, video cables, codigos de barras, cobros de abonos, faturacion electronica, empresas de internet">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
</style>
<body>

  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v6.0"></script>

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-large w3-light-grey">
    <div class="w3-col s3">
      <a href="#" class="w3-button w3-block">Inicio</a>
    </div>
    <div class="w3-col s3">
      <a href="#plans" class="w3-button w3-block">Productos</a>
    </div>
    <div class="w3-col s3">
      <a href="#about" class="w3-button w3-block">Acerca de</a>
    </div>
    <div class="w3-col s3">
      <a href="#contacto" class="w3-button w3-block">Contacto</a>
    </div>
  </div>
</div>

<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

  <div class="w3-panel">
    <h1><b>SixtoRed desarrollos de software y sitios web</b></h1>
  </div>

  <!-- Slideshow -->
  <div class="w3-container">
    <div class="w3-display-container mySlides">
      <img src="images/01.jpg" style="width:100%">
      <div class="w3-display-topleft w3-container w3-padding-32">
        <!-- <span class="w3-black-text w3-padding w3-animate-bottom">Soluciones personalizadas</span> -->
      </div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="images/02.jpg" style="width:100%">
      <div class="w3-display-right w3-container w3-padding-32">
       <!-- <span class="w3-blue-text w3-padding w3-animate-bottom">Integracion de funcionalidad</span> -->
      </div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="images/03.jpg" style="width:100%">
      <div class="w3-display-topright w3-container w3-padding-32">
       <!-- <span class="w3-black-text w3-padding w3-animate-bottom">Mantenimiento y soporte técnico continuo</span> -->
      </div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="images/04.jpg" style="width:100%">
      <div class="w3-display-topright w3-container w3-padding-32">
       <!-- <span class="w3-grey-text w3-padding w3-animate-bottom">Innovación y tecnología</span> -->
      </div>
    </div>
     <div class="w3-display-container mySlides">
      <img src="images/05.jpg" style="width:100%">
      <div class="w3-display-topright w3-container w3-padding-32">
       <!-- <span class="w3-grey-text w3-padding w3-animate-bottom">Innovación y tecnología</span> -->
      </div>
    </div>

<!-- Slideshow next/previous buttons  
    <div class="w3-display-container">  
      <button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
      <button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>
    </div>
    -->

  </div>

    <!--
    <div class="w3-container w3-dark-grey w3-padding w3-xlarge">
    
      <div class="w3-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left w3-hover-text-teal"></i></div>
      <div class="w3-right" onclick="plusDivs(1)"><i class="fa fa-arrow-circle-right w3-hover-text-teal"></i></div>
    
      <div class="w3-center">
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
      </div>
    -->
   
  <!-- Grid -->
  <div class="w3-row w3-container" id="plans">
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Nuestro compromiso</span>
    </div>


    <div class="w3-col l3 m6 w3-light-grey w3-container w3-padding-16">
      <h3>Solución personalizada</h3>
      <p>Desarrollaremos la solución que necesite</p>
    </div>

    <div class="w3-col l3 m6 w3-grey w3-container w3-padding-16">
      <h3>Integración de funcionalidad</h3>
      <p>Se pueden integrar fácilmente características personalizadas</p>


      
    </div>

    <div class="w3-col l3 m6 w3-dark-grey w3-container w3-padding-16">
      <h3>Soporte técnico y mantenimiento</h3>
      <p>Asistencia técnica continua y permanete desarrollo</p>
    </div>
  
    <div class="w3-col l3 m6 w3-dark-grey w3-container w3-padding-16">
   
    <div class="fb-page" data-href="https://www.facebook.com/sixtoredsoftware/" data-tabs="timeline" data-width="" data-height="170" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/sixtoredsoftware/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/sixtoredsoftware/">Sixtored</a></blockquote></div> 
      <!-- 
    <h3>Tenga su radio online</h3>
    <p>La activamos en 24 hs.</p>
    <audio controls autoplay>
        <source src="https://freeus3.listen2myradio.com/live.mp3?typeportmount=s1_5013_stream_938012301" type="audio/ogg">
        <source src="https://freeus3.listen2myradio.com/live.mp3?typeportmount=s1_5013_stream_938012301" type="audio/mpeg">
        Su Web Browser no soporta...
    </audio>
  </div>
   -->


  </div>

  <!-- Grid -->
  <div class="w3-row-padding">
    <div class="w3-center w3-padding-64">
      <h3>Soluciones eficientes</h3>
      <p>contacto permanente con sus clientes</p>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Software de gestion de abonados</li>
        <li class="w3-padding-16"><b>Padron de abonados</b></li>
        <li class="w3-padding-16"><b>Multiples servicios</b></li>
        <li class="w3-padding-16"><b>Facturacion electronica</b></li>
        <li class="w3-padding-16"><b>Estados de cuentas</b></li>
        <li class="w3-padding-16"><b>Consulta de estado de abonados</b></li>
        <li class="w3-padding-16"><b>Envio de alertas</b></li>
        <li class="w3-padding-16"><b>Caja del dia</b></li>
        <li class="w3-padding-16"><b>Emision de ordenes de trabajo</b></li>
        <li class="w3-light-grey w3-padding-24">
          <!--<button class="w3-button w3-green w3-padding-large">Contactanos</button> -->
          <a href="#contacto" class="w3-button w3-green w3-padding-large">Contactanos</a>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-dark-grey w3-xlarge w3-padding-32">Soluciones y desarrollos web personalizados</li>
        <li class="w3-padding-16"><b>Integracion con aplicaciones web</b></li>
        <li class="w3-padding-16"><b>Representa una presencia web moderna</b></li>
        <li class="w3-padding-16"><b>Incrementar numero de visitantes</b></li>
        <li class="w3-padding-16"><b>Carrito de compras</b></li>
        <li class="w3-padding-16"><b>Reserva de turnos</b></li>
        <li class="w3-padding-16"><b>Gestion de pedidos</b></li>
        <li class="w3-padding-16"><b>Sitios web responsive</b></li>
         <li class="w3-padding-16"><b>Contacto para clientes actuales y potenciales</b></li>
        <li class="w3-light-grey w3-padding-24">
          <!--<button class="w3-button w3-green w3-padding-large">Contactanos</button> -->
           <a href="#contacto" class="w3-button w3-green w3-padding-large">Contactanos</a>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-dark-grey w3-xlarge w3-padding-32">Re diseño web y Re posicionamiento web</li>
        <li class="w3-padding-16"><b>Ofrecer informacion relevante</b></li>
        <li class="w3-padding-16"><b>Atraer nuevos clientes</b></li>
        <li class="w3-padding-16"><b>Personalizar páginas especificas</b></li>
        <li class="w3-padding-16"><b>Hosting</b></li>
        <li class="w3-padding-16"><b>Elementos gráficos</b></li>
        <li class="w3-padding-16"><b>Gestor de contenidos</b></li>
        <li class="w3-padding-16"><b>Formularios de contacto</b></li>
         <li class="w3-padding-16"><b>Optimización</b></li>
        <li class="w3-light-grey w3-padding-24">
          <!--<button class="w3-button w3-green w3-padding-large">Contactanos</button>-->
           <a href="#contacto" class="w3-button w3-green w3-padding-large">Contactanos</a>
        </li>
      </ul>
    </div>

    
  </div>

  <!-- Grid -->
  <div class="w3-row-padding" id="about">
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Quienes somos</span>
    </div>

    <div class="w3-col l6 m6 s6 w3-margin-bottom">
      <div class="w3-card-4">
        <img src="images/sixto.jpg" alt="Sixto" style="width:100%">
        <div class="w3-container">
          <h3>Sixto</h3>
          <p class="w3-opacity">GERENTE DE DESARROLLOS</p>
          <p>Mas de 10 años de experiencia en el desarrollo del software de diferentes propósitos. Investigacion y desarrollos en software de gestion</p>
          <p> <a href="#contacto" class="w3-button w3-light-grey w3-block">Contacto</a></p>
            <!--<button class="w3-button w3-light-grey w3-block">Contacto</button>-->
        </div>
      </div>
    </div>

    <div class="w3-col l6 m6 s6 w3-margin-bottom">
      <div class="w3-card-4">
        <img src="images/julieta.jpg" alt="Mike" style="width:100%">
        <div class="w3-container">
          <h3>Julieta</h3>
          <p class="w3-opacity">GERENTE DE DISEÑOS</p>
          <p>Capacitación y gran experiencia en desarrollos, diseños graficos, publicidad, logos, experiencia en social media y comunity manager </p>
          <p><a href="#contacto" class="w3-button w3-light-grey w3-block">Contacto</a></p>
            <!--<button class="w3-button w3-light-grey w3-block">Contacto</button>-->
        </div>
      </div>
    </div>

    
  </div>

  <!-- Contact -->


  <div class="w3-center w3-padding-64" id="contacto">
    <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Contacto</span>
  </div>

<?php
// define variables and set to empty values


$nombreErr = $emailErr = $asuntoErr = $mensajeErr = "";
$nombre = $email = $mensaje = $asunto = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_SESSION['captcha'])) {
        $captcha  = $_POST['captcha'] ;
        $control  = $_SESSION['captcha'] ;

       // die ("Error captcha ". $captcha . ' ** ' . $control ); 
        if ($control <> $captcha){
            //session_destroy() ;
            header("Location: index.php") ;
          return false ;
        }

     } else {
      // die ("Error captcha ". $captcha . ' ** ' . $control ); 
      return false ;
     }   



  if (empty($_POST["nombre"])) {
    $nombreErr = "Se requiere nombre";
  } else {
    $nombre = test_input($_POST["nombre"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$nombre)) {
      $nombreErr = "Solo debe contener Letras y espacios";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Se requiere email";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "El formato del Email es invalido";
    }
  }
  
  /*  
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }
  */

  if (empty($_POST["mensaje"])) {
    $mensaje = "";
  } else {
    $mensaje = test_input($_POST["mensaje"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php 
$lnRet = 10 ;
if (isset($_POST["submit"]))
  {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mens = $_POST['mensaje'] ;
    $mensaje = 'Nombre: '.$nombre.'<p>'.'Email: '.$email.'<p>'.'Motivo: '.$asunto.'<p>'.$_POST['mensaje'].'<p>'.'<p>'.'Gracias por su consutla le responderemos a la brevedad';

    $destino = "sixtod@gmail.com";
    $asunto = "CONSULTA DESDE SIXTORED ".$asunto; 

    $cuerpo = '<html> <head> <title>Contacto desde SixtoRed</title> </head> <body> <h1>Consulta desde SixtoRed</h1> <p>  
<strong>Su Mensaje</strong></br></br></p><p> '.$mensaje.' </p> </body> </html> '; //para el envío en formato HTML 

    $headers = "MIME-Version: 1.0"."\r\n"; 
    $headers .= "Content-type: text/html; charset=iso-8859-1"."\r\n";
       //dirección del remitente 
    $headers .= "From: SixtoRed <info@sixtored.com.ar>"."\r\n"; 
      //dirección de respuesta, si queremos que sea distinta que la del remitente 
    $headers .= "Reply-To: ".$email ."\r\n";  
    //$headers .= "Cc: ".$email."\r\n"; //Copia a la persona que consulta.. 
    
    # Se intenta guardar el mensaje y se espera retorno de la funcion guardar_mensaje 0,1,2
    #$lnRet = guardar_mensaje() ;
  //  $sql = "INSERT INTO consultas (id, nombre, email, asunto, mensaje, created_at, modified_at, deleted_at) VALUES (DEFAULT, '$nombre', '$email', '$asunto','$mens', DEFAULT, DEFAULT, NULL)" ;

   // $sqlres = mysqli_query($conexion, $sql) ;

    if (1 == 1) { // se registro mensaje.. email enviado..
      mail($destino,$asunto,$cuerpo,$headers);
       mail($email,$asunto,$cuerpo,$headers);
?>
      <div class="w3-panel w3-green w3-display-container">
        <span onclick="this.parentElement.style.display='none'"
        class="w3-button w3-large w3-display-topright">&times;</span>
        <h3>Enviado!</h3>
        <p>Se ha enviado su consulta. Le responderemos a la brevedad..</p>
      </div>
<?php 
    } else { // no se pudo enviar mail
?>      
<div class="w3-panel w3-red w3-display-container">
        <span onclick="this.parentElement.style.display='none'"
        class="w3-button w3-large w3-display-topright">&times;</span>
        <h3>Atencion!</h3>
        <p>No se pudo conectar a la Base de datos..</p>
</div>
<?php
    }
}
else {
 // printf($nombre);
}  
?>        

  <form class="w3-container" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]).'#contacto';?>">
    <div class="w3-section">
      <label>Nombre</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="nombre" required>
    </div>
    <div class="w3-section">
      <label>Email</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="email" required>
    </div>
    <div class="w3-section">
      <label>Asunto</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="asunto" required>
    </div>
    <div class="w3-section">
      <label>Mensaje</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="mensaje" required>
    </div>
    <div class="w3-section">
      <label>Verificar</label>
       <img src="<?php echo 'include/captcha.php'?>">
        <input type="text" name="captcha" required> 
    </div>
    <input class="w3-button w3-block w3-black" type="submit" name="submit" value="Enviar">
  <!--  <button type="submit" class="w3-button w3-block w3-black">Enviar</button> -->
  </form>

</div>

<!-- Footer -->

<footer class="w3-container w3-padding-32 w3-light-grey w3-center">
  <h4>SIXTORED</h4>
  <a href="#" class="w3-button w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>Inicio</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Desarollado por <a href="https://www.sixtored.com.ar" title="SixtoRed" target="_blank" class="w3-hover-text-green">sixtored.com.ar</a></p>
</footer>


<script>
// Slideshow
var slideIndex = 1;
var myIndex = 0;
carousel();
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}




function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}    
  x[slideIndex-1].style.display = "block";  
  setTimeout(carousel, 5000); // Change image every 5 seconds
}
</script>


</script>

</body>
</html>
