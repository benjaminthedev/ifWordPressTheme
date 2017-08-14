<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="https://api.feefo.com/api/javascript/insurance-focus" async></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<header class="main">
	<div class="container">

<div class="row">
	<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
		<a href="<?php echo get_option('home'); ?>/" class="main-logo">
			<img src="<?php bloginfo('template_directory'); ?>/img/Insurance-Focus-Logo.png" class="header-logo" alt="Insurance Focus" />
		</a>


	<a href="<?php echo get_option('home'); ?>/" class="small-logo">
		<img src="<?php bloginfo('template_directory'); ?>/img/Insurance-Focus-Logo-smn.png" class="header-logo-sm" alt="Insurance Focus" />
	</a>
	</div>
	<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
		<div class="telephone-number-header">
			<?php dynamic_sidebar('header-telephone-widget-area'); ?>
		</div>
		<br />
		<a href="mailto:info@insurancefocus.com.au" class="topHeaderMailto">info@insurancefocus.com.au</a>


	</div>
</div>





<div class="row">
	<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
	<?php wp_nav_menu( array( 'theme_location' => 'first-menu' ) ); ?>
	</div>
	<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
		<div class="telephone-number-header">
			<?php wp_nav_menu( array( 'theme_location' => 'second-menu' ) ); ?>
		</div>
	</div>
</div>

</div>




<div class="dark-menu">

<div class="container">
<div class="row">

		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0">
			<?php wp_nav_menu( array( 'theme_location' => 'third-menu' ) ); ?>
		</div>
	</div>
	</div>
</div>














<div class="container">
	<div class="col-md-8 offset-md-4 additional-header-info">
		<?php dynamic_sidebar('Home Sidebar'); ?>
	</div>
</div>
</header>


<div class="start-content"></div>
