<?php get_header(); ?>

    <div class="site-content flex-grow-1 flex-shrink-0 mt-5 mt-md-0">
        <section class="page mt-3">
            <div class="container">
                <?php get_template_part( 'template-parts/temp-page-header' ); ?>
                <div class="page-content">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="card px-3 pt-3 mb-5 bg-light contacts-address">
                                <address><?php dynamic_sidebar( 'address-1' ); ?></address>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-8">
                            <div class="contacts-map w-100">
                                <?= get_post_meta( $post->ID, 'google_map', true ); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-4">
                            <?php the_post_thumbnail( 'large', array( 'class' => 'contacts-img img-fluid' ) ); ?>
                        </div>
                        <div class="col-lg-8">
                            <div class="card shadow mt-3 mt-lg-0">
                                <div class="card-header bg-secondary">
                                    <h2 class="card-title lead text-light m-0">Оставить заявку</h2>
                                </div>
                                <div class="card-body">
                                    <?= do_shortcode( '[contact-form-7 id="14" title="form_on_contacts_page"]' ) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php get_footer(); ?>