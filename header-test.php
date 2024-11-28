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
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">大阪市淀川区の不動産のことなら<br>経験豊富なアトレイルにお任せください。</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav jusify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a href="<?php echo esc_url(home_url('service')); ?>" class="nav-link">事業内容</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo esc_url(home_url('work')); ?>" class="nav-link">ギャラリー</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo esc_url(home_url('company')); ?>" class="nav-link">会社概要</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo esc_url(home_url('/category/info/')); ?>" class="nav-link">お知らせ</a>
                            </li>
                        </ul>
                        <form id="form-offcanvas" class="row align-items-center gx-3">
                            <div class="col-auto">
                                <button class="btn btn-light mr3" type="button">電話こちら</button>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-light mr3" type="button">問い合わせはこちら</button>
                            </div>
                        </form>
                    </div>
                </div>
                <form id="form-desktop" class="row align-items-center gx-3">
                    <div class="col-auto">
                        <button class="btn btn-light mr3" type="button" style="display: flex; align-items: center; font-size: 16px; border:0.7px solid #232323;">
                            <a href="tel:+06-6379-3018">
                                <img src="https://atrail.co.jp/wp-content/uploads/images/svg/icon-tel-circle.svg" alt="" srcset="" class="img-tel" style="height: 24px!important; width: auto; padding-right: 2px;">
                            </a>06-6379-3018</button>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-light mr3" type="button" style="display: flex; align-items: center; font-size: 16px; border:0.7px solid #232323;">
                            <a href="<?php echo esc_url(home_url('contact')); ?>">
                                <img src="https://atrail.co.jp/wp-content/uploads/images/svg/icon-mail-circle.svg" alt="" srcset="" class="img-tel" style="height: 24px!important; width: auto; padding-right: 2px;">
                            </a>お問い合わせ</button>
                    </div>
                </form>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
    </header>