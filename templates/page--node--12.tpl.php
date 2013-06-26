<!-- Showcase -->
<div class="not-found" style="height: 100%">
  <div class="container">
    <div class="row">
      <div class="span12">
        <header style="opacity: 1;" class="js-animated main navbar-fixed-top">
          <!-- Site's Logo -->
          <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
              <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </a>
          <?php endif; ?>
        </header>
      </div>
    </div>
  </div>
  <footer class="navbar-fixed-bottom 404-message">
    <div class="container">
      <div class="row">
        <div class="span12">
          <h1 class="text-center pull-center">OOPS <span>PAGINA NO ENCONTRADA!</span> </h1>
          <p class="lead text-center pull-center">Lo sentimos, la pagina que busca no se encuentra en el sistema o ha sido cambiada</p>
          <a class="btn bnt-primary btn-large pull-center" href="/" title="Volver a la pagina de inicio">
            <i class="icon-home"> Volver al Inicio</i>
          </a>
        </div>
      </div>
    </div>
  </footer>
</div>