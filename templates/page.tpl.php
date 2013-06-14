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

     	  	<p class="description">- Modernity is the foundation of our future -</p>
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
		</div>
    <!-- Button to trigger modal for the login form -->
    <a href="#myModal" role="button" class="btn btn-primary pull-right" data-toggle="modal">Log in</a>
  </div>
</div>
    
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Log In</h3>
  </div>
  <div class="modal-body">
    <?php print render($page['sidebar_first']); ?>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
  </div>
</div>

<?php if ($page['carousel']): ?>
  <!-- Carousel section page -->  
  <div class="featured">
    <?php print render($page['carousel']); ?>
    <hr>
  </div>
<?php endif ?>

<!-- Page Tittle Container -->
<div class="container">
	<div class="span12">
		<?php if ($title): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
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
      <?php print render($page['content']); ?>
    </section>
	  <?php if ($page['sidebar_first']): ?>
      <aside class="span3" role="complementary">
  		  <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>    
  </div> 
</div>

<!-- Footer section of page -->
<footer class="background">
  <div class="container">
    <div class="row">
      <div class="span12">
      	<p>© 2013 Designed by <a href="http://twitter.com/heyallanmoreno">@heyallanmoreno</a></p>
      </div>
    </div>
    <div class="row">
      <div class="span12">
        <?php print render($page['footer']); ?>
      </div>
    </div>
  </div>
</footer>

<script>

  $(document).ready(function(){

	  // fancy animation - fade out header content on page scroll
    $(window).scroll(function() {
      if ($(this).scrollTop() > 100) {
        $('.js-animated').stop().animate({opacity: 0}, 800);
      }
      if ($(this).scrollTop() < 100) {
        $('.js-animated').stop().animate({opacity: 1}, 500);
      }

      //Navigation bar fixed
      if ($(this).scrollTop() > $('div.showcase').height()) {
        $('body').addClass('fixed');
        $('.strip').addClass('navbar-fixed-top').stop().animate({opacity: 0.95}, 800);
        
      }
      if ($(this).scrollTop() < $('div.showcase').height()) {
      	$('body').removeClass('fixed');
        $('.strip').removeClass('navbar-fixed-top').stop().animate({opacity: 1}, 500);
      }

    });

    //bootstrap tooltip trigger
    $('[rel="tooltip"]').tooltip();
  });

</script>
