<html lang="ja">
  <head>
    <link
      href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Dosis:wght@600&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Florence | 群馬大学医学部女子専用アパート</title>
    <meta name="description" content="Florenceは群馬大学医学部の女子学生専用アパートです。大学のすぐ近くにあるので、通学も徒歩2分です。" />
    <meta name="keywords" content="群馬,群馬大学医学部,アパート,女性,学生,一人暮らし" />
    <?php wp_head(); ?>
  </head>
<body <?php body_class(); ?>>
  <header class="header">
    <div class="header__logo">
      <a href="<?php echo esc_url(home_url()); ?>">
        <img
          class="header__pc-logo"
          src="<?php echo get_stylesheet_directory_uri(); ?>/img/Florence_logo.svg"
          alt="Florence"
        />
        <img
          class="header__mobile-logo"
          src="<?php echo get_stylesheet_directory_uri(); ?>/img/Florence_logo_mobile.svg"
          alt="Florence"
        />
      </a>
    </div>
    <nav class="navigation">
      <ul class="navigation__card">
        <?php if (!isGallery() && !isSingle()) { ?>
          <li class="navigation__item">
            <a class="navigation__link" href="#about">About</a>
          </li>
          <?php if (isTop()) { ?>
            <li class="navigation__item">
              <a class="navigation__link" href="#apartment">Apartment</a>
            </li>
          <?php } ?>
          <?php if (isFlorenceA() || isFlorenceB()) { ?>
            <li class="navigation__item">
              <a class="navigation__link" href="#feature">Feature</a>
            </li>
            <li class="navigation__item">
              <a class="navigation__link" href="#gallery">Gallery</a>
            </li>
          <?php } ?>
          <li class="navigation__item">
            <a class="navigation__link" href="#information">Information</a>
          </li>
        <?php } ?>
        <li class="navigation__item">
          <a class="navigation__link" href="#contact">Contact</a>
        </li>
      </ul>
      <button class="navigation__button">
        <span class="navigation__button-line"></span>
        <span class="navigation__button-line"></span>
        <span class="navigation__button-line"></span>
      </button>
    </nav>
  </header>
  <div class="menu__background"></div>