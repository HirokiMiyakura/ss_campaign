<?php
/*
Template Name: お問い合わせページ（contact-page.php）
*/
?>
<?php get_header(); ?>
<main role="main">
<h1 class="contact_title"><img src="<?php echo get_template_directory_uri(); ?>/img/ss/contact_title.svg" alt="お問い合わせ" /></h1>
<!-- section -->
<!-- <section id="CONTACT"> -->
  <div class="contact_inner">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; endif; ?>
    <?php echo do_shortcode( '[contact-form-7 id="6" title="コンタクトフォーム 1"]' ); ?>
  </div>
<!-- </section> -->
<!-- /section -->
</main>
<?php get_footer(); ?>
