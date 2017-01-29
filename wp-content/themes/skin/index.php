<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area page-sized">
	    <?php if ( is_front_page() ) : ?>
            <p class="introduction"><?php echo get_introduction(); ?></p>
            <hr class="separator" />
	    <?php endif; ?>


		<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>
                <div class="post-list">
                <?php
				while ( have_posts() ) : the_post();
					get_template_part(
                        'template-parts/post/content-'
                        .($wp_query->current_post % 2 == 0 ? 'even' : 'odd')
                    );
				endwhile;
				?>
                </div>

                <?php
				the_posts_pagination( array(
					'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
					'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
				) );


			endif;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
