<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="keywords" content="共通キーワード" />
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <title><?php bloginfo('name'); ?></title>
  <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/favicon.ico" />
  <link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Vollkorn:400i" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="container">
    <header id="header">
      <div style="text-align:center; width:100%; background-color:#005e31; height:33px; color:white; font-size:10px; margin-top:-8px; display:flex; justify-content:center; align-items:center;">大阪市淀川区の不動産のことなら、経験豊富なアトレイルにお任せください。</div>
      <div class="header-inner" style="display:flex; flex-direction:column;">

        <!-- inner-white -->
        <div class="inner-white" style="height: 40px; display: flex; flex-direction:column; align-content: center; justify-content: center; align-items: center; background-color: #fff;">
          <!-- ロゴ -->
          <div class="flexrowYcenter sp-none">
            <div class="logo">
              <h1>
                <a class="logo-header" href="<?php echo esc_url(home_url()); ?>">
                  <img src="https://atrail.co.jp/wp-content/uploads/images/logo-green@2x.png" class="fixed-logo" alt="ATRAIL" style="max-width:15%;">
                </a>
              </h1>
            </div>
          </div>
        </div>

        <!-- inner-black -->
        <div class="inner-black" style="width: 100%; height: 50px; display:flex; flex-direction: row; justify-content: flex-end; background-color: #343434; margin-top:8px;">

          <div class="header-nav">
            <!-- ロゴ -->
            <div class="flexrowYcenter sp-block">
              <div class="logo">
                <h1>
                  <a class="logo-header" href="<?php echo esc_url(home_url()); ?>">
                    <img src="https://atrail.co.jp/wp-content/uploads/images/logo-green@2x.png" class="fixed-logo" alt="ATRAIL" style="max-width:20%;">
                  </a>
                </h1>
              </div>
            </div>
            <!-- ナビメニュー -->
            <nav class="global-nav">
              <?php
              wp_nav_menu([
                'theme_location' => 'place_global',
                'container' => false,
              ]);
              ?>
            </nav>

          </div>

          <div style="display:flex; flex-direction: row; margin-left:10px; margin-right: 20px;">
            <!-- 電話番号 -->
            <a href="./" style="display: flex; flex-direction:row; box-sizing: border-box; padding: 12px 13px; border-radius: 60px; margin-top: 0px; margin-bottom: 0px; align-items: center; background-color: #fff; margin-top: 5px;
    margin-bottom: 5px;">
              <img src="https://atrail.co.jp/wp-content/uploads/images/svg/icon-tel-circle.svg" alt="" srcset="" class="img-tel">
              <div class="header-tel-div">
                <tel>0120-0000-000</tel>
                <p class="text-tel">受付時間 / 09:00-18:00（水曜定休日）</p>
              </div>
            </a>

            <!-- メール -->
            <a href="https://atrail.co.jp/contact/" style="display: flex; flex-direction:row; box-sizing: border-box; padding: 12px 13px; border-radius: 60px; margin-top: 0px; margin-bottom: 0px; align-items: center; background: linear-gradient(to right, #3CA88F, #007BF7); margin-left:10px; margin-top: 5px;
    margin-bottom: 5px;">
              <img src="https://atrail.co.jp/wp-content/uploads/images/svg/icon-mail-circle.svg" alt="" srcset="" class="img-mail">
              <div class="header-mail-div">
                <p class="text-mail">お問い合わせ</p>
              </div>
            </a>
            <!-- ハンバーガーボタン -->
            <button class="toggle-menu js-toggoleNav" style="align-self: center; padding-left: 80px;">
              <span class="toggle-line">メニュー</span>
            </button>



            <!-- メール -->
            <!-- <button class="mail">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon-mail.png" alt="" srcset="" style="width:80px; height:auto;">
            </button> -->
          </div>
        </div>
      </div>
  </div>
  </header>
  <!-- front-page.phpの場合 -->
  <?php if (is_front_page()): ?>
    <section class="section-contents" id="keyvisual" style="margin-top: 100px;">
      <!-- カルーセル -->
      <div id="carouselIndicators" class="carousel slide" data-bs-ride="carousel" style="position: relative;">
        <div>
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://atrail.co.jp/wp-content/uploads/images/bg-section-keyvisual-01.webp" class="d-block w-100" alt="First slide">
            </div>
            <div class="carousel-item">
              <img src="https://atrail.co.jp/wp-content/uploads/images/bg-section-keyvisual-02.webp" class="d-block w-100" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img src="https://atrail.co.jp/wp-content/uploads/images/bg-section-keyvisual-03.webp" class="d-block w-100" alt="Third slide">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
          </button>
        </div>
      </div>
    </section>
    <!-- front-page.php以外のphpページの場合 -->
  <?php else: ?>
    <div class="wrap">
      <div id="primary" class="content-area">
        <main>
          <div class="page-contents">
            <div class="page-head">
              <?php echo get_main_image(); ?>

              <div class="wrapper">
                <span class="page-title-en"><?php echo get_main_en_title(); ?></span>
                <h2 class="page-title"><?php echo get_main_title(); ?></h2>
              </div>
            </div>
            <div class="page-container">
              <div class="bread_crumb">
                <?php
                if (function_exists('bcn_display')) {
                  bcn_display();
                }
                ?>
              </div>
            <?php endif; ?>