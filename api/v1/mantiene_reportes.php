<?php
$files = glob('reportes/*'); //obtenemos el nombre de todos los ficheros
foreach($files as $file){
    $lastModifiedTime = filemtime($file);
    $currentTime = time();
    $timeDiff = abs($currentTime - $lastModifiedTime)/(60*60); //en horas 360 son 15 días
    if(is_file($file) && $timeDiff > 360)
    unlink($file); //elimino el fichero
    }
?>