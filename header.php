<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title();?></title>
  <link rel="apple-touch-icon" sizes="57x57" href="<?=get_template_directory_uri();?>/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?=get_template_directory_uri();?>/favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?=get_template_directory_uri();?>/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?=get_template_directory_uri();?>/favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?=get_template_directory_uri();?>/favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?=get_template_directory_uri();?>/favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?=get_template_directory_uri();?>/favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?=get_template_directory_uri();?>/favicons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?=get_template_directory_uri();?>/favicons/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" href="<?=get_template_directory_uri();?>/favicons/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="<?=get_template_directory_uri();?>/favicons/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="<?=get_template_directory_uri();?>/favicons/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="<?=get_template_directory_uri();?>/favicons/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="<?=get_template_directory_uri();?>/favicons/manifest.json">
  <link rel="mask-icon" href="<?=get_template_directory_uri();?>/favicons/safari-pinned-tab.svg" color="#5bbad5 ">
  <meta name="msapplication-TileColor" content="#da532c ">
  <meta name="msapplication-TileImage" content="<?=get_template_directory_uri();?>/favicons/mstile-144x144.png">
  <meta name="theme-color" content="#ffffff ">
	<?php wp_head();?>

</head>
<body <?php the_title();?>>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-78081607-1', 'auto');
  ga('send', 'pageview');

</script>
<div class="top-bar hide-for-small-only">
  <div class="row">
    <div class="medium-2 columns">
      <ul class="menu">
        <li><a href="<?php the_field('facebook_url', 'options'); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="<?php the_field('twitter_url', 'options'); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li><a href="<?php the_field('instagram_url', 'options'); ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
        <li><a href="<?php the_field('youtube_url', 'options'); ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
      </ul>
    </div>
    <div class="medium-10 columns">
      <?php wp_nav_menu(array('theme_location' => 'top_bar', 'container' => '', 'menu_class' => 'menu float-right'));?>
    </div>
  </div>
</div>
<header class="primary-header">
  <div class="row">
    <div class="medium-4 columns">
      <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><img src="<?=get_template_directory_uri();?>/images/primary-logo.png" alt="<?php bloginfo('name'); ?> Logo"></a>
    </div>
    <div class="medium-8 columns hide-for-small-only">
      <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => '', 'menu_class' => 'menu float-right'));?>
    </div>
  </div>
</header>