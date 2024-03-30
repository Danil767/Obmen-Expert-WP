<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php bloginfo('name'); ?></title>
  <meta property="image" content="<?php bloginfo('template_url'); ?>/assets/fonts/Logo%20small%20white.svg">
  <meta name="title" content="Obmen Expert - биржа криптовалют">
  <meta <?php bloginfo('description'); ?>>

  <?php wp_head() ?>

</head>

<body>

  <div class="wrapper">

    <div class="preloader" style="display: none;">
      <div class="preloader__circle"></div>
    </div>

    <header class="header wow animate__fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
      <div class="container header__container">
        <div class="header__body">
          <a class="header__logo header__logo-hide" href="/">
            <span class="header__logo header__link" href="/" style="font-size: 30px; color: #007eda;">Obmen Expert</span>
          </a>

          <div class="header__hide">
            <a class="header__logo" href="/">
              <span class="header__logo header__link" href="/" style="font-size: 30px; color: #007eda;">Obmen Expert</span>
            </a>
            <nav class="header__nav">
              <ul class="header__list">
                <li class="header__item">
                  <a class="header__link" href="#exchange">Обмен</a>
                </li>
                <li class="header__item">
                  <a class="header__link" href="#how-exchange">Как обменять</a>
                </li>
                <li class="header__item">
                  <a class="header__link" href="#transactions">Транзакции</a>
                </li>
                <li class="header__item">
                  <a class="header__link" href="#support">Поддержка</a>
                </li>
              </ul>
            </nav>

            <div class="header__wrapper">
              <a class="header__btn" href="#exchange">
                Обмен
              </a>
            </div>
          </div>
          <div class="header__burger">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        <div class="header__burger-content">
          <nav class="header__nav">
            <ul class="header__list">



              <li class="header__item">
                <a class="header__link" href="#exchange">Обмен</a>
              </li>
              <li class="header__item">
                <a class="header__link" href="#how-exchange">Как обменять</a>
              </li>
              <li class="header__item">
                <a class="header__link" href="#transactions">Транзакции</a>
              </li>
              <li class="header__item">
                <a class="header__link" href="#support">Поддержка</a>
              </li>
            </ul>
          </nav>
          <div class="header__wrapper">
            <a class="header__btn" href="#exchange">
              Обмен
            </a>
          </div>
        </div>
      </div>
    </header>