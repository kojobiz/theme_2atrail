<?php get_header('com'); ?>
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
    <!-- <div class="section-buttons">
      <button type="button" class="button button-ghost" onclick="javascript:location.href = '<?php echo esc_url(home_url('service')); ?>';">
        <?php echo $shop_title; ?>一覧を見る
      </button>
    </div> -->
  </div>
</section>
<br>
<br>
<?php get_footer(); ?>