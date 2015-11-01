<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel=apple-touch-icon href="<?php echo esc_url( get_template_directory_uri() ); ?>/apple-touch-icon.png">
	<link rel=stylesheet href="<?php echo esc_url( get_template_directory_uri() ); ?>/styles/main.css">
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/vendor/modernizr.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
  $is_landing_page = is_front_page();
?>
<header class="header">
	<?php if ( $is_landing_page ) : ?>
	<div class="header--top">
		<div class="container">
			<div class="row">
				<?php
				  $my_lang_cur = get_locale();
				  $my_lang_url = '/en/';
				  if ($my_lang_cur == 'en') {
					  $my_lang_url = '/ru/';
				  }
				?>
				<div class="col-xs-12">
					<?php  if ($my_lang_cur == 'en') { ?>
						<a href="<?php echo esc_url(home_url($my_lang_url)); ?>" class="lang-switcher pull-right"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/flag-ru.png" height="9" width="14">Русский</a>
					<?php } else { ?>
						<a href="<?php echo esc_url(home_url($my_lang_url)); ?>" class="lang-switcher pull-right"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/flag-en.png" height="9" width="14">English</a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<div class="header--main hidden-xs hidden-sm">
		<div class=container>
			<div class=header--main-in>
				<div class=row>
					<div class=col-xs-1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <img src=<?php echo esc_url( get_template_directory_uri() ); ?>/images/KGL-logo.png height=53 width=109 alt="KGL Logo"> </a></div>
					<div class=col-xs-11>
						<?php wp_nav_menu( array(
							'theme_location' => 'header',
							'container' => 'nav',
							'container_class' => 'header--nav',
							'menu_class' => '' ) );
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<nav id="<?php if ($is_landing_page) : ?>main-menu-index<?php else : ?>menu<?php endif ?>"
		 class="navbar navbar-default navbar-fixed-top<?php if ($is_landing_page) : ?> navbar-home<?php endif; ?>">
		<div class=container>
			<div class=navbar-header>
				<button type=button class="navbar-toggle collapsed" data-toggle=collapse data-target=#bs-example-navbar-collapse-1>
					<span class=sr-only>Toggle navigation</span>
					<span class=icon-bar></span>
					<span class=icon-bar></span>
					<span class=icon-bar></span>
				</button>
				<a class=navbar-brand href="<?php echo esc_url(home_url($my_lang_url)); ?>"> <img src=<?php echo esc_url( get_template_directory_uri() ); ?>/images/KGL-logo.png alt="KGL Logo"> </a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<?php wp_nav_menu( array(
					'theme_location' => 'header_sticky',
					'menu_class' => 'nav navbar-nav navbar-right',
					'container' => false
				) ); ?>
			</div>
		</div>
	</nav>
</header>