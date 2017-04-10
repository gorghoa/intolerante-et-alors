<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

    </div><!-- #content -->

    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="page-sized">

            <nav class="category-list">
                <ul>
                    <?php wp_list_categories(['title_li' => '']) ?>
                </ul>
            </nav>

            <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/logo-blanc.png" width="50%" alt="<?php bloginfo( 'name' ); ?>" />
        </div><!-- .wrap -->
    </footer><!-- #colophon -->
</div><!-- .site-content-contain -->
<?php wp_footer(); ?>

</body>
</html>
