<article id="post-<?php the_ID(); ?>" <?php post_class('post-odd'); ?>>
    <a href="<?php echo esc_url( get_permalink() );?>" rel="bookmark">
        <div class="col-50" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>);">
        </div><!--
        --><div class="col-50">
            <div class="post-content">
                <h2><?php the_title();?></h2>
                <?php echo the_content();?>
            </div>
        </div>
        <div class="overlay"><p>Voir la recette</p></div>
    </a>
</article><!-- #post-## -->
