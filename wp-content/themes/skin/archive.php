<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<main id="primary" class="content-area page-sized">

    <main id="main" class="site-main" role="main">

        <h1 class="archive-title"><?php single_cat_title(); ?></h1>
        <hr class="separator separator-light" />

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

	</main><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
