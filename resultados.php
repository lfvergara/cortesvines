<?php 
$dni = filter_input(INPUT_POST, 'dni');
$protocolo = filter_input(INPUT_POST, 'id');
$denominacion = filter_input(INPUT_POST, 'name');

$nombre_estudio = "{$protocolo}-{$dni}.PDF";
$archivo = "reportes/{$nombre_estudio}";

$creacion = date("d/m/Y H:i", filectime($archivo));
?>
<?php include_once("resources/top.php"); ?>
<?php include_once("resources/menu.php"); ?>
    <!-- Page Title -->
    <article class="page-title">
    	<div class="auto-box">
        	<div class="row clearfix">
                <div class="col-lg-6 col-xs-6">
                	<h2>Resultados</h2>
                </div>
            </div>
        </div>
    </article>
    <div class="sidebar-page">
        <section class="services">        
        	<div class="auto-box">
            	<div class="row clearfix">
            	    <div class="box col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 10px;">
                        <span class="icon flaticon-positive3" style="margin-top: 10px;"></span>
                        <h3><a href="#" style="font-size: 40px; color: #000; margin-top: 0px;">Bienvenido/<font style="text-transform: lowercase;">a</font> <?php print $denominacion;?></a></h3>
                        <p style="font-size: 20px;">Aquí puedes descargar tus resultados, recuerda que los mismos estarán disponibles durante 15 días.</p>
                    </div>
                    <div class="box col-lg-9 col-md-9 col-sm-12 col-xs-12" style="margin-top: 0px;">
                        <table class="table">
                            <thead>
                                <tr style="font-size: 20px; background: #0f86ff; color: #fff;">
                                    <th>#</th>
                                    <th>Protocolo</th>
                                    <th>Fecha creación</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="font-size: 18px;">
                                    <th>1</th>
                                    <th><?php print $protocolo;?></th>
                                    <th><?php print $creacion;?></th>
                                    <th>
                                        <a href='<?php print $archivo;?>' target="_blank" class="dark-btn pull-right" style="padding: 5px 30px; background: #0f86ff;"><i class="fa fa-download"></i> Descargar</a>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php include_once("resources/bottom.php"); ?>