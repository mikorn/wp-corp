<?php get_header(); ?>

    <div class="site-content flex-grow-1 flex-shrink-0 mt-5 mt-md-0">
        <section class="page mt-3">
            <div class="container">
                <div class="page-header mb-4">
                    <h1 class="h2 page-title font-weight-normal text-center text-muted">Контакты</h1>
                    <div class="page-subtitle lead text-center text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, iure?</div>
                </div>
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
                        <div class="col-lg-4"><img class="contacts-img img-fluid" src="assets/images/contacts/office.jpg" alt="Office"></div>
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