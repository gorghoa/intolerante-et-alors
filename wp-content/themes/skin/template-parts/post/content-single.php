<div class="post-single">
    <header class="post-header">
        <div class="stretched-background" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>);"></div>
        <h1 class="content-area page-sized"><?php the_title();?></h1>
    </header>
    <div id="primary" class="content-area page-sized">
        <main id="main" class="site-main" role="main">
            <article id="post-<?php the_ID(); ?>" <?php post_class('post-single'); ?>>
                <div class="post-content">
                    <?php if (get_field('ingredients')) :?>
                        <div class="ingredients">
                            <h2><span>Ingrédients</span></h2>
                            <?php the_field('ingredients'); ?>
                        </div>
                    <?php endif; ?>
                    <?php echo the_content();?>
                </div>
            </article>

            <hr class="separator separator-light" />

            <?php echo comments_template(); ?>

            <?php get_template_part( 'template-parts/post/content-mini-list' ); ?>

        </main><!-- #main -->
    </div><!-- .content-area -->
</div>
