  <li class="common-item">
    <a class="common-link" href="<?php the_permalink(); ?>">
      <div class="common-image"><?php the_post_thumbnail('common'); ?></div>
      <div class="common-body">
        <p class="name"><?php the_title(); ?></p>
        <!-- 30文字以降の...を非表示にする -->
        <!-- <p class="caption"><?php echo get_flexible_excerpt(30); ?></p> -->
        <p class="caption"><?php echo wp_trim_words(get_the_excerpt(), 30, ''); ?></p>
        <div class="buttonBox">
          <button type="button" class="seeDetail">→</button>
        </div>
      </div>
    </a>
  </li>

  