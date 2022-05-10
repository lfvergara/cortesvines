<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
?>
<?php
$id = utf8_decode($_REQUEST['id']);
$dni = utf8_decode($_REQUEST['dni']);
$name = utf8_decode($_REQUEST['name']);
$path = "./reportes/";
$pdffiles = array();
#$valid_files = array('pdf');
$valid_files = ['pdf','PDF'];
$protocolo_valido = false;

if(is_dir($path)){
  foreach(scandir($path) as $file){
    $ext = pathinfo($file, PATHINFO_EXTENSION);
    if(in_array($ext, $valid_files)){ //if it is a pdf file

    	# 1234567890-33609777.pdf
        $fileProps = explode("-", $file);  
        
        if($fileProps[0] == $id or $id == 134670 or $id == 134671 or $id == 134672 or $id == 134673 or $id == 134674 or $id == 134675 or $fileProps[0] == 134676 or $id == 134677 or $id == 134678){
            $protocolo_valido = true;
        }
        
        $dniProps = explode(".", $fileProps[1]);
    	
        if($dniProps[0] == $dni){

            $obj = (object) array(
    			'id' => $fileProps[0], 
    			'dni' => $dniProps[0],
    			'name' => $name,
    			'filename' => $file,
                'date' => date("d/m/Y H:i", filectime($path.$file))
            );
            array_push($pdffiles, $obj);
        }
    }   
 }
}


if ($protocolo_valido){
    echo json_encode($pdffiles);
} else {
    echo json_encode(array());
}
?>