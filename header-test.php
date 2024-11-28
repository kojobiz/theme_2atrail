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
    <header id="header" style="padding-top: 0px!important;">
        <div style="text-align:center; width:100%; background-color:#005e31; height:33px; color:white; font-size:10px; margin-top:-8px; display:flex; justify-content:center; align-items:center;">大阪市淀川区の不動産のことなら<br>経験豊富なアトレイルにお任せください。</div>
        <div class="header-inner" style="display:flex; flex-direction:column;">
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="width: 100%;">
                <!--  aria-controls="navbarSupportedContent"　data-target="#navbarSupportedContent"  -->
                <a class="navbar-brand" href="#">アトレイル</a>

                <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> -->

                <!-- オフキャンバスメニュー -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">大阪市淀川区の不動産のことなら<br>経験豊富なアトレイルにお任せください。</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav jusify-content-end flex-grow-1 pe-3">
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">事業案内</a>
                                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                    <li class="dropdown-item">
                                        <h2>売却査定</h2>
                                    </li>
                                    <li><a href="#" class="dropdown-item">物件や土地</a></li>
                                    <li><a href="#" class="dropdown-item">空き家</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li class="dropdown-item">
                                        <h2>売却ご相談</h2>
                                    </li>
                                    <li><a href="#" class="dropdown-item">投資物件</a></li>
                                    <li><a href="#" class="dropdown-item">相続財産</a></li>
                                    <li><a href="#" class="dropdown-item">財産分与</a></li>
                                    <li><a href="#" class="dropdown-item">ローン・任意売却</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li class="dropdown-item">
                                        <h2>活用ご相談</h2>
                                    </li>
                                    <li><a href="#" class="dropdown-item">駐車場</a></li>
                                    <li><a href="#" class="dropdown-item">土地</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li class="dropdown-item">
                                        <h2>その他</h2>
                                    </li>
                                    <li><a href="#" class="dropdown-item">自社買取サービス</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link active" aria-current="page">コンセプト</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">会社案内</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">お知らせ</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">プライバシーポリシー</a>
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
                        <button class="btn btn-light mr3" type="button">電話こちら</button>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-light mr3" type="button">問い合わせはこちら</button>
                    </div>
                </form>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
            <!-- test・ -->
    </header>