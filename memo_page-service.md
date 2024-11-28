<!-- 1128に修正前のコード（footertとヘッダーは追加すること）  -->
<!-- 前のコード -->
<!-- <div class="page-inner">
  <div class="page-main" id="pg-common">
    <ul class="commons">
      <?phps
      // 子ページを取得（公開済み記事のみ）
      $common_pages = new WP_Query(array(
        'post_type'      => 'page',     // ページのみを対象
        'post_parent'    => $post->ID, // 現在の親ページの子ページ
        'posts_per_page' => -1,        // すべての子ページを取得（必要に応じて制限）
        'post_status'    => 'publish', // 公開済みの記事のみ
      ));

      if ($common_pages->have_posts()):
        while ($common_pages->have_posts()): $common_pages->the_post();
          get_template_part('content-common');
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
    </ul>
  </div>
</div> -->