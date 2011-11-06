<?php
/**
 * The template for displaying posts in the Status Post Format on index and archive pages
 *
 * Learn more: http://codex.wordpress.org/Post_Formats
 *
 * @package WordPress
 * @subpackage Sense 
 * @since Sense 0.01a 
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php sense_post_format(substr(get_post_format(), 0, 2), get_post_format()); ?>
    <header class="entry-header">
        <?php sense_posted_on(); ?>
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'sense' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
    </header><!-- .entry-header -->

    <?php if ( is_search() ) : // Only display Excerpts for search pages ?>
    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div><!-- .entry-summary -->
    <?php else : ?>
    <div class="entry-content">
        <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'sense' ) ); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'sense' ), 'after' => '</div>' ) ); ?>
    </div><!-- .entry-content -->
    <?php endif; ?>

    <footer class="entry-meta">
        <?php if ( comments_open() || ( '0' != get_comments_number() && ! comments_open() ) ) : ?>
        <span class="comments-link"><?php sense_comments_popup_link() ?> </span>
        <?php endif; ?>
        <?php edit_post_link( __( 'Edit', 'sense' ), '<span class="sep"> | </span><span class="edit-link">', '</span>' ); ?>
    </footer><!-- #entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
