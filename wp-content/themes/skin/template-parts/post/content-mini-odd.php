<article id="post-<?php the_ID(); ?>" <?php post_class('post-mini-odd'); ?> style="background-image: url(<?php echo get_the_post_thumbnail_url();?>);">
    <a href="<?php echo esc_url( get_permalink() );?>" rel="bookmark">
        <div class="post-content">
            <h2><?php the_title();?></h2>
        </div>
        <div class="overlay"><p>Voir la recette</p></div>
    </a>
</article>
