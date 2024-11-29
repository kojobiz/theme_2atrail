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
    <header id="header" style="padding-top: 0px!important; height: 85px;">
        <div style="text-align:center; width:100%; background-color:#005e31; height:33px; color:white; font-size:10px; display:flex; justify-content:center; align-items:center;">大阪市淀川区の不動産のことなら、経験豊富なアトレイルにお任せください。</div>
        <div class="header-inner" style="display:flex; flex-direction:column; margin-top: 0px!important;">
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="width: 100%; padding: 5px 2%;">
                <h1>
                    <a class="navbar-brand" href="<?php echo esc_url(home_url('')); ?>">
                        <img src="https://atrail.co.jp/wp-content/uploads/images/logo2.webp" alt="" width="auto" height="34px" style="height: 34px!important;">
                    </a>
                </h1>
                <!-- オフキャンバスメニュー -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

                    <div class="offcanvas-header">
                        <img src="https://atrail.co.jp/wp-content/uploads/images/logo2.webp" alt="" width="auto" height="34px" style="height: 34px!important; width: auto!important;">
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav jusify-content-end flex-grow-1 pe-3" style="padding-top: 50px;">
                            <li class="nav-item">
                                <a href="<?php echo esc_url(home_url('service')); ?>" class="nav-link">事業内容</a>
                            </li>
                            <li class="nav-item nav-item-sp">
                                <hr>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo esc_url(home_url('work')); ?>" class="nav-link">ギャラリー</a>
                            </li>
                            <li class="nav-item nav-item-sp">
                                <hr>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo esc_url(home_url('company')); ?>" class="nav-link">会社概要</a>
                            </li>
                            <li class="nav-item nav-item-sp">
                                <hr>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo esc_url(home_url('/category/info/')); ?>" class="nav-link">お知らせ</a>
                            </li>
                        </ul>
                        <form id="form-offcanvas" class="row align-items-center gx-3">
                            <div style="display: flex; flex-direction: column; gap: 20px; margin-top: 20px; margin-bottom: 20px; align-items: center;">
                                <div class="col-auto" style="width: 155px!important;">
                                    <a href="tel:+06-6379-3018" style="width: 100%;">
                                        <button class="btn btn-light mr3" type="button" style="display: flex; align-items: center; font-size: 16px; border:0.7px solid #232323; justify-content: space-between; width: 100%;">
                                            <img src="https://atrail.co.jp/wp-content/uploads/images/svg/icon-tel-circle.svg" alt="" srcset="" class="img-tel" style="height: 24px!important; width: auto; padding-right: 2px;">
                                            06-6379-3018
                                        </button>
                                    </a>
                                </div>
                                <div class="col-auto" style="width: 155px!important;">
                                    <a href="<?php echo esc_url(home_url('contact')); ?>" style="width: 100%;">
                                        <button class="btn btn-light mr3" type="button" style="display: flex; align-items: center; font-size: 16px; border:0.7px solid #232323; justify-content: space-between; width: 100%;">

                                            <img src="https://atrail.co.jp/wp-content/uploads/images/svg/icon-mail-circle.svg" alt="" srcset="" class="img-tel" style="height: 24px!important; width: auto; padding-right: 2px;">
                                            お問い合わせ
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <form id="form-desktop" class="row align-items-center gx-3">
                    <div class="col-auto" style="width: 155px!important;">
                        <a href="tel:+06-6379-3018" style="width: 100%;">
                            <button class="btn btn-light mr3" type="button" style="display: flex; align-items: center; font-size: 16px; border:0.7px solid #232323; justify-content: space-between; width: 100%;">
                                <img src="https://atrail.co.jp/wp-content/uploads/images/svg/icon-tel-circle.svg" alt="" srcset="" class="img-tel" style="height: 24px!important; width: auto; padding-right: 2px;">
                                06-6379-3018
                            </button>
                        </a>
                    </div>
                    <div class="col-auto" style="width: 155px!important;">
                        <a href="<?php echo esc_url(home_url('contact')); ?>" style="width: 100%;">
                            <button class="btn btn-light mr3" type="button" style="display: flex; align-items: center; font-size: 16px; border:0.7px solid #232323; justify-content: space-between; width: 100%;">

                                <img src="https://atrail.co.jp/wp-content/uploads/images/svg/icon-mail-circle.svg" alt="" srcset="" class="img-tel" style="height: 24px!important; width: auto; padding-right: 2px;">
                                お問い合わせ
                            </button>
                        </a>
                    </div>
                </form>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" style="border: none;">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>
    </header>
    <!-- front-page.phpの場合 -->
    <?php if (is_front_page()): ?>
        <section class="section-contents" id="keyvisual" style="margin-top: 85px!important;">
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
        <div class="wrap" style="margin-top: 85px!important;">
            <div id="primary" class="content-area">
                <main>
                    <div class="page-contents" style="padding-top: 0px;">
                        <div class="page-head" style="max-height: 330px;">
                            <img src="https://atrail.co.jp/wp-content/uploads/images/service_08.png" alt="" style="max-height: 330px; object-position: center 42%;">
                            <div class="wrapper" style="height: 20%; position: absolute; bottom: 0; width: 35vw; border-radius: 0px 10px 0px 0px; color: #fff; background-color: rgb(25 83 56 / 78%); text-align: left; padding-left: 2%; bottom: 0!important; left:0!important; transform: translate(0%, 150%); padding-top: 6px; padding-bottom: 3px;">
                                <span class="page-title" style="font-weight: 500; font-size: 2.2rem; margin-top: 0px!important; font-size: clamp(12px, 2vw, 18px); "><?php echo get_main_title(); ?></span>
                                <h2 class="page-title-en" style="font-size: 1.2rem; font-style: italic; margin-top: -6px;">gallery</h2>
                            </div>
                        </div>
                        <div class="page-container">
                            <div class="bread_crumb" style="padding: 2px 0; margin: 0 2%;">
                                <?php
                                if (function_exists('bcn_display')) {
                                    bcn_display();
                                }
                                ?>
                            </div>
                        <?php endif; ?>