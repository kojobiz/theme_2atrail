<?php
/*
Template Name: 店舗詳細
*/
get_header('com');
?>
<div class="page-inner full-width">
  <div class="page-main" id="pg-shopDetail">

    <div class="shopList-Container">
      <div class="shopList-head">
        <span class="title-en"></span>
        <div>
          <h3 class="title"><?php the_field('service_detailpage_title'); ?></h3>
          <br><br>
          <div>
            <?php
            if (have_posts()):
              while (have_posts()): the_post();
                the_content();
              endwhile;
            endif;
            ?>
          </div>
        </div>
      </div>
      <div class="shopList-inner" style="padding-bottom:0px!important;">
        <ul class="shopList">
          <?php
          $shops = array('first_shop_detail', 'second_shop_detail');
          foreach ($shops as $shop):
            if (have_rows($shop)):
              while (have_rows($shop)): the_row();
                get_template_part('content-shop-detail');
              endwhile;
            endif;
          endforeach;
          ?>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="section-buttons" style="display:flex; justify-content:center; padding-bottom:40px;">
  <button type="button" class="button button-ghost" onclick="javascript:location.href = '<?php echo esc_url(home_url('service')); ?>';">
    <?php echo $shop_title; ?>事業案内に戻る
  </button>
</div>
<br>
<br>
<?php get_footer(); ?>