<?php include_once("resources/top.php"); ?>
<style>
.jmgmodal {
position: fixed; margin: auto;
top:0;left:0;right:0;bottom:0;
background: rgba(34,34,68,.8);
box-sizing: content-box;
visibility: hidden; opacity: 0;
transition: all .12s; z-index: 99;
}
.jmgmodal.visible {
visibility: visible; opacity: 1;
}
.jmgmodal * {box-sizing: inherit}
.jmgmodal .panel {
position: absolute; margin: auto;
top:0;left:0;right:0;bottom:0;
max-width: 600px; max-height: 70vh;
background: #FFFFFF; border-radius: 10px;
color: #000; padding: 50px 0;
transform: translateY(-25%);
transition: all .12s;
}
.jmgmodal.nofooter .panel {
padding: 50px 0 0 0;
}
.jmgmodal.visible .panel {
transform: none;
}
.jmgmodal .title {
position: absolute; top: 0;
width: 100%; height: 50px;
line-height: 50px;
background: orange;
font-weight: bolder; padding: 0 2em;
box-shadow: 2px 0 10px rgba(0,0,0,.6);
border-radius: 10px 10px 0 0;
box-sizing: border-box;
white-space: nowrap;
text-overflow: ellipsis;
overflow: hidden;
}
.jmgmodal .panel .close {
position: absolute; top: .25em; right: .75em;
cursor: pointer; font-size: 25px;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
}
.jmgmodal .panel .content {
max-height: 100%; overflow: auto;
padding: 1em; box-sizing: border-box;
}
.jmgmodal .panel .content iframe:only-child {
border: 0; width: 100%;
height: 100%; height: 46vh;
min-height: 200px;
}
.jmgmodal .panel .content img:only-child {
width: 100%; max-width: 100%;
}
.jmgmodal .panel .footer {
position: absolute; bottom: 0;
width: 100%; background: orange;
font-weight: bolder; padding: 0 .5em;
box-shadow: 2px 0 10px rgba(0,0,0,.6);
border-radius: 0 0 10px 10px;
box-sizing: border-box;
white-space: nowrap;
text-overflow: ellipsis;
overflow: hidden;
text-align: right;
}
.jmgmodal .panel .footer .action {
border-radius: 10px; color: #000;
background: #fff; border: 0;
min-width: 80px; min-height: 35px;
font-weight: bold; cursor: pointer;
margin-left: 20px;
transition: all .12s;
}
.jmgmodal .panel .footer .action:hover {
box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.6);
}
</style>


<?php include_once("resources/menu.php"); ?>
<?php include_once("resources/slider.php"); ?>
<!-- Small Banner -->
<section></section>
    <section class="bg-banner dark-banner">
    	<div class="auto-box anim-3-all clearfix">
        	<h1 class="pull-left"><span>Se realizó los análisis</span> desea descargar sus resultados?</h1>
            <a class="btn-border-wht pull-right animated out" data-delay="0" data-animation="pulse" onclick="jmgModal('miventana',{
        title: 'Resultados',
        width: 700,
        height: 70,
        content: '<iframe src=\'ingreso.html\'></iframe>'});"><span class="flaticon-angle2"></span> &ensp; Ver resultados</a>
        </div>
    </section>
    <!-- Services -->
    <section class="services">
    	<div class="auto-box"><br>
        	<h1 class="border-line-center text-center"><i>"Una institución se mantiene en el tiempo no sólo por el trabajo y formación ,comprometido y continuo de <br><br>
        	quienes la componen, sino también por el acompañamiento activo de profesionales de la salud que <br><br>
        	reconocen y confían ese trabajo,y sobre todo a la comunidad de La Rioja que nos elige día a día."<br><br>IBCV</i></h1>
        </div>
    </section>

    <!-- Client Testimonials -->
    <section class="meet-the-team">
    	<div class="auto-box">
        	<h1 class="border-line-center text-center">Nuestra Historia</h1>
    		<div class="row clearfix">
        	
        	
        	   <!-- Member -->
            	<article class="member col-lg-4 col-md-3 col-sm-6 col-xs-4 animated out" data-delay="0" data-animation="fadeInUp">
                	<figure><img src="images/gallery/antigua1_peq.jpg" alt="" width="250px" height="250px"><a class="overlay" href="historia.php"></a></figure>

                </article>
                
                <!-- Member -->
                <article class="member col-lg-4 col-md-3 col-sm-6 col-xs-4 animated out" data-delay="150" data-animation="fadeInUp">
                	<figure><img src="images/gallery/antigua2.jpg" alt="" height="250px"><a class="overlay" href="historia.php"></a></figure>
                </article>
        	
        	<article class="member col-lg-4 col-md-3 col-sm-6 col-xs-4 animated out" data-delay="150" data-animation="fadeInUp">
                	<figure><img src="images/gallery/antigua3.jpg" alt="" height="250px"><a class="overlay" href="historia.php"></a></figure>
                </article>
            </div>
            	<!-- <div class="row clearfix">
            	    	<article class="member col-lg-12 col-md-12 col-sm-12 col-xs-12 animated out" data-delay="150" data-animation="fadeInUp">
                	<figure><img src="images/resource/historia.jpg" alt=""><a class="overlay" href="historia.php"></a></figure>
                </article>
            	    
        	    </div>-->
    	</div>
    	        	
        	<div class="auto-box"><br>
        	<h2 class="border-line-center text-left"><i>" El Instituto Bioquímico Cortés Viñes fue fundado el 14 de febrero de 1947, por los primeros
                Bioquímicos de la provincia de La Rioja, el Dr. Carlos Cortés Álvarez, MP N°1, y el Dr. José Viñes
                Eroles MP N°2. La labor iniciada por ellos, continua hasta estos días con ya la tercera generación
                de profesionales en el laboratorio.
                Tratando de preservar el espíritu de estos pioneros, sus actuales directores, Dr. Hugo Albrieu,
                gerente técnico, y la Tec. Alicia Viñes Cipollina, gerenta administrativa junto al equipo Cortés Viñes                                                                          
                apuestan a la excelencia y a la calidad."</i></h2>
            </div>
        	
    </section>
    
    
    
    <!-- Latest Blog -->
    <section class="latest-blog" id="servicioss">
    	<div class="auto-box">
        	<h1 class="border-line-center">Servicios</h1>
        	<div class="row clearfix">
            	
                <!-- Post -->
            	<article class="blog-post col-lg-3 col-md-3 col-sm-6 col-xs-6">
                	<div class="image">
                    	<img class="img-responsive" src="images/gallery/s1.jpg" alt="">
                        <a href="#" class="overlay"></a>
                    </div>
                    <br>
                    <h1>Calidad</h1>
                    <div class="desc"><p>Nuestros resultados están garantizados por programas de calidad externos nacionales e internacionales 
                    (CEMIC, FABA, Hospital Malbrán). Formamos parte de ALAC (Asociación de Laboratorios de Alta Complejidad de Argentina) 
                    Desde 2012 estamos certificados bajo normas iso 9001/2015.</p></div>
                    <!-- <div class="more text-right"><a href="#">READ MORE &ensp; <span class="glyphicon glyphicon-arrow-right"></span></a></div>-->
                </article>
                
                <!-- Post -->
               <article class="blog-post col-lg-3 col-md-3 col-sm-6 col-xs-6">
                	<div class="image">
                    	<img class="img-responsive" src="images/gallery/s2.jpg" alt="">
                        <a href="#" class="overlay"></a>
                    </div>
                    <br>
                    <h1>Sala pediátrica</h1>
                    <div class="desc"><p>Contamos sala pediátrica, con personal altamente capacitado</p></div>
                    <div class="more text-right"><a href="/images/consejos.pdf" target="_blank">Consejos extraccion en niños &ensp; <span class="glyphicon glyphicon-arrow-right"></span></a></div>
                </article>
                
                <!-- Post -->
                <article class="blog-post col-lg-3 col-md-3 col-sm-6 col-xs-6">
                	<div class="image">
                    	<img class="img-responsive" src="images/gallery/s3.jpg" alt="">
                        <a href="#" class="overlay"></a>
                    </div>
                    <br>
                    <h1>Extracciones a domicilio</h1>
                    <div class="desc"><p>Realizamos extracciones a domicilio. Pagá con tarjetas de débito o transferencia.
                    Consultá a nuestros teléfonos.</p></div>
                    <!-- <div class="more text-right"><a href="#">READ MORE &ensp; <span class="glyphicon glyphicon-arrow-right"></span></a></div>-->
                </article>
                
                <article class="blog-post col-lg-3 col-md-3 col-sm-6 col-xs-6">
                	<div class="image">
                    	<img class="img-responsive" src="images/gallery/s4.jpg" alt="">
                        <a href="#" class="overlay"></a>
                    </div>
                    <br>
                    <h1>Resultados</h1>
                    <div class="desc"><p>Descargá tu resultados de la página web o retíralos por el laboratorio.</p></div>
                    <div class="more text-right"><a href="/images/instructivo.pdf" target="_blank">Instructivo &ensp; <span class="glyphicon glyphicon-arrow-right"></span></a></div>
                </article>
                
            </div>
        </div>
    </section>
  


                
<br><br><br><br><br><br>

<script>
// función aparte para no complicar el código
function metaventana() {
  jmgModal('ventana2',{
        title: 'Sub-ventana',
        width: 300,
        height: 20,
        content: 'Contenido de la sub-ventana'});
}

function jmgModal(id, data, ok, cancel, input) {
  data=data || {};
  id="modal-"+id;
  if (document.getElementById(id)==null) {
    var d=document.createElement("div");
    d.className="jmgmodal";
    d.id=id;
    var p=document.createElement("div");
    p.className="panel";
    var t=document.createElement("div");
    t.className="title";
    var cl=document.createElement("div");
    cl.className="close";
    cl.innerHTML='&times;';
    cl.addEventListener('click',function(ev) {
      ev.preventDefault();
      var dTop=this.parentNode.parentNode;
      dTop.classList.remove("visible");
      dTop.querySelector(".panel .content").innerHTML='';
    });
    var ct=document.createElement("div");
    ct.className="content";
    var f=document.createElement("div");
    f.className="footer";
    p.appendChild(t);p.appendChild(cl);p.appendChild(ct);p.appendChild(f);
    d.appendChild(p);
    document.body.appendChild(d);
  }
  var mod=document.getElementById(id),
  p=mod.querySelector(".panel"),
  t=mod.querySelector(".panel .title"),
  ct=mod.querySelector(".panel .content"),
  f=mod.querySelector(".panel .footer");
  if (f==null) {
    mod.classList.remove("nofooter");
    var f=document.createElement("div");
    f.className="footer";
    p.appendChild(f);
  }
  t.innerHTML=data.title || '';
  ct.innerHTML=data.content || '';
  f.innerHTML='';
  if (!isNaN(data.width)) p.style.maxWidth=data.width+'px';
  if (!isNaN(data.height)) p.style.maxHeight=data.height+'vh';
  if (ok && ok.length>1) {
    var param={value:null};
    if (input && input.length>0) {
      var ph=document.createElement("p");
      ph.className="action";
      var txt=document.createElement("input");
      txt.className="action";
      txt.setAttribute("placeholder",input[0]);
      txt.addEventListener('keydown',function(ev) {
        if (ev.keyCode==13 || ev.key=="Enter") {
          ev.preventDefault();
          mod.classList.remove("visible");
          ok[1](param.value);
        }
      });
      ph.appendChild(txt); ct.appendChild(ph);
      param=ct.querySelector("p.action > input.action");
      setTimeout(function(){
        param.focus();
      },100);
    }
    var bOk=document.createElement("button");
    bOk.className="action";
    bOk.innerHTML=ok[0];
    bOk.addEventListener('click',function(ev) {
      ev.preventDefault();
      mod.classList.remove("visible");
      ok[1](param.value);
    });
    f.appendChild(bOk);
  }
  if (cancel && cancel.length>1) {
    var bCancel=document.createElement("button");
    bCancel.className="action";
    bCancel.innerHTML=cancel[0];
    bCancel.addEventListener('click',function(ev) {
      ev.preventDefault();
      mod.classList.remove("visible");
      cancel[1]();
    });
    f.appendChild(bCancel);
  }
  if (f.innerHTML=='') {
    p.removeChild(f);
    mod.classList.add("nofooter");
  }
  setTimeout(function(){
    mod.classList.add("visible");
  },50);
}
</script>

<?php include_once("resources/bottom.php"); ?>