<?php

/**
* @file
* Default theme implementation to display a single Drupal page.
*
* The doctype, html, head and body tags are not in this template. Instead they
* can be found in the html.tpl.php template in this directory.
*
* Available variables:
*
* General utility variables:
* - $base_path: The base URL path of the Drupal installation. At the very
* least, this will always default to /.
* - $directory: The directory the template is located in, e.g. modules/system
* or themes/bartik.
* - $is_front: TRUE if the current page is the front page.
* - $logged_in: TRUE if the user is registered and signed in.
* - $is_admin: TRUE if the user has permission to access administration pages.
*
* Site identity:
* - $front_page: The URL of the front page. Use this instead of $base_path,
* when linking to the front page. This includes the language domain or
* prefix.
* - $logo: The path to the logo image, as defined in theme configuration.
* - $site_name: The name of the site, empty when display has been disabled
* in theme settings.
* - $site_slogan: The slogan of the site, empty when display has been disabled
* in theme settings.
*
* Navigation:
* - $main_menu (array): An array containing the Main menu links for the
* site, if they have been configured.
* - $secondary_menu (array): An array containing the Secondary menu links for
* the site, if they have been configured.
* - $breadcrumb: The breadcrumb trail for the current page.
*
* Page content (in order of occurrence in the default page.tpl.php):
* - $title_prefix (array): An array containing additional output populated by
* modules, intended to be displayed in front of the main title tag that
* appears in the template.
* - $title: The page title, for use in the actual HTML content.
* - $title_suffix (array): An array containing additional output populated by
* modules, intended to be displayed after the main title tag that appears in
* the template.
* - $messages: HTML for status and error messages. Should be displayed
* prominently.
* - $tabs (array): Tabs linking to any sub-pages beneath the current page
* (e.g., the view and edit tabs when displaying a node).
* - $action_links (array): Actions local to the page, such as 'Add menu' on the
* menu administration interface.
* - $feed_icons: A string of all feed icons for the current page.
* - $node: The node object, if there is an automatically-loaded node
* associated with the page, and the node ID is the second argument
* in the page's path (e.g. node/12345 and node/12345/revisions, but not
* comment/reply/12345).
*
* Bootstrap:
* - $navbar: TRUE if the navbar theme setting is enabled.
* - $navbar_fixed: TRUE if the navbar fixed setting is enabled.
* - $navbar_classes: A string of navbar classes.
* - $navbar_classes_array (array): An array containing navbar classes.
* - $subnav: TRUE if the subnav theme setting is enabled.
*
* Regions:
* - $page['help']: Dynamic help text, mostly for admin pages.
* - $page['highlighted']: Items for the highlighted content region.
* - $page['content']: The main content of the current page.
* - $page['sidebar_first']: Items for the first sidebar.
* - $page['sidebar_second']: Items for the second sidebar.
* - $page['header']: Items for the header region.
* - $page['footer']: Items for the footer region.
*
* @see template_preprocess()
* @see template_preprocess_page()
* @see template_process()
* @see html.tpl.php
*/
?>

<!-- Showcase header site
==================================-->
<div class="showcase">
  <div class="container">
    <div class="row">
      <div class="span12">
        <header style="opacity: 1;" class="js-animated main">

          <!-- Site's Logo
          ==================================-->
          <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
              <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </a>
          <?php endif; ?>

          <!-- Site's Slogan
          ==================================-->
          <?php if ($site_slogan): ?>
            <h2><?php print $site_slogan; ?></h2>
          <?php endif; ?>

          <p class="description">- Ofrecemos soluciones para el futuro de su empresa -</p>
        </header>
      </div>
    </div>
  </div>
</div>

<!-- Navigation Menu Bar Strip
==================================-->
<div class="strip">
  <div class="container">
    <div class="navbar">

     <!-- toggle for collapsed navbar content
     ============================================-->
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <?php if ($primary_nav || $secondary_nav || !empty($page['navigation'])): ?>
        <div class="nav-collapse">
          <nav role="navigation">

            <!-- Primary Menu
            ==================================-->
            <?php if ($primary_nav): ?>
              <?php print render($primary_nav); ?>
            <?php endif; ?>

            <!-- secundary Menu
            ==================================-->
            <?php if ($secondary_nav): ?>
              <div class="pull-center"><?php print render($secondary_nav); ?></div>
            <?php endif; ?>

            <?php if (!empty($page['navigation'])): ?>
              <?php print render($page['navigation']); ?>
            <?php endif; ?>

            <!-- Button to trigger modal for the login form
            ====================================================-->
            <?php if (!user_is_logged_in()): ?>
              <a href="#myModal" role="button" class="btn btn-primary pull-right" data-toggle="modal">Log in</a>
            <?php endif; ?>

          </nav>
        </div>
      <?php endif; ?>

    </div>
  </div>
</div>

<!-- Modal Windows for loggin form
==================================-->
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
    <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cerrar</button>
  </div>
</div>
<?php endif; ?>


<?php if ($page['carousel']): ?>

  <!-- Carousel section page
  ==================================-->
  <div class="featured">
    <div class="container">
      <div class="row">
        <div class="span4">
          <a href="/plataforma" title="Web tracking manager">
            <img src="sites/default/files/styles/adaptive/public/plataforma-image.jpg" alt="Web Tracking Manager">
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

<!-- Page Tittle Container
==================================-->
<div class="container">
  <div class="span12">
    <?php print render($title_prefix); ?>
    <?php print render($title_suffix); ?>
    <?php print $messages; ?>
  </div>
</div>

<!-- Page Container Area
==================================-->
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

      <!-- This is the Main Content Area
      ==================================-->
      <div class="container">
        <div style="margin-bottom: 35px">
           <h1 class="page-header">Soluciones en localización</h1>
           <div class="row">
            <div class="span10">
              <p class="lead"><strong>Somos una empresa 100% Mexicana</strong> especialista en gestión y monitoreo de flotillas y vehículos particulares, contamos con mas de 1,500 clientes satisfechos al rededor de toda la república. Trabajamos para su seguridad y la de sus vehículos.</p>
              <p><em>Contáctenos para recibir más información y una demostración de nuestro sistema.</em></p>
            </div>
            <div class="span2">
              <a class="btn btn-primary btn-large pull-right" style="padding:16px 32px" href="#contacto">Contactar »</a>
            </div>
          </div>
        </div>
        <hr />

        <!-- Columas de ventajas
        ==================================-->
        <div class="container">
          <div class="row" style="margin-top:25px; margin-bottom:65px">
            <div class="span4">
              <i class="icon-money icon-4x"></i>
              <h2>Ahorrar en costos</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
              <p><a style="margin-top: 10px;" class="btn" href="#">Ver detalles »</a></p>
            </div>
            <div class="span4">
              <i class="icon-map-marker icon-4x"></i>
              <h2>Ubicar sus vehículos</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
              <p><a style="margin-top: 10px;" class="btn" href="#">Ver detalles »</a></p>
            </div>
            <div class="span4">
              <i class="icon-dashboard icon-4x"></i>
              <h2>Cumplir con los tiempos</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
              <p><a style="margin-top: 10px;" class="btn" href="#">Ver detalles »</a></p>
            </div>
          </div>
          <div class="row" style="margin-top:25px; margin-bottom:65px">
            <div class="span4">
              <i class="icon-group icon-4x"></i>
              <h2>Control de personal</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
              <p><a style="margin-top: 10px;" class="btn" href="#">Ver detalles »</a></p>
            </div>
            <div class="span4">
              <i class="icon-lock icon-4x"></i>
              <h2>Asegurar su inversión</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
              <p><a style="margin-top: 10px;" class="btn" href="#">Ver detalles »</a></p>
            </div>
            <div class="span4">
              <i class="icon-user icon-4x"></i>
              <h2>Satisfacción del cliente</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
              <p><a style="margin-top: 10px;"class="btn" href="#">Ver detalles »</a></p>
            </div>
          </div>
        </div>
      </div><!-- End of the Main Content -->

    <?php if ($page['sidebar_first']): ?>
      <!-- sidebar-first
      ==================================-->
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>
    <?php endif; ?>

    </section>
  </div>
</div><!--end of page container-->

<!--Footer section of page
==================================-->
<footer id="main-footer" class="background">
  <div class="container">
    <div class="row">
      <div class="span6">
        <h3>Ubicacion</h3>
        <iframe class="img-polaroid" width="98%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=204073833174488463388.0004e017def557fd2af7a&amp;ie=UTF8&amp;t=m&amp;ll=28.396006,-106.858006&amp;spn=0.011326,0.012875&amp;z=15&amp;output=embed"></iframe><br />
        <address>
          <br />
          <strong>Oficinas de Carpross</strong><br />
          <i class="icon-home"></i>
            Veracuz #235, Cd. Cuauhtemoc, Chih, MX<br />
          <i class="icon-phone-sign"></i><abbr title="Telefono"> T: </abbr> (625) 582-0062 <br />
          <i class="icon-envelope"></i><abbr title="Email"> E: </abbr> <a href="mailto:#">a.meraz@carpross.com.mx</a>
        </address>
        <?php if ( $page['footer_first'] ): ?>
          <?php print render($page['footer_first']); ?>
        <?php endif; ?> 
      </div>
      <div class="span3">
        <h3>Nosotros</h3>
        <ul class="unstyled">
          <li><a href="empresa/#quienes-somos" title="">¿Quiénes Somos?</a></li>
          <li><a href="empresa/#nuestro-objetivo" title="">¿Cuál es nuestro objetivo?</a></li>
          <li><a href="empresa/#presencia" title="">¿En donde estamos presentes?</a></li>
          <li><a href="empresa/#porque-carpross" title="">¿Porqué elegir carpross?</a></li>
        </ul>
        <?php if ( $page['footer_second'] ): ?>
          <?php print render($page['footer_second']); ?>
        <?php endif; ?>
      </div>
      <div class="span3">
        <h3 id="contacto">Contacto</h3>
        <?php if ( $page['footer_third'] ): ?>
          <?php print render($page['footer_third']); ?>
        <?php endif; ?>
      </div>
      <hr>
    </div>
    <div class="row">
      <div class="span12">
        <p>© 2013 Designed by <a href="http://twitter.com/heyallanmoreno">@heyallanmoreno</a></p>
      </div>
    </div>
  </div>
</footer><!--end of footer-->