<?php 
$dni = filter_input(INPUT_GET, 'dni');
$protocolo = filter_input(INPUT_GET, 'protocolo');
$flag_protocolo = (is_null($protocolo) OR $protocolo == '') ? 0 : 1;
$flag_dni = (is_null($dni) OR $dni == '') ? 0 : 1;

if ($flag_protocolo == 1 AND $flag_dni == 1) {
	$nombre_estudio = "{$protocolo}-{$dni}.PDF";
	$directorio = "../../reportes/";
	$archivo = "../../reportes/{$nombre_estudio}";
	if (is_dir($directorio)) {
		if (file_exists($archivo)) {
			print 1;
		} else {
			print 0;
		}
	} else {
		print 0;
	}
} else {
	print 0;
}
?>