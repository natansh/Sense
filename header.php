<?php
/**
 * The Header for Sense.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 * This work has been derived from HTML5 Boilerplate, Toolbox, Starkers and Basics.
 * It takes heavy inspiration from Ethan Marcotte's book - Responsive Web Design.
 *
 * @package WordPress
 * @subpackage Sense
 * @since Sense 0.01a
 */
?><!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <!-- Use the .htaccess and remove these lines to avoid edge case issues.
        More info: h5bp.com/b/378 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php
    /*
     * Print the <title> tag based on what is being viewed.
     */
    global $page, $paged;

    // wp_title( $sep, $echo, $seplocation );
    wp_title( '|', true, 'right' );

    // Add the blog name.
    bloginfo( 'name' );

    // Add the blog description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";

    // Add a page number if necessary:
    if ( $paged >= 2 || $page >= 2 )
        echo ' | ' . sprintf( __( 'Page %s', 'sense' ), max( $paged, $page ) );

    ?></title>

    <!-- =| Sense |= TODO
        I don't know what to do with these two following meta tags of description and author.
        It doesn't make sense to have the theme description and theme author name in this as default.
        Hence leaving it blank.
    <meta name="description" content="">
    <meta name="author" content=""> -->

    <!-- Mobile viewport optimized: j.mp/bplateviewport -->
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

    <!-- =| Sense |= TODO
        Is there a need for XFN stuff? I saw somewhere that it isn't needed in HTML5 themes. -->
    <link rel="profile" href="http://gmpg.org/xfn/11" />

    <!-- CSS: implied media=all -->
    <!-- CSS concatenated and minified via ant build script-->
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/style.css">
    <!-- end CSS-->
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

    <!-- =| Sense |= TODO
        Figure out what pingback is all about. -->
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" /> 

    <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

    <!-- All JavaScript at the bottom, except for Modernizr / Respond.
        Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
        For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
    <script src="<?php bloginfo('template_url') ?>/js/libs/modernizr-2.0.6.min.js"></script>

    <!-- Including typekit before, so as to try and prevent a flash of alt fonts. This might or might not work. -->
    <script type="text/javascript" src="http://use.typekit.com/hcb5ekl.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
    <header id="branding" role="banner">
        <div id = "site-title">
            <h1><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        </div>
        <div id = "site-description">
            <p><?php bloginfo( 'description' ); ?></p>
        </div>

    </header><!-- #branding -->
    <nav id="access" role="navigation">
        <h2 class="section-heading visuallyhidden"><?php _e( 'Main menu', 'sense' ); ?></h2>
        <div class="visuallyhidden"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'sense' ); ?>"><?php _e( 'Skip to content', 'sense' ); ?></a></div>

        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </nav><!-- #access -->

    <div id="main">
