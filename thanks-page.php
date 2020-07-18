<?php
/*
Template Name: サンクスページ（thanks-page.php）
*/
?>
<?php get_header(); ?>
<main role="main">
<h1 class="contact_title"><img src="<?php echo get_template_directory_uri(); ?>/img/contact_title.svg" alt="お問い合わせ" /></h1>
<!-- section -->
<section>
<h2 class="thanks_title">お問い合わせありがとうございました</h2>
<p>お問い合わせは無事に送信されました。<br>
ご確認のため、自動返信メールをお送りいたしました。<br>
</p>
<p class="to_top"><a href="<?php echo home_url(); ?>">トップページに戻る</a></p>
</section>
<!-- /section -->
</main>
<?php get_footer(); ?>
