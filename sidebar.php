<!-- sidebar -->
<aside class="sidebar" role="complementary">

	<!-- RELATED RECIPES -->
	    <section class="relatedrecipes">
	      <img class="decor3" src="<?php bloginfo('template_url'); ?>/assets/dist/img/blogdecor.png" alt="Blog Decor" title="Blog Decor">
	      <h3 class="featured">RELATED RECIPES</h3>
	      <img class="decor4" src="<?php bloginfo('template_url'); ?>/assets/dist/img/blogdecor2.png" alt="Blog Decor 2" title="Blog Decor 2">
	    </section>

		<div class="blogflex">
			<div class="blog-items">
				<div class="sidebar-widget">
					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
				</div>
			</div>
		</div>

</aside>
<!-- /sidebar -->
