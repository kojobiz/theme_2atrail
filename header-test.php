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
    <!-- test -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!--  aria-controls="navbarSupportedContent"　data-target="#navbarSupportedContent"  -->
        <a class="navbar-brand" href="#">アトレイル</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- id="navbarSupportedContent -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">メニュー１<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">メニュー２</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        メニュー３
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">メニュー４</a>
                </li>
            </ul>
            <form class="row align-items-center gx-3">
                <div class="col-auto">
                    <button class="btn btn-light mr3" type="button">電話こちら</button>
                </div>
                <div class="col-auto">
                    <button class="btn btn-light mr3" type="button">問い合わせはこちら</button>
                </div>
            </form>
        </div>
    </nav>
    <!-- test・ -->


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