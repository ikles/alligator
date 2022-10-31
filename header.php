<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--meta name="viewport" content="width=device-width, initial-scale=1"-->
	<meta name="viewport" content="width=device-width, maximum-scale=1">
	<!--meta name="viewport" content="width=1920px"-->
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>		
	<?php wp_head(); ?>
	<script>
		//jQuery.noConflict();
	</script>	
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<? bloginfo('template_url') ?>/css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="<? bloginfo('template_url') ?>/css/slick.css">
	<link rel="stylesheet" href="<? bloginfo('template_url') ?>/css/main.css">
	<!--link rel="icon" type="image/png" href="http://ikles.ru/wp-content/themes/mif/img/icon.png" /-->
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body <?php body_class(); ?>>	
	<?php wp_reset_postdata(); ?>
	<div class="wrapper">
<?php
$post = get_post(596);
?>
<div class="top">
  <div class="contain">
    <div class="top__row">
      <a href="/" class="logo">
        <img src="<? bloginfo('template_url') ?>/img/logo.svg" class="logo__img" />
        <div class="logo__txt">Производим аэролодки с <b>2010</b> года</div>
      </a>
      <div class="col-mnu">
        <div class="hidden-mnu">
          <a href="#" class="toggle-mnu"><span></span></a>
        </div>
        <div class="top__mnu">
					<span class="open-mnu-close"></span>
          <?php wp_nav_menu('menu=top_menu'); ?>
        </div>
      </div>
      <div class="top__conts">
        <div class="top__socs">
          <a href="<?php echo get_field('vk'); ?>" class="top__soc"><img src="<? bloginfo('template_url') ?>/img/vkcom.svg" /></a>
          <a href="<?php echo get_field('ok'); ?>" class="top__soc"><img src="<? bloginfo('template_url') ?>/img/ok.svg" /></a>
          <a href="<?php echo get_field('youtube'); ?>" class="top__soc"><img src="<? bloginfo('template_url') ?>/img/youtube.svg" /></a>
        </div>
        <a href="tel:<?php echo get_field('top_phone'); ?>" class="top__phone"><?php echo get_field('top_phone'); ?></a>
      </div>
    </div>
  </div>
</div>
<?php wp_reset_query(); ?>