<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<style>

<?php

	$check_url = $_SERVER['REQUEST_URI']; 

	if ($check_url =='/bio') {
		print "#nav-bio {background-position: -62px 0px;}";
	}else if ($check_url =='/media'){
		print "#nav-media {background-position: -129px 0px;}";
	}else if ($check_url =='/contact'){
		print "#nav-contact {background-position: -181px 0px;}";
	}else if ($check_url =='/sound'){
		print "#nav-sounds {background-position: -124px 0px;}";
	}

?>
</style>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20789423-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body <?php body_class(); ?>>

<div id="wrapper" class="hfeed">
	<div id="header">
		<div id="masthead">
			<div id="branding" role="banner">
				<div style="float:left;">
	                <a href="/home"><div id="page_title"></div></a>
				</div>
                <div id="header-nav">
			  		<a href="/contact"><div id="nav-contact"></div></a><br/>
			  		<a href="/media"><div id="nav-media"></div></a><br/>
			  		<a href="/sound"><div id="nav-sounds"></div></a><br/>
			  		<a href="/bio"><div id="nav-bio"></div></a>
				</div><!-- #nav -->
			</div><!-- #branding -->

			
		</div><!-- #masthead -->
	</div><!-- #header -->

	<div id="main">
