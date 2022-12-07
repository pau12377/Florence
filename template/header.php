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
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/css/lightgallery.min.css"
    />
	  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/css/lg-thumbnail.min.css"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Florence</title>
    <?php wp_head(); ?>
  </head>
<body <?php body_class(); ?> >
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
		    <?php if (!isGallery()) { ?>
			  <li class="navigation__item">
				  <a class="navigation__link" href="#about">About</a>
				</li>
			  <?php if (isTop()) { ?>
				<li class="navigation__item">
				  <a class="navigation__link" href="#apartment">Apartment</a>
			  </li>
				<?php } ?>
			  <?php if (!isTop()) { ?>
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
