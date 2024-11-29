<?php get_header('com'); ?>
<!-- nav -->
<!-- <div class="site-main">
  <div>
    <nav class="global-nav nav-list">
      <?php
      wp_nav_menu([
        'theme_location' => 'place_global',
        'container' => false,
      ]);
      ?>
    </nav>
  </div> -->


<!-- お知らせ -->
<section class="section-contents" id="info">
  <div class="wrapper maxw600">
    <?php $term_obj = get_term_by('slug', 'info', 'category'); ?>

    <div class="page-inner full-width">
      <div class="page-main" id="pg-news">
        <div class="main-container">
          <div class="main-wrapper">
            <ul class="newsLists">
              <?php
              // 投稿を3件取得するクエリ
              $args = array(
                'post_type'      => 'post', // 投稿タイプ
                'posts_per_page' => 3,      // 取得する投稿の数
                'orderby'        => 'date',      // 日付順で並び替え
                'order'          => 'DESC',
              );
              $news_posts = new WP_Query($args);

              if ($news_posts->have_posts()):
                while ($news_posts->have_posts()): $news_posts->the_post();
              ?>
                  <li class="news-list">
                    <a class="news-link" href="<?php the_permalink(); ?>">
                      <span class="news-body release" style="color: #949494;"><?php the_time('Y.m.d'); ?></span>
                      <span class="news-category <?php
                                                  $categories = get_the_category();
                                                  if (! empty($categories)) {
                                                    foreach ($categories as $category) {
                                                      echo esc_html($category->slug) . ' '; // 全てのカテゴリスラッグをクラスに追加
                                                    }
                                                  }
                                                  ?>">
                        <?php
                        if (! empty($categories)) {
                          foreach ($categories as $category) {
                            echo esc_html($category->name) . ' '; // カテゴリ名をスペース区切りで表示
                          }
                        }
                        ?>
                      </span>
                      <p class="title"><?php the_title(); ?></p>
                      </span>
                    </a>
                  </li>
              <?php
                endwhile;
                wp_reset_postdata();
              endif;
              ?>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="pager">
      <ul class="pagerList">
        <?php
        // ページナビゲーションの表示
        page_navi();
        ?>
      </ul>
    </div>
  </div>

  <div class="section-buttons" style="margin-top: 0px!important;">
    <button type="button" class="button button-ghost" onclick="javascript:location.href = '<?php echo esc_url(get_term_link($term_obj)); ?>';">
      <?php echo $term_obj->name; ?>一覧を見る
    </button>
  </div>
</section>




<!-- ------------------------------
//////////// 事業案内 service
------------------------------- -->
<section class="section-contents" id="shop">
  <div class="wrapper">


    <!----------------------------
    /////// 使用するページの要素を取得するphp
    ----------------------------->
    <?php
    // 固定ページを表示させる（引数：ページのスラッグ）
    $shop_obj = get_page_by_path('service');
    // 投稿記事
    $post = $shop_obj;
    // 固定ページの投稿記事を使用する宣言（引数：関数定義）
    setup_postdata($post);
    // タイトルを取得
    $shop_title = get_the_title();
    ?>
    <!----------------------------
    // 取得したphpなどのhtml予約
    ----------------------------->
    <!-- 英語のタイトル -->
    <span class="section-title-en"><?php the_field('english_title'); ?></span>
    <!-- ❶タイトル -->
    <h2 class="section-title"><?php the_title(); ?></h2>
    <!-- 本文 -->
    <p class="section-lead"><?php echo get_the_excerpt(); ?></p>
    <br>
    <!-- ❸投稿表示ループ終わりの宣言 -->
    <?php wp_reset_postdata(); ?>



    <!----------------------------
      /////// 記事リストループ処理
      ----------------------------->
    <ul class="shops">
      <!----------------------------
      /////// 使用するページの要素を取得するphp
      ----------------------------->
      <?php
      // 公開記事のみ取得するクエリ
      $shop_pages = new WP_Query(array(
        'post_type'      => 'page', // 固定ページ
        'post_parent'    => $shop_obj->ID, // 親ページIDを指定
        'posts_per_page' => 13, // 最大13件
        'post_status'    => 'publish' // 公開記事のみ取得
      ));

      if ($shop_pages->have_posts()) :
        while ($shop_pages->have_posts()) : $shop_pages->the_post();
      ?>
          <li class="shops-item">
            <a class="shop-link" href="<?php the_permalink(); ?>">
              <div class="shop-image shop-image-frontpage"><?php the_post_thumbnail('common'); ?></div>
              <div class="shop-body">
                <!-- ❶タイトル -->
                <p class="name"><?php the_title(); ?></p>
                <!-- 引数：❷ACFのフィールド名 -->
                <p><?php the_field('location'); ?></p>
                <div class="buttonBox">
                  <button type="button" class="seeDetail">→</button>
                </div>
              </div>
            </a>
          </li>
          <!-- ❸投稿表示ループ終わりの宣言 -->
      <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
    </ul> <!--ulここまで-->
    <br>
    <br>
    <div class="section-buttons">
      <button type="button" class="button button-ghost" onclick="javascript:location.href = '<?php echo esc_url(home_url('service')); ?>';">
        <?php echo $shop_title; ?>一覧を見る
      </button>
    </div>
  </div>
</section>



<!----------------------------------
        gallery
----------------------------------->
<section class="section-contents" id="contribution">
  <div class="wrapper">
    <h2 class="section-title">売主様の想いに寄り添う不動産サービス</h2>
    <p class="section-lead">どのような不動産売却についても細やかに対応いたします</p>
    <section class="l-gallery-section">
      <ul class="l-section-inner l-section-inner-plf--20px l-gallery-section-inner">
        <li class="l-gallery">
          <div style="position: relative;">
            <img src="https://atrail.co.jp/wp-content/uploads/images/bg-section-company.webp" alt="" srcset="" style="border-radius: 8px;">
            <div style="display: flex; flex-direction: column; background-color: #198754; border-radius: 90px; width: 90px; height: 90px; justify-content: center; align-items: center; position: absolute; bottom: -3%; left: -6%;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16" style="width: 35%; height: 35%; color: white;">
                <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4" />
              </svg>
              <p style="font-size: 11px; color: white;">サポート体制</p>
            </div>
          </div>
          <p class="sp-pb50" style="padding-top: 20px!important;">居住用の不動産に限らず、駐車場や投資用マンション、工場といった多岐にわたる物件を取り扱うことで、これまでに多くの実績を積み重ねております。仲介をメインに、買取も含めて不動産の売買を幅広く承るなかで、相続関連やローン関係などにも臨機応変に対応する知識を培ってまいりました。確かな経験に基づく柔軟なご提案により、それぞれのお考えを踏まえた円滑な取引をサポートいたします。
          </p>
        </li>
        <li class="l-gallery" style="margin-top: 30px;">
          <div style="position: relative;">
            <img src="//atrail.co.jp/wp-content/uploads/images/bg-section-keyvisual-02.webp" alt="" srcset="" style="border-radius: 8px;">
            <div style="display: flex; flex-direction: column; background-color: #198754; border-radius: 90px; width: 90px; height: 90px; justify-content: center; align-items: center; position: absolute; bottom: -3%; left: -6%;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-houses" viewBox="0 0 16 16" style="width: 35%; height: 35%; color: white;">
                <path d="M5.793 1a1 1 0 0 1 1.414 0l.647.646a.5.5 0 1 1-.708.708L6.5 1.707 2 6.207V12.5a.5.5 0 0 0 .5.5.5.5 0 0 1 0 1A1.5 1.5 0 0 1 1 12.5V7.207l-.146.147a.5.5 0 0 1-.708-.708zm3 1a1 1 0 0 1 1.414 0L12 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l1.854 1.853a.5.5 0 0 1-.708.708L15 8.207V13.5a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 4 13.5V8.207l-.146.147a.5.5 0 1 1-.708-.708zm.707.707L5 7.207V13.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5V7.207z" />
              </svg>
              <p style="font-size: 11px; color: white;">想いを繋ぐ</p>
            </div>
          </div>
          <p class="sp-pb50" style="padding-top: 20px!important;">単に物件の状態や立地条件、相場などに合わせて不動産売却を進めるのではなく、売主様の物件に対する想いや思い出もしっかりと受け取ったうえで次の方(買主様)に引き継いでいけるように努めております。淀川区を中心に様々な地域の不動産についてご相談を承るなかで、売主様に寄り添い、それぞれの現状に合わせた不動産サービスを追求してまいります。
          </p>
        </li>
        <li class="l-gallery" style="margin-top: 30px;">
          <div style="position: relative;">
            <img src="https://atrail.co.jp/wp-content/uploads/images/service_06.png" alt="" srcset="" style="border-radius: 8px;">
            <div style="display: flex; flex-direction: column; background-color: #198754; border-radius: 90px; width: 90px; height: 90px; justify-content: center; align-items: center; position: absolute; bottom: -3%; left: -6%;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-star" viewBox="0 0 16 16" style="width: 35%; height: 35%; color: white;">
                <path d="M7.84 4.1a.178.178 0 0 1 .32 0l.634 1.285a.18.18 0 0 0 .134.098l1.42.206c.145.021.204.2.098.303L9.42 6.993a.18.18 0 0 0-.051.158l.242 1.414a.178.178 0 0 1-.258.187l-1.27-.668a.18.18 0 0 0-.165 0l-1.27.668a.178.178 0 0 1-.257-.187l.242-1.414a.18.18 0 0 0-.05-.158l-1.03-1.001a.178.178 0 0 1 .098-.303l1.42-.206a.18.18 0 0 0 .134-.098z" />
                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z" />
              </svg>
              <p style="font-size: 11px; color: white;">豊富な実績</p>
            </div>
          </div>
          <p class="sp-pb50" style="padding-top: 20px!important;">不動産売買の仲介や買取はもちろん、お売りいただいた物件のリフォーム等も行ってきた実績を持つスタッフが所属しており、不動産の活用方法も含めた豊富な知見を有しています。単に売買についてご案内するのみならず、お客様に適した土地活用等もサポートできるため、「実際に売るかどうかまだ迷っている」「きちんと不動産の価値を見出してほしい」といった想いにもしっかりとお応えいたします。まずはそれぞれの物件について現状のお悩みや今後のご要望を細やかにお伺いしたうえで、より利益を上げるための方法についてアドバイスしてまいります。
          </p>
        </li>
      </ul>
    </section>
  </div>
  <!-- cta -->
  <section class="l-cta" style="padding-top: 30px;">
    <button class="p-cta-btn">
      <div style="display:flex; flex-direction: row; justify-content:center; align-items:center; gap: 5px;">
        <img src="https://atrail.co.jp/wp-content/uploads/images/svg/icon-mail-circle.svg" alt="" srcset="" class="img-mail">
        <a href="https://atrail.co.jp/contact/" style="font-size: 16px;">お問い合わせ</a>
      </div>
    </button>
  </section>
</section>







<!-- 施工事例ここから -->
<section class="section-contents" id="contribution">
  <div class="wrapper">
    <?php
    $contribution_obj = get_page_by_path('work');
    $post = $contribution_obj;
    setup_postdata($post);
    $contribution_title = get_the_title();
    ?>
    <span class="section-title-en"><?php the_field('english_title'); ?></span>
    <h2 class="section-title"><?php the_title(); ?></h2>
    <p class="section-lead"><?php echo get_the_excerpt(); ?></p>
    <?php wp_reset_postdata(); ?>
    <div class="articles">
      <?php
      $args = array(
        'post_type' => 'works',
        'post_status' => 'publish',
        'posts_per_page' => 3,
      );

      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();
      ?>
          <article class="article-card">
            <a class="card-link" href="<?php the_permalink(); ?>">
              <div class="card-inner">
                <div class="card-image">
                  <?php
                  $work_img = get_field('work_img');
                  if ($work_img) :
                  ?>
                    <img src="<?php echo esc_url($work_img); ?>" alt="" style="height: 445px;">
                  <?php endif; ?>
                </div>
                <div class="card-body">
                  <p class="title" style="font-weight: bold; padding-bottom: 10px;"><?php the_title(); ?></p>
                  <div style="display: flex; flex-wrap: wrap; gap: 5px; max-width: 300px;">
                    <?php
                    $taxonomies = ['worktype', 'styletype', 'sizetype'];
                    foreach ($taxonomies as $taxonomy) {
                      $terms = get_the_terms($post->ID, $taxonomy);
                      if ($terms) :
                    ?>
                        <ul class="works-link-category" style="display: flex;  flex-direction: row; gap:5px; flex-wrap: wrap;">
                          <?php
                          foreach ($terms as $term) :
                          ?>
                            <li style="padding: 2px 8px; border-radius: 10px; border: 1px solid #232323; width: max-content; font-size:12px;">
                              ＃<?php echo esc_html($term->name); ?>
                            </li>
                          <?php
                          endforeach;
                          ?>
                        </ul>
                    <?php
                      endif;
                    }
                    ?>
                  </div><!-- タクソノミー終了 -->
                  <div class="buttonBox">
                    <button type="button" class="seeDetail">→</button>
                  </div>
                </div>
              </div>
            </a>
          </article>
      <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
    </div>


    <!-- 施工事例 -->
    <div class="section-buttons">
      <button type="button" class="button button-ghost" onclick="javascript:location.href = '<?php echo esc_url(home_url('work')); ?>';">
        <?php echo $contribution_title; ?>一覧を見る
      </button>
    </div>
  </div>
</section>
<!-- cta -->
<section class="l-cta">
  <button class="p-cta-btn">
    <div style="display:flex; flex-direction: row; justify-content:center; align-items:center; gap: 5px;">
      <img src="https://atrail.co.jp/wp-content/uploads/images/svg/icon-mail-circle.svg" alt="" srcset="" class="img-mail">
      <a href="https://atrail.co.jp/contact/" style="font-size: 16px;">お問い合わせ</a>
  </button>
  </div>
</section>





<!-- 会社概要 -->
<!----------------------------------
        company
----------------------------------->
<section class="section-contents" id="company">
  <div class="wrapper maxw600">
    <span class="section-title-en"></span>
    <h2 class="section-title" style="margin-bottom:30px;">会社概要</h2>
    <div class="l-company-table">
      <p>区内を中心に、多様なエリアの不動産に対応できる柔軟な体制を整えています<br>安心して売却をお任せいただける誠実かつ丁寧なサービスがこだわりです。<br>
        お気軽にご相談ください。</p>
    </div>
    <div class="section-buttons">
      <button type="button" class="button button-ghost" onclick="javascript:location.href = '<?php echo esc_url(home_url('company')); ?>';">
        会社概要を見る
      </button>
    </div>
  </div>
</section>
</div>


<?php get_footer(); ?>