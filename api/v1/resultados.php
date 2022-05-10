<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
?>
<?php

$dni = utf8_decode($_REQUEST['dni']);
$bday = utf8_decode($_REQUEST['bday']);
$path = "./reportes/";
 
$pdffiles = array();
$valid_files = array('pdf');
if(is_dir($path)){
  foreach(scandir($path) as $file){
    $ext = pathinfo($file, PATHINFO_EXTENSION);
    if(in_array($ext, $valid_files)){ //if it is a pdf file
    	
    	# 1234567890-33609777-19880203-gabriela.pdf
    	$fileProps = explode("-", $file);
    	if($fileProps[1] == $dni && $fileProps[2] == $bday){
    	
    		$obj = (object) array(
    			'id' => $fileProps[0], 
    			'dni' => $fileProps[1],
    			'bday' => $fileProps[2],
    			'name' => $fileProps[3],
    			'filename' => $file
    		);
		
      	    	array_push($pdffiles, $obj);
      	}
    }   
 }
}
echo json_encode($pdffiles, JSON_PRETTY_PRINT);

?>
