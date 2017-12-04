<?php
/*
Template Name: Contact
*/
get_header(); ?>

    <!-- CONTACT BANNER -->
    <img class="contactbanner" src="<?php bloginfo('template_url'); ?>/assets/dist/img/contact-banner.png" alt="Contact Us" title="Contact Us">

    <!-- CONTACT FORM-->
    <?= do_shortcode('[contact-form-7 id="62" title="Untitled"]') ?>

<?php get_footer(); ?>
