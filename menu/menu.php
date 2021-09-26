<?php 
/* Template Name: menu
*/
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <title>飲食店テンプレート1/MENU</title>
  <?php get_header(); ?>
</head>
<body>
  <div class="superwrapper animsition">
    <header id="header" class="header">
      <div class="mobile-container">
        <div class=" logo__img">
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
          <a class="animsition-link" href="/">
            <div class="logo-pc logo"></div>
          </a>
        </div>
        <nav class="pc-nav">
          <ul class="pc-nav-list">
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/')); ?>"><span>TOP</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/concept')); ?>"><span>CONCEPT</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/gallery')); ?>"><span>GALLERY</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('access')); ?>"><span>ACCESS</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/news')); ?>"><span>NEWS</span></a>
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
    <div class="menu-top">
      <div class="menu-top__wrapper child">
        <div class="menu-top__img">
          <h3 class="c-title clip-js2 left">
            <span class="num">03</span>
            <span class="txt">Menu</span>
          </h3>
          <img src="<?php echo get_template_directory_uri(); ?>/images/home/steak_1@pc.jpg" alt="food">
          <div class="menu-top__img__cover"></div>
        </div>
      </div>
    </div>
    <!-- /.menu-top -->
    <section class="menu-contents appear up">
      <h2 class="menu-title item">
        <span>Our Menu</span>
        <p>食の感動体験をテーマに、水々しい朝採れ野菜の料理や、90日熟成の神戸ビーフ、
          厳選の魚介をご提供します。</p>
      </h2>
      <div class="menu-contents__list item">
        <div class="tab-panel">
          <!--tab-->
          <ul class="tab-group">
            <li class="tab lunch is-active">Lunch</li>
            <li class="tab tab-B">Dinner</li>
            <li class="tab tab-C">Drink</li>
          </ul>
          <!--tab-contents-->
          <div class="panel-group">
            <div class="panel lunch is-show">
              <div class="lunch-container">
                <div class="lunch__item">
                  <div class="lunch__txt">
                    <p class="name">ランチA</p>
                    <p class="price">¥1,500</p>
                  </div>
                </div>
                <div class="lunch__item">
                  <div class="lunch__txt">
                    <p class="name">ランチB</p>
                    <p class="price">¥2,500</p>
                  </div>
                </div>
                <div class="lunch__item">
                  <div class="lunch__txt">
                    <p class="name">ランチC</p>
                    <p class="price">¥2,500</p>
                  </div>
                </div>
                <div class="lunch__item">
                  <div class="lunch__txt">
                    <p class="name">ランチD</p>
                    <p class="price">¥2,500</p>
                  </div>
                </div>
                <div class="lunch__item">
                  <div class="lunch__txt">
                    <p class="name">ランチE</p>
                    <p class="price">¥2,500</p>
                  </div>
                </div>
                <div class="lunch__item">
                  <div class="lunch__txt">
                    <p class="name">ランチF</p>
                    <p class="price">¥2,500</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel dinner">
              <div class="dinner-container">
                <div class="dinner__txt">
                  <p class="name">刺し身の盛り合わせ</p>
                  <p class="price">¥1,500</p>
                </div>
                <div class="dinner__txt">
                  <p class="name">胡麻さば</p>
                  <p class="price">¥800</p>
                </div>
                <div class="dinner__txt">
                  <p class="name">ホッケの開き</p>
                  <p class="price">¥800</p>
                </div>
                <div class="dinner__txt">
                  <p class="name">ラムチョップ</p>
                  <p class="price">¥1,200</p>
                </div>
                <div class="dinner__txt">
                  <p class="name">牛ほほ肉の赤ワイン煮</p>
                  <p class="price">¥500</p>
                </div>
                <div class="dinner__txt">
                  <p class="name">だし巻き玉子</p>
                  <p class="price">¥500</p>
                </div>
                <div class="dinner__txt">
                  <p class="name">エビマヨ</p>
                  <p class="price">¥800</p>
                </div>
                <div class="dinner__txt">
                  <p class="name">ポテトサラダ</p>
                  <p class="price">¥500</p>
                </div>
                <div class="dinner__txt">
                  <p class="name">枝豆</p>
                  <p class="price">¥300</p>
                </div>
              </div>
            </div>
            <div class="panel drink">
              <div class="drink-container">
                <div class="drink__item">
                  <div class="drink__block">
                    <h3>Beer</h3>
                    <div class="c-drink">
                      <p class="name">プレミアムモルツ</p>
                      <p class="price">¥700</p>
                    </div>
                    <div class="c-drink">
                      <p class="name">アサヒ スーパードライ</p>
                      <p class="price">¥700</p>
                    </div>
                    <div class="c-drink">
                      <p class="name">キリン 一番しぼり</p>
                      <p class="price">¥700</p>
                    </div>

                  </div>
                </div>
                <div class="drink__item">
                  <div class="drink__block">
                    <h3>Cocktail</h3>
                    <div class="c-drink">
                      <p class="name">サントリー 角ハイボール</p>
                      <p class="price">¥700</p>
                    </div>
                    <div class="c-drink">
                      <p class="name">山崎プレミアムハイボール</p>
                      <p class="price">¥800</p>
                    </div>
                  </div>
                </div>
                <div class="drink__item">
                  <div class="drink__block">
                    <h3>Sake</h3>
                    <div class="c-drink">
                      <p class="name">天心</p>
                      <p class="price">¥700</p>
                    </div>
                    <div class="c-drink">
                      <p class="name">獺祭</p>
                      <p class="price">¥700</p>
                    </div>
                    <div class="c-drink">
                      <p class="name">東一</p>
                      <p class="price">¥700</p>
                    </div>
                  </div>
                </div>
                <div class="drink__item">
                  <div class="drink__block">
                    <h3>Whine</h3>
                    <div class="c-drink">
                      <p class="name">ラブベット カステルモール（赤・白）</p>
                      <p class="price">¥700</p>
                    </div>
                    <div class="c-drink">
                      <p class="name">ラブベット ヴィニャ（赤・白）</p>
                      <p class="price">¥800</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <p class="c-txt-xs">※上記メニューは当店の定番メニューのみの記載になります。<br class="view-pc">時期に合わせた旬のものを多くご準備しておりますのでご予約お待ちしております。
        </p>
      </div>
    </section>
    <!-- /.menu-contents -->
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
            <a class="animsition-link" href="<?php echo esc_url( home_url('/gallery')); ?>">GALLERY</a>
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