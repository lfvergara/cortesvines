<?php
$id = utf8_decode($_REQUEST['id']);
$dni = utf8_decode($_REQUEST['dni']);
$name = utf8_decode($_REQUEST['name']);
$path = "./reportes/";
$pdffiles = array();
$valid_files = array('pdf');
if(is_dir($path)){
  foreach(scandir($path) as $file){
    $ext = pathinfo($file, PATHINFO_EXTENSION);
    if(in_array($ext, $valid_files)){ //if it is a pdf file
    	# 1234567890-33609777-19880203-gabriela.pdf
    	$fileProps = explode("-", $file);        
    	if($fileProps[0] == $id && $fileProps[1] == $dni){
            $resultado = true;
            break; 
        }
        else{
            $resultado = false;
      	}
    }   
 }
}
if ($resultado != true){
    echo "<script>
                alert('Sus datos no son correctos, verifiquelos o comuniquese con administración.');
                window.location= '../../turnos/index.html';
    </script>";
    exit;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Cortes Vi&ntilde;es</title>
    <meta name="csrf-param" content="authenticity_token" />
    <meta name="csrf-token" content="cXwGMVVdYI1eWEBCAi9izY0If2nVjpXY48tlmMXIQRqZ2MGZWB2I6B4gDdrPwatrtjoxv3+Q+WG8EL+u4d0jpg==" />
    
    <meta charset="UTF-8">
    <link rel="stylesheet" media="all" href="../../assets/application.debug-71239e102461e53b27dfb3b9f578dadd95bee09ad3d7debbde25080f9cf5499c.css" data-turbolinks-track="reload" />
        
    <script src="../../packs/js/application-17e215b3887a203a3a41.js" data-turbolinks-track="reload"></script>
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" media="all" href="../../assets/modal1.css" data-turbolinks-track="reload" />    
  </head>

  <body id="page-top" class="body-resultados">    
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.html#page-top"><img width="80" crop="scale" src="../../assets/img/logo_sin_fondo-92f6c9afc2b428eed908100b1fc86ebd4c56dfd382a742c169cb9faa711b103f.png" /></a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav m-auto my-2 my-lg-0">                        
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color:#f4623a; font-size: 3em;">RESULTADOS</a></li>
                    </ul>
                        <div class="nav-item" style="align-self: center;"><a class="btn btn-dark" href="../../turnos/index.html#page-top" style="font-size: 1em; font-weight: bold;">Cerrar</a></div>
                    
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">                                                           
                    
<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
?>
<?php

$id = utf8_decode($_REQUEST['id']);
$dni = utf8_decode($_REQUEST['dni']);
$name = utf8_decode($_REQUEST['name']);
$path = "./reportes/";

echo '<div class="card bg-transparent" style="margin-top: 4em;">
                    <div class="card-header" style="font-size: 3em; background-color: rgb(201 196 196 / 70%);">
                        Bienvenido/a '. $name .'
                    </div>
                    <div class="card-body" style="background-color: rgb(255 251 251 / 70%);">
                        <h5 class="card-title">Aquí puedes descargar tus resultados, recuerda que los mismos estarán disponibles durante <b>15 días.</b> 
                        </h5>
                    </div>
                    </div>
                <div class="row h-50 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-center">';
echo "<table class='table table-hover text-white font-weight-bold align-self-start'>";
echo "<thead style='background-color: steelblue;'><tr><th scope='col'>#</th><th scope='col'>Protocolo</th><th scope='col' style='width: 25%'>Creado</th><th scope='col' style='width: 25%'></th></tr></thead>";
$i=1;
$pdffiles = array();
$valid_files = array('pdf');
if(is_dir($path)){
  foreach(scandir($path) as $file){
    $ext = pathinfo($file, PATHINFO_EXTENSION);
    if(in_array($ext, $valid_files)){ //if it is a pdf file
    	# 1234567890-33609777-19880203-gabriela.pdf
    	$fileProps = explode("-", $file);        
    	if($fileProps[1] == $dni){                	        
            echo "<tbody><tr><th scope='row'>".$i."</th><td>". $fileProps[0] ."</td><td>". date("d/m/Y", filectime($path.$file)) ."</td><td><a class='btn btn-success' href='".$path.$file."' target='_blank'>Descargar <i class='fas fa-cloud-download-alt'></i></a></td></tr>";
            $i++;                
      	}
    }   
 }
}
?>     
  </tbody>
</table>                    
                </div>
            </div>
        </header>
</body>
</html>