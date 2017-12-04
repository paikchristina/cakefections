<?php get_header(); ?>

<!-- RECIPE OF THE WEEK -->
      <div>
        <h4 class="blogtitle">Recipe of the Week</h4>
      	<h3 class="bi">PERFECT MACARONS EVERYTIME</h3>
        <h4 class="secondblogtitle"><span class="blogby">by</span> DIANA WILLIAMS</h4>

        <a href="<?php the_permalink(); ?>">><img class="blogbanner" src="<?php bloginfo('template_url'); ?>/assets/dist/img/blog-macarons.jpg" alt="Perfect Macarons" title="Perfect Macarons"></a>
      </div>

			<!-- FEATURED RECIPES -->
      <?php if (have_posts()) : ?>

      <img class="decor" src="<?php bloginfo('template_url'); ?>/assets/dist/img/blogdecor.png" alt="Blog Decor" title="Blog Decor">
      <h3 class="featured">FEATURED RECIPES</h3>
      <img class="decor2" src="<?php bloginfo('template_url'); ?>/assets/dist/img/blogdecor2.png" alt="Blog Decor 2" title="Blog Decor 2">

      <div class="firstflex">

        <?php while (have_posts()) : the_post(); ?>

        <div class="menu-catering2">
  				<h4 class="bcd"><?php the_title (); ?></h4>
  				<a href="<?php the_permalink(); ?>"><img class="home2" src="<?php the_post_thumbnail(); ?></a>
			  </div>

        <?php endwhile; ?>
			</div>
    <?php endif; ?>

<?php get_footer(); ?>
