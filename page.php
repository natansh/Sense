<?php
/** 
 * The page template file
 * 
 * This part of Sense is heavily derived from Toolbox.
 *
 * @package WordPress
 * @subpackage Sense
 * @since Sense 0.01a
 */

get_header(); ?>
        <div id="primary">
            <div id="content" role="main">
                <?php the_post(); ?>
                <?php get_template_part( 'content', 'page'); ?>
                <hr/>
            </div><!-- #content -->
        </div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
