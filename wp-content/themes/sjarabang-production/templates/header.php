<?php use Roots\Sage\Nav\NavWalker; ?>

<header class="banner navbar navbar-default navbar-static-top" role="banner">

  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
        <img src="<?php echo get_bloginfo('template_directory');?>/dist/images/logo.png" alt="Sjarabang">
      </a>
    </div>


    <nav class="collapse navbar-collapse" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new NavWalker(), 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
        <!-- SEARCH FORM -->
    <form method="get" id="search_form" action="<?php bloginfo('home'); ?>"/>
       <input type="text" class="text" name="s" value="" >
       <input type="submit" class="submit" value="zoeken"  />
    </form>
    <!-- END SEARCH FORM -->
    </nav>

  </div>
  <div class="hero"></div>
</header>
