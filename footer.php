<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Sense
 * @since Sense 0.01a
 */
?>
    <div class="clearfix"></div>
    </div><!-- #main -->

    <footer id="colophon" role="contentinfo">
        <div id="site-generator">
            <?php do_action( 'sense_credits' ); ?>
            <span class="powered-by"><?php printf( __( 'Proudly powered by', 'sense' )); ?><a href="<?php echo esc_url( __( 'http://wordpress.org/', 'sense' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'sense' ); ?>" rel="generator">&nbsp;Wordpress.</a></span>
            <span class="theme-by"><?php printf( __( 'Uses the theme %1$s by %2$s.', 'sense' ), '<a href="http://www.ionsofimagination.com/sense">Sense</a>', '<a href="http://www.ionsofimagination.com/" rel="designer">Ions of Imagination</a>' ); ?></span>
        </div>
    </footer><!-- #colophon -->
</div><!-- #page -->

<!-- JavaScript at the bottom for fast page loading -->

<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php get_bloginfo('template_url') ?>/js/libs/jquery-1.6.2.min.js"><\/script>')</script>


<!-- scripts concatenated and minified via ant build script-->
<script defer src="<?php get_bloginfo('template_url') ?>/js/plugins.js"></script>
<script defer src="<?php get_bloginfo('template_url') ?>/js/script.js"></script>
<!-- end scripts-->

<!-- Change UA-XXXXX-X to be your site's ID -->
<!-- =| Sense |= TODO
    Activate Google Analytics later. -->
<script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
        load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
</script>


<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
    chromium.org/developers/how-tos/chrome-frame-getting-started -->
<!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->

<?php wp_footer(); ?>

</body>
</html>
