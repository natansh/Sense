<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Sense 
 * @since Sense 0.01a
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h2 class="entry-title"><?php the_title(); ?></h2>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php the_content(); ?>
        <?php edit_post_link( __( 'Edit', 'sense' ), '<span class="edit-link">', '</span>' ); ?>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
