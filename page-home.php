<?php
/*
Template Name: Home
*/
get_header(); ?>

  <!-- HOME BANNER -->
  <img class="banner" src="<?php bloginfo('template_url'); ?>/assets/dist/img/home-banner.png" alt="Fresh Custom Treats" title="Fresh Custom Treats">

  <!-- MENU / CATERING -->
  <div class="firstflex">
    <div class="menu-catering">
      <h4 class="mc">MENU</h4>
        <a href="http://localhost/menu/"><img class="home1" src="<?php bloginfo('template_url'); ?>/assets/dist/img/home-menu.jpg" alt="Menu" title="Menu"></a>
    </div>

    <div class="menu-catering">
      <h4 class="mc">CATERING</h4>
        <a href="http://localhost/catering/"><img class="home1" src="<?php bloginfo('template_url'); ?>/assets/dist/img/home-catering.jpg" alt="Catering" title="Catering"></a>
    </div>
  </div>

  <!-- ABOUT / BLOG / CONTACT -->
  <div class="firstflex">
    <div class="menu-catering2">
      <h4 class="abc">ABOUT</h4>
        <a href="http://localhost/about/"><img class="home2" src="<?php bloginfo('template_url'); ?>/assets/dist/img/home-about.jpg" alt="About" title="About"></a>
    </div>

    <div class="menu-catering2">
      <h4 class="abc">BLOG</h4>
      <a href="http://localhost/blog-index/"><img class="home2" src="<?php bloginfo('template_url'); ?>/assets/dist/img/home-blog.jpg" alt="Blog" title="Blog"></a>
    </div>

    <div class="menu-catering2">
      <h4 class="abc">CONTACT</h4>
      <a href="http://localhost/contact/"><img class="home2" src="<?php bloginfo('template_url'); ?>/assets/dist/img/home-contact.jpg" alt="Contact" title="Contact"></a>
    </div>
  </div>

<?php get_footer(); ?>
