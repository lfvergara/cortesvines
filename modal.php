<?php include_once("resources/top.php"); ?>
<?php include_once("resources/menu.php"); ?>
    
    <!-- Page Title -->
    <article class="page-title">
    	<div class="auto-box">
        	<div class="row clearfix">
            	
                <div class="col-lg-6 col-xs-6">
                	<h2><br>
                	</h2>
                </div>
                
                <div class="col-lg-6 col-xs-6 text-right">
                	<span class="page-name"><br>
                	</span>
                </div>
                
                
            </div>
        </div>
    </article>
    
 
 
 
 
 
 
 
 
 
 
 
 <div class="btn-group">
  <button type="button" class="open-modal" data-open="modal2">
    Launch second modal
  </button>
</div>



<div class="modal" id="modal2">
  <div class="modal-dialog">
    <header class="modal-header">
      The header of the second modal
      <button class="close-modal" aria-label="close modal" data-close>
        ✕  
      </button>
    </header>
    <section class="modal-content">
    
    <div class="form-container">
                            <form method="post" action="index.html">
                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <input type="text" name="subject" value="" placeholder="Subject" style="width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;">
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <input type="text" name="name" value="" placeholder="Your Name">
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <input type="email" name="email" value="" placeholder="Your Email">
                                </div>
                                
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <select name="ptype">
                                        <option value="1">Private</option>
                                        <option value="2">Personal</option>
                                    </select>
                                </div>
                                
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <select name="priority">
                                        <option value="1">High</option>
                                        <option value="2">Medium</option>
                                        <option value="3">Low</option>
                                    </select>
                                </div>
                                
                                <div class="col-xs-12">
                                    <textarea name="message" placeholder="Your Message"></textarea>
                                </div>
                                <div class="col-xs-12 clearfix">
                                    <input type="submit" class="pull-right" name="submit" value="Send Message">
                                </div>
                                
                            </form>
                        </div>
    
    
    
    </section>
    <footer class="modal-footer">
      The footer of the second modal
    </footer>
  </div>
</div>


 
 
 
 
 
 
 
 
    
    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- upper -->
        <div class="upper anim-3-all">
        
            <div class="auto-box">
                <div class="row clearfix">
                    
                    
                    <!-- Contact Info -->
                    <article class="foot-block cont-info col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="widget widget-contact">
                            <h2 class="border-line-left">Información de contacto</h2>
                            <ul>
                                <li class="location">Vélez Sársfield 667, F5300 La Rioja</li>
                                <li class="website"><a href="http://www.cortesvines.com.ar">http://www.cortesvines.com.ar</a></li>
                                <li class="phone">+54 (380) 4251947</li>
                                <li class="mail"><a href="mailto:ibcvlr@gmail.com">ibcvlr@gmail.com</a></li>
                            </ul>
                        </div>
                    </article>
                
                </div>
            </div>
            
        </div>
        
        <!-- Bottom -->
        <div class="bottom"><div class="auto-box">Copyright 2021 Cortes Viñes | Todos los derechos reservados | Tecnología de negocio provista por <a href="mailto:grodriguez@syntecom.com.ar">Syntecom</a></div></div>
        
    </footer>
    
</div>
<!--End pagewrapper-->

<script>
    
const openEls = document.querySelectorAll("[data-open]");
const closeEls = document.querySelectorAll("[data-close]");
const isVisible = "is-visible";

for (const el of openEls) {
  el.addEventListener("click", function() {
    const modalId = this.dataset.open;
    document.getElementById(modalId).classList.add(isVisible);
  });
}

for (const el of closeEls) {
  el.addEventListener("click", function() {
    this.parentElement.parentElement.parentElement.classList.remove(isVisible);
  });
}

document.addEventListener("click", e => {
  if (e.target == document.querySelector(".modal.is-visible")) {
    document.querySelector(".modal.is-visible").classList.remove(isVisible);
  }
});

document.addEventListener("keyup", e => {
  // if we press the ESC
  if (e.key == "Escape" && document.querySelector(".modal.is-visible")) {
    document.querySelector(".modal.is-visible").classList.remove(isVisible);
  }
});    
    
</script>

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
