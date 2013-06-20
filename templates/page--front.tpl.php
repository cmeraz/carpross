<!-- Showcase -->
<div class="showcase">
	<div class="container">
 		<div class="row">
     	<div class="span12">
       	<header style="opacity: 1;" class="js-animated main">

	        <!-- Site's Logo -->
  	      <?php if ($logo): ?>
	  	 			<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
	  					<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
	   				</a>
    			<?php endif; ?>
	
    			<!-- Site's Slogan -->
        	<?php if ($site_slogan): ?>
     				<p class="showcase"><?php print $site_slogan; ?></p>
   				<?php endif; ?>

     	  	<p class="description">- Ofrecemos soluciones para el futuro de su empresa. -</p>
     		</header>
      </div>
    </div>
  </div>
</div>

<!-- Navigation Menu Bar Strip -->
<div class="strip">
	<div class="container">
   	<div class="navbar">
   		 
 		 <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
     	<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
       	<span class="icon-bar"></span>
       	<span class="icon-bar"></span>
       	<span class="icon-bar"></span>
     	</a>
 	
 			<?php if ($primary_nav || $secondary_nav || !empty($page['navigation'])): ?>
	 			<div class="nav-collapse">
	   			<nav role="navigation">

	   				<!-- Primary Menu -->
	     			<?php if ($primary_nav): ?>
	       			<?php print render($primary_nav); ?>
	   				<?php endif; ?>       
	   				<!-- secundary Menu -->
	   				<?php if ($secondary_nav): ?>
	       			<?php print render($secondary_nav); ?>
	   				<?php endif; ?> 
            <?php if (!empty($page['navigation'])): ?>
              <?php print render($page['navigation']); ?>
            <?php endif; ?>  
	 				</nav>
	 			</div>
			<?php endif; ?>

      <!-- Button to trigger modal for the login form -->
    <?php if (!user_is_logged_in()): ?>
      <a href="#myModal" role="button" class="btn btn-primary pull-right" data-toggle="modal">Log in</a>
    <?php endif; ?>

		</div>
  </div>
</div>
    
<!-- Modal -->
<?php if (!user_is_logged_in()): ?>
  <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Log In</h3>
  </div>
  <div class="modal-body">
    <?php print render($page['modal']); ?>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>
<?php endif; ?>


<?php if ($page['carousel']): ?>
  <!-- Carousel section page -->  
  <div class="featured">
    <div class="container">
      <div class="row">
        <div class="span4">
          <a href="/plataforma" title="Web tracking manager">
            <img src="http://carpross.dev/sites/default/files/styles/adaptive/public/plataforma-image.jpg" alt="Web Tracking Manager">
          </a>
        </div>
        <div class="span8">
          <h2>Plataforma Web Tracking Manager</h2>
          <p><strong>Sofisticado sistema integral de supervisión y monitoreo vehicular,</strong> para el control total de todos los dispositivos instalados en sus vehículos, con acceso al registro de ubicación y todos sus movimientos en cualquier parte del país. Todo esto sin necesidad de grandes inversiones o instalación de softwares especializados, sólo necesitará un PC o dispositivo móvil con conexión a internet. <strong>Disponible las 24 horas los 365 días del año.</strong></p>
          <a class="btn" href="/plataforma" title="">Leer mas...</a>
        </div>
      </div>
    </div>
  </div>
  
<?php endif ?>

<!-- Page Tittle Container -->
<div class="container">
	<div class="span12">
    <?php print render($title_prefix); ?>
    <?php print render($title_suffix); ?>
    <?php print $messages; ?>
	</div>
</div>

<!-- Page Container -->
<div class="container">
 	<div class="row">
    <section class="span9">  
      <?php if ($tabs): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if ($page['help']): ?> 
        <div class="well"><?php print render($page['help']); ?></div>
      <?php endif; ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      
      <!-- This is the Main Content Area -->
      <div class="container">
        <div style="margin-bottom: 35px">
           <h1>Soluciones en localización</h1>
           <div class="row">
            <div class="span10">
              <p class="lead"><strong>Somos una empresa 100% Mexicana</strong> especialista en gestión y monitoreo de flotillas y vehículos particulares, contamos con mas de 1,500 clientes satisfechos al rededor de toda la república. Trabajamos para su seguridad y la de sus vehículos.</p>
              <p><em>Contáctenos para recibir más información y una demostración de nuestro sistema.</em></p>
            </div>
            <div class="span2">
              <a class="btn btn-primary btn-large pull-right" style="padding:16px 32px">Contactar »</a>
            </div>
          </div>
        </div>
        <hr />

        <!-- Columas de ventajas -->
        <div class="container">
        <div class="row" style="margin-top:25px; margin-bottom:65px">

        <div class="span4">
          <i class="icon-money icon-4x"></i>
          <h2>Ahorrar en costos</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
          <p><a class="btn" href="#">Ver detalles »</a></p>
        </div>

        <div class="span4">
          <i class="icon-map-marker icon-4x"></i>
          <h2>Ubicar sus vehículos</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
          <p><a class="btn" href="#">Ver detalles »</a></p>
        </div>

        <div class="span4">
          <i class="icon-dashboard icon-4x"></i>
          <h2>Cumplir con los tiempos</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">Ver detalles »</a></p>
        </div>
      </div>

        <div class="row" style="margin-top:25px; margin-bottom:65px">
          <div class="span4">
            <i class="icon-group icon-4x"></i>
            <h2>Control de personal</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
            <p><a class="btn" href="#">Ver detalles »</a></p>
          </div>

        <div class="span4">
        <i class="icon-lock icon-4x"></i>
        <h2>Asegurar su inversión</h2>
<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
        <p><a class="btn" href="#">Ver detalles »</a></p>
        </div>

        <div class="span4">
        <i class="icon-user icon-4x"></i>
        <h2>Satisfacción del cliente</h2>
<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn" href="#">Ver detalles »</a></p>
        </div>

        </div>
        </div>
        </div>
        <!-- End of the Main Content -->


	  <?php if ($page['sidebar_first']): ?>
      <aside class="span3" role="complementary">
  		  <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>    
  </div> 
</div>


