<hr class="separator" />
<div class="post-mini-list">
    <?php
    $all_posts = new WP_Query(array(
        'posts_per_page' => 4,
        'post__not_in' => [get_the_ID()],
        'orderby' => 'rand',
    ));
    while ( $all_posts->have_posts() ) : $all_posts->the_post();
        get_template_part(
            'template-parts/post/content-mini-'
            .($all_posts->current_post % 2 == 0 ? 'even' : 'odd')
        );
    endwhile;
    ?>
</div>
