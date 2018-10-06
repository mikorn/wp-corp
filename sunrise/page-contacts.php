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
                                <address><strong>Organization name</strong><br>Ivanova str., 17<br>Moscow<br>Russian Federation, 123456<br><a href="mailto:example@example.com">example@example.com</a></address>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-8">
                            <div class="contacts-map w-100">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d577336.7642059308!2d36.82512580492329!3d55.58074806111345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54afc73d4b0c9%3A0x3d44d6cc5757cf4c!2z0JzQvtGB0LrQstCw!5e0!3m2!1sru!2sru!4v1534497550466" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen=""></iframe>
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
                                    <form>
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Ваше имя" required>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="email" placeholder="Email" required>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="phone" placeholder="Телефон" required>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Должность">
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option class="selected">Организация</option>
                                                <option>Государственное учреждение</option>
                                                <option>НКО</option>
                                                <option>Компания</option>
                                                <option>Другое</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Сайт" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="5" placeholder="Дополнительная информация"></textarea>
                                        </div>
                                        <div class="form-group text-center">
                                            <button class="btn btn-theme" type="submit">Отправить</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php get_footer(); ?>