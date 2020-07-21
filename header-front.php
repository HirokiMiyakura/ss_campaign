<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
<link href="//www.google-analytics.com" rel="dns-prefetch">
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ress.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php bloginfo('description'); ?>">
<?php wp_head(); ?>
<script>
// conditionizr.com
// configure environment tests
conditionizr.config({
		assets: '<?php echo get_template_directory_uri(); ?>',
		tests: {}
});
</script>
</head>
<body id="ss_campaign" <?php body_class(); ?>>
<style>
@media all and (-ms-high-contrast: none) {
  header h1 img {
    margin-top: 0;
  }
}
</style>
<!-- header -->
<header class="header clear frontHeader" role="banner">
<!-- logo -->
<div class="logo">
<h1>
<a href="<?php echo home_url(); ?>">
<img src="<?php echo get_template_directory_uri(); ?>/img/ss/logo.svg" alt="Single Support" />
</a>
</h1>
</div>
<!-- /logo -->

<div class="sp" id="navArea">
<nav>
	<div class="inner">
		<ul>
			<li><a href="<?php echo home_url(); ?>/gototravel/">GoTo Travel<br>キャンペーン</a></li>
			<li><a href="<?php echo home_url(); ?>/realestate/">不動産<br>活用方法</a></li>
			<li><a href="<?php echo home_url(); ?>/ending/">新しい人生の<br>終まい方</a></li>
		</ul>
	</div>
</nav>
<div class="toggle_btn front_toggle_btn">
	<span></span>
	<span></span>
	<span></span>
</div>
<div id="mask"></div>
</div>

<!-- div -->
<div class="topHeaderNav pc" role="navigation">
<div class="topHeaderContainer">
	<div class="topHeaderContainerItem">
		<a href="<?php echo home_url(); ?>/gototravel/">GoTo Travel<br>キャンペーン</a>
	</div>
	<div class="topHeaderContainerItem">
		<a href="<?php echo home_url(); ?>/realestate/">不動産<br>活用方法</a>
	</div>
	<div class="topHeaderContainerItem">
		<a href="<?php echo home_url(); ?>/ending/">新しい人生の<br>終まい方</a>
	</div>
</div>
</div>
<!-- /div -->
</header>
<!-- /header -->
