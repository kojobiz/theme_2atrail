<div class="news">
  <div style="display: grid;">
    <p class='title'><?php the_title(); ?></p>
    <time class="time"><?php the_time('Y.m.d'); ?></time>
  </div>
  <hr>
  <!-- 内容 -->
  <div>
    <!-- 画像 -->
    <?php the_post_thumbnail(); ?>
    <?php
    $work_img = get_field('work_img');
    if ($work_img) :
    ?>
      <img src="<?php echo esc_url($work_img); ?>" alt="" style="aspect-ratio: 2560 / 1690; border-radius: 8px;">
    <?php endif; ?>
    <!-- アピールポイント -->
    <div style="padding-bottom:30px;">
      <?php the_content(); ?>
      <p class="works-link-text" style="font-size: 16px; display: flex; padding: 5px 0px; font-weight: 100; line-height: 2.4; letter-spacing: 0.3rem;">
        <?php
        $work_strong = get_field('work_strong');
        if ($work_strong) :
          echo esc_html($work_strong);
        endif;
        ?>
      </p>
    </div>

    <!-- タクソノミー -->
    <div style="display: flex; flex-wrap: wrap; gap: 5px; max-width: 100%;">
      <?php
      $taxonomies = ['worktype', 'styletype', 'sizetype'];
      foreach ($taxonomies as $taxonomy) {
        $terms = get_the_terms($post->ID, $taxonomy);
        if ($terms) :
      ?>
          <ul class="works-link-category" style="display: flex;  flex-direction: row; gap:5px; flex-wrap: wrap; margin-top: 20px;">
            <?php
            foreach ($terms as $term) :
            ?>
              <li style="padding: 5px 15px; border-radius: 10px; border: 1px solid #232323; width: max-content; font-size:16px;">
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
    <!-- ニーズ -->
    <?php
    $work_needs = get_field('work_needs');
    if ($work_needs) :
    ?>
      <p style="margin-top: 20px;">ニーズ | <?php echo esc_html($work_needs); ?></p>
    <?php endif; ?>



  </div><!--内容ここまで-->
</div>
<!-- 最新の関連はこちら -->
<div>
  <?php get_template_part('content-tax-info'); ?>
</div>
<hr>
<!-- next,prev -->
<div class="more-news">
  <?php
  $next_post = get_next_post();
  $prev_post = get_previous_post();
  if ($next_post):
  ?>
    <div class="next">
      <a class="another-link" href="<?php echo get_permalink($next_post->ID); ?>">NEXT<span class="arrow-next"> ></span></a>
    </div>
  <?php
  endif;
  if ($prev_post):
  ?>
    <div class="prev">
      <a class="another-link" href="<?php echo get_permalink($prev_post->ID); ?>"><span class="arrow-prev">
          < </span>PREV</a>
    </div>

  <?php endif; ?>
  <div class="backtolist">
    <?php
    // タイトルを取得
    $main_title = get_main_title();

    // デフォルトURLを設定
    $back_to_list_url = esc_url(home_url('/'));

    // タイトルに基づいてURLを変更
    if ($main_title == 'お知らせ') {
      $back_to_list_url = esc_url(home_url('archives/category/info'));
    } elseif ($main_title == 'コンテナハウス' || $main_title == 'コンテナオフィス' || $main_title == 'コンテナガレージ' || $main_title == 'コンテナショップ') {
      $back_to_list_url = esc_url(home_url('/work'));
    } elseif (is_singular('works')) {
      // 施工事例のカスタム投稿タイプの場合
      $back_to_list_url = esc_url(home_url('/work'));
    }
    ?>

    <a class="another-link" href="<?php echo $back_to_list_url; ?>">BACK TO LIST</a>
  </div>
</div>