<?php get_header(); ?>
<main>
  <div class="swiper inner">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/florenceA_main.jpg" alt="" />
      </div>
      <div class="swiper-slide">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/florenceB_main.jpg" alt="" />
      </div>
      <div class="swiper-slide">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/florenceA_main2.jpg" alt="" />
      </div>
      <div class="swiper-catchphrase__wrapper">
        <p class="swiper-catchphrase">
          群馬大学医学部<span class="swiper-catchphrase__small">から</span>
        </p>
        <p class="swiper-catchphrase">徒歩2分</p>
        <p class="swiper-catchphrase">女子限定アパート</p>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <?php include(get_template_directory() . '/include/news.php'); ?>
  <div class="about">
    <div class="inner" id="about">
      <div class="title">
        <h2 class="title__main">
          <span class="title__main--head">A</span>bout
        </h2>
        <h3 class="title__sub">Florenceについて</h3>
      </div>
      <div class="about__frame">
        <p class="about__lead">
          Florenceは群馬大学医学部の女子学生専用アパートです。<br />
          大学のすぐ近くにあるので、通学も徒歩2分でOK。<br />
          防犯カメラや管理人が近くにいることでセキュリティ対策も充実。<br />
          はじめての一人暮らしでも安心のアパートです。
        </p>
        <span class="about__frame-deco"></span>
        <span class="about__frame-deco"></span>
      </div>
    </div>
  </div>
  <div class="apartment">
    <div class="inner" id="apartment">
      <div class="title">
        <h2 class="title__main">
          <span class="title__main--head">A</span>partment
        </h2>
        <h3 class="title__sub">Florenceのアパート</h3>
      </div>
      <div class="apartment__lead">
        当アパートはFlorenceAとFlorenceBの2棟あります。<br
          class="apartment__blank"
        />ご希望に沿った物件をご覧ください。
      </div>
      <div class="apartment__wrap">
        <a class="apartment__link" href="./FlorenceA">
          <div class="apartment__card--florenceA">
            <h2 class="apartment__title">FlorenceA</h2>
            <p class="apartment__catchphrase">
              気品溢れるレンガ造りのお洒落アパート
            </p>
            <p class="apartment__text">
              レンガ張りに映える白窓がアクセントの洋風な外観。<br />
              全室南向きの角部屋になります。<br />
              1Kの間取りを有効活用し、カウンターキッチンにしたことで、リビングも広々と使える住まいです。
            </p>
            <div class="apartment__img">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Florence_apartmentA.jpg" alt="" />
            </div>
          </div>
        </a>
        <a class="apartment__link" href="./FlorenceB">
          <div class="apartment__card--florenceB">
            <h2 class="apartment__title">FlorenceB</h2>
            <p class="apartment__catchphrase">
              1LDKでゆったり、暖かな光に包まれた家
            </p>
            <p class="apartment__text">
              南向きの明るく広いLDKは、半透明のガラスサッシで仕切ることも可能です。<br />
              収納には約2帖のウォークインクローゼットを採用。<br />
              高い断熱性があり、快適に暮らせる住まいです。
            </p>
            <div class="apartment__img">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Florence_apartmentB.jpg" alt="" />
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
  <div class="information">
    <div class="inner" id="information">
      <div class="title">
        <h2 class="title__main">
          <span class="title__main--head">I</span>nformation
        </h2>
        <h3 class="title__sub">フローレンスの概要</h3>
      </div>
      <div class="information__wrap">
        <iframe
          class="information__map"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d200.6966924166158!2d139.06132260520812!3d36.40563667716561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601ef341fe35128b%3A0x1fdedfeb2cad691!2z44CSMzcxLTAwMzQg576k6aas55yM5YmN5qmL5biC5pit5ZKM55S677yT5LiB55uu77yR77yY4oiS77yR77yS!5e0!3m2!1sja!2sjp!4v1665762542159!5m2!1sja!2sjp"
        ></iframe>
        <table class="information__table">
          <tr class="information__row">
            <th class="information__header">所在地</th>
            <td class="information__data">群馬県前橋市昭和町3-18-2</td>
          </tr>
          <tr class="information__row">
            <th class="information__header">管理</th>
            <td class="information__data">
              前橋ソフト販売（有）<br
                class="information__blank"
              />027-235-5601
            </td>
          </tr>
          <tr class="information__row">
            <th class="information__header">仲介</th>
            <td class="information__data">
              群大生協本部 アパート管理部<br
                class="information__blank"
              />027-289-8084
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <?php include(get_template_directory() . '/include/contact.php'); ?>
</main>
<?php get_footer();