<?php 
/* Template Name: access
*/
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <title>飲食店テンプレート1/access</title>
  <?php get_header(); ?>
</head>

<body>
  <div id="c-access" class="superwrapper animsition">
    <header id="header" class="header">
      <div class="mobile-container">
        <div class="logo__img">
          <a class="animsition-link" href="/">
            <div class="logo"></div>
          </a>
        </div>
        <div class="mobile-button">
          <button class="mobile-menu__btn">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
      <!-- /.mobile-container -->
      <div class="pc-container">
        <div class="logo__img">
          <a class="animsition-link" href="<?php echo esc_url( home_url('/')); ?>">
            <div class="logo-pc logo"></div>
          </a>
        </div>
        <nav class="pc-nav">
          <ul class="pc-nav-list">
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/')); ?>/"><span>TOP</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/concept')); ?>/concept/concept.html"><span>CONCEPT</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/menu')); ?>/menu/menu.html"><span>MENU</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/news')); ?>/news/news.html"><span>NEWS</span></a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- /.pc-container -->
      <nav class="sp-navbtn">
        <ul class="sp-navbtn__container">
          <li><a class="tel" href="tel:092-686-7954">電話予約<i class="icon-tel"></i></a></li>
          <li><a class="net" target="_blank" href="https://beauty.hotpepper.jp/">オンライン予約<i class="icon-net"></i></a>
          </li>
        </ul>
      </nav>
      <!-- /.nav-btn -->
    </header>
    <!-- /#header -->
    <div class="ac-top">
      <div class="access-top__wrapper child">
        <div class="access-top__img">
          <h3 class="c-title clip-js2 left">
            <span class="num">04</span>
            <span class="txt">Access</span>
          </h3>
          <img src="<?php echo get_template_directory_uri(); ?>/images/home/store_3@sp.jpg" alt="店外観">
          <div class="access-top__img__cover"></div>
        </div>
      </div>
    </div>
    <!-- /.ac-top -->
    <div class="c-access-wrap appear up">
      <section class="g-map item">
        <div class="g-map__container">
          <h3>Address & Contact</h3>
          <div class="g-map__wrap">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13294.41717864675!2d130.4066479337205!3d33.589621991747364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354191bf3087b0ed%3A0xc5792b8f65d432e2!2sRegus!5e0!3m2!1sja!2sjp!4v1621245126008!5m2!1sja!2sjp"
              style="border: 0;" allowfullscreen="" loading="lazy"></iframe>
            <div class="google-map-link">
              <a target="_blank" href="https://goo.gl/maps/3sgDHnqQVaX6uvCt5">Google Map</a>
            </div>
          </div>
        </div>
      </section>
      <section class="p-info item">
        <div class="c-container">
          <div class="p-info__time">
            <h3>Lunch</h3>
            <p class="c-txt-sm">11:00〜14:00</p>
            <h3>Dinner</h3>
            <p class="c-txt-sm">17:00〜22:00</p>
            <p class="c-txt-xs">※季節によっては貸し切りやイベント開催などがございます。予めお電話でお問い合わせ頂くか、<a class="page-link"
                href="https://www.instagram.com/shouta_oumaru/" target="_blank">Instagram</a>で告知する事もあるのでご確認下さい。</p>
          </div>
          <div class="p-info__date">
            <h3 class="close">
              <span>定休日：</span>
              <span>水曜日</span>

            </h3>
            <p class="c-txt-xs">※変更がある場合は<a class="page-link" href="#news">NEWS</a>ページや<a class="page-link"
                href="https://www.instagram.com/shouta_oumaru/" target="_blank">Instagram</a>でお伝えしますのでご確認下さい。</p>
          </div>
          <div class="p-info__sns">
            <h3>SNS</h3>
            <div class="p-info__insta">
              <a href="https://www.instagram.com/?hl=ja" target="_blank" class="insta">
                <span class="icon-insta">Instagram</span>
              </a>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- /.p-info -->
    <footer class="footer">
      <div class="c-container">
        <div class="c-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/images/home/riv_logo-white.png" alt="">
        </div>

        <div class="footer__info">
          <ul class="footer__item c-txt-xs">
            <li class="nav-address">
              <p class="c-txt-xs">
                〒812-0041<br class="view-pc">
                福岡県福岡市博多区博多駅前<br class="view-pc">3-27-25,第二岡部ビル9F
              </p>
            </li>
            <li class="nav-tel">
              <p>TEL</p><a href="tel:092-686-7954"> 092-686-7954</a>
            </li>
            <li class="nav-time">
              <div class="head">ランチ</div>
              <div class="txt">11:00〜14:00</div>
            </li>
            <li class="nav-time">
              <div class="head">ディナー</div>
              <div class="txt">17:00〜22:00</div>
            </li>
            <li class="nav-date">
              <div class="head">定休日</div>
              <div class="txt">水曜日</div>
            </li>
          </ul>
        </div>
        <div class="copyright">
          © RivRound.inc
        </div>
      </div>
    </footer>
    <!-- /#footer -->
    <div class="mobile-menu">
      <nav class="mobile-menu__nav">
        <ul class="mobile-menu__list">
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/')); ?>">TOP</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/concept')); ?>">CONCEPT</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/menu')); ?>">MENU</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/access')); ?>">ACCESS</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/news')); ?>">NEWS</a>
          </li>
        </ul>
        <div class="reserve-btn-wrap">
          <div class="reserve-btn-tel">
            <h4>電話予約はこちら</h4>
            <div class="reserve-btn">
              <a href="tel:092-686-7954"><span>092-686-7954</span></a>
            </div>
          </div>
          <div class="reserve-btn-net">
            <h4>ネット予約はこちら</h4>
            <div class="reserve-btn">
              <a href="https://beauty.hotpepper.jp/" target="_blank"><span>ONLINE RESERVE</span></a>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <!------ /.mobile-menu ----->
  </div>
  <!-- .superwrapper -->  
  <?php get_template_part('includes/c-footer'); ?>
</body>

</html>