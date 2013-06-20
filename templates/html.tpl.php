<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>

  <?php print $page_top; ?>

  <?php print $page; ?>

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
  <?php print $page_bottom; ?>
</body>
</html>
