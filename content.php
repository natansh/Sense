<?php
/**
 * @package WordPress
 * @subpackage Sense
 * @since Sense 0.01a 
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <div class="entry-meta">
            <?php sense_posted_on(); ?>
        </div><!-- .entry-meta -->
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'sense' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
    </header><!-- .entry-header -->

    <?php if ( is_search() ) : // Only display Excerpts for Search ?>
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
        <?php if ( 'post' == get_post_type() ) : ?>
        <?php endif; ?>

        <?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
            <?php
                /* translators: used between list items, there is a space after the comma */
                $categories_list = get_the_category_list( __( ', ', 'sense' ) );
                if ( $categories_list && sense_categorized_blog() ) :
            ?>
            <span class="cat-links">
                <?php printf( __( 'Posted in %1$s', 'sense' ), $categories_list ); ?>
            </span>
            <span class="sep"> | </span>
            <?php endif; // End if categories ?>

            <?php
                /* translators: used between list items, there is a space after the comma */
                $tags_list = get_the_tag_list( '', __( ', ', 'sense' ) );
                if ( $tags_list ) :
            ?>
            <span class="tag-links">
                <?php printf( __( 'Tagged %1$s', 'sense' ), $tags_list ); ?>
            </span>
            <span class="sep"> | </span>
            <?php endif; // End if $tags_list ?>
        <?php endif; // End if 'post' == get_post_type() ?>

        <?php if ( comments_open() || ( '0' != get_comments_number() && ! comments_open() ) ) : ?>
        <?php /*<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment ', 'sense' ) . "&#187;", __( '1 Comment ', 'sense' ) . "&#187;", __( '% Comments ', 'sense' ) . "&#187;" ); ?> </span> */ ?>
        <span class="comments-link"><?php sense_comments_popup_link() ?> </span>
        <?php endif; ?>

        <?php edit_post_link( __( 'Edit', 'sense' ), '<span class="edit-link">', '</span>' ); ?>
    </footer><!-- #entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
