<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package typefocus
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="author-image"><img src="<?php echo get_theme_mod( 'typefocus_author_image' )?>"/></div>
		
		<!-- Social Icons -->
		<div class="header-social">
			<?php	
				$social_array = get_theme_mod(typefocus_social);
				foreach ($social_array as $this_social=>$social_link){
					$img_icon = "fa fa-".str_replace("tf_","",$this_social)."-square";
					if ($social_link) {
						print "<a href=\"$social_link\">";
						print "<i class=\"$img_icon\"></i>";
						print"</a>";
					}
				}		
			?>
		</div>		
		
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'typefocus' ); ?></h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'typefocus' ); ?></a>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
		
		<!-- disclaimer -->
		<?php if( get_theme_mod(typefocus_disclaimer) ): ?>
		<div id="disclaimer" >
			<i class="fa fa-quote-left pull-left fa-border"></i>
			All opinions and articles on this website are my own,
			and not representative of the organization that I'm employed by.
		</div>
		<?php endif; ?>
		

	</header><!-- #masthead -->

	<div id="content" class="site-content">