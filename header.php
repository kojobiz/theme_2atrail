<?php get_template_part('content-header1_type_common'); ?>
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