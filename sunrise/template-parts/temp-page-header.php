<div class="page-header mb-4">
    <h1 class="h2 page-title font-weight-normal text-center text-muted"><?php the_title(); ?></h1>
    <div class="page-subtitle lead text-center text-secondary"><?= get_post_meta( $post->ID, 'page_description', true ); ?></div>
</div>