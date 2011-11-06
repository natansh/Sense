<?php
/**
 * @package WordPress
 * @subpackage Sense
 * @since Sense 0.01a
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php sense_post_format(substr(get_post_format(), 0, 2), get_post_format()); ?>
    <header class="entry-header">
        <div class="entry-meta">
            <?php sense_posted_on(); ?>
        </div><!-- .entry-meta -->
        <h2 class="entry-title"><?php the_title(); ?></h2>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'sense' ), 'after' => '</div>' ) ); ?>
    </div><!-- .entry-content -->

    <footer class="entry-meta">
        <?php
            /* translators: used between list items, there is a space after the comma */
            $category_list = get_the_category_list( __( ', ', 'sense' ) );

            /* translators: used between list items, there is a space after the comma */
            $tag_list = get_the_tag_list( '', ', ' );

            if ( ! sense_categorized_blog() ) {
                // This blog only has 1 category so we just need to worry about tags in the meta text
                if ( '' != $tag_list ) {
                    $meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'sense' );
                } else {
                    $meta_text = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'sense' );
                }

            } else {
                // But this blog has loads of categories so we should probably display them here
                if ( '' != $tag_list ) {
                    $meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'sense' );
                } else {
                    $meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'sense' );
                }

            } // end check for categories on this blog

            printf(
                $meta_text,
                $category_list,
                $tag_list,
                get_permalink(),
                the_title_attribute( 'echo=0' )
            );
        ?>

        <?php edit_post_link( __( 'Edit', 'sense' ), '<span class="edit-link">', '</span>' ); ?>
    </footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
