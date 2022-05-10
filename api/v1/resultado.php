<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
?>
<?php

$filename = utf8_decode($_REQUEST['filename']);
$path    = './reportes/'.$filename;
$data = file_get_contents($path);
  header("Content-type: application/octet-stream");
  header("Content-disposition: attachment;filename=".$filename);

  echo $data;
?>
