<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0">
	<title> SixtoRed </title>
    <link rel="stylesheet" type="text/css" href="css/estilos_pantalla.css">
    <link rel="stylesheet" type="text/css" href="css/disposicion_grande_pantallas.css">
    <link rel="stylesheet" type="text/css" media="only screen and (min-width:50px) and (max-width:500px)" href="css/disposicion_pequena_pantallas.css">
    <link rel="stylesheet" type="text/css" media="only screen and (min-width:501px) and (max-width:800px)" href="css/disposicion_mediana_pantallas.css">
    <!-- font awesome -->
     <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">

  <link href = "https://fonts.googleapis.com/css?family= Do + Hyeon " rel = "hoja de estilo">


	<!--[if lt IE 9]>
		<script src= "http://html5shiv.googlecode.com/sun/trunk/html5.js"></script>
	<![endif]-->

</head>
<body>
       
        <div class="pagina">
        <header> 
            <a href="#" class="logo" ></a>
            </header><!-- /header -->
            
            <article>
       <p>
<?php 
	echo "<i>".session_msg()."</i>";
?>
</p>