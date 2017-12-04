<?php
/**
* WP Post Template: Menu Items
*/

get_header(); ?>

<main id="flexedcupcakes">
  <section id="cupcakebanner">
    <img class="caramelcupcakes" src="<?php bloginfo('template_url'); ?>/assets/dist/img/blog-cupcakes.jpg">
  </section>

  <section id="cupcakebody">
    <h5>Mini</h5>
    <p class="cupcaketype">Buttercream $1</p>
    <p class="cupcaketype">Fondant $2</p>
    <p class="cupcaketype">Filling $0.25</p>

    <h5>Regular</h5>
    <p class="cupcaketype">Buttercream $2</p>
    <p class="cupcaketype">Fondant $3</p>
    <p class="cupcaketype">Filling $0.50</p>

    <h5>Jumbo</h5>
    <p class="cupcaketype">Buttercream $3</p>
    <p class="cupcaketype">Fondant $4</p>
    <p class="cupcaketype">Filling $0.75</p>
  </section>
</main>

<?php get_footer(); ?>
