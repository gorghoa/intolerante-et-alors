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

<div id="primary" class="content-area page-sized">
    <?php if ( is_front_page() ) : ?>
        <p class="introduction"><?php echo get_introduction(); ?></p>
        <hr class="separator separator-light" />
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

            <p class="pagination">
            <?php
                next_posts_link( '<span class="page-previous">Recettes précédentes</span>' );
                previous_posts_link( '<span class="page-next">Recettes suivantes</span>' );
            ?>
            </p>
        <?php
        endif;
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
