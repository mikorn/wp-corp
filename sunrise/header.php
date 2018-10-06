<!DOCTYPE html>
<html class="h-100">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body class="bg-light h-100">
<div class="site mx-auto d-flex flex-column h-100 w-100 position-relative">
    <header class="site-header">
        <div class="container position-relative">
            <div class="header-btn header-top shadow" id="header-btn">Меню</div>
            <div class="header-phone header-top shadow">+7 (123) 456-78-90</div>
            <nav class="header-menu" id="header-menu">
                <ul class="h-100 w-100 d-flex flex-column justify-content-center align-items-center">
                    <li class="text-center my-3"><a class="lead text-light text-uppercase" href="http://localhost:3000">Главная</a></li>
                    <li class="text-center my-3"><a class="lead text-light text-uppercase" href="about.html">О компании</a></li>
                    <li class="text-center my-3"><a class="lead text-light text-uppercase" href="objects.html">Наши объекты</a></li>
                    <li class="text-center my-3"><a class="lead text-light text-uppercase" href="news.html">Новости</a></li>
                    <li class="text-center my-3"><a class="lead text-light text-uppercase" href="contacts.html">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </header>