                        <?php
                        // タイトルを定義して変数に格納
                        $title_one = 'title1';
                        $title_two = 'title2';
                        ?>

                        <li class="shopList-item">
                          <div class="shop-image">
                            <?php
                            $image_id = get_sub_field('shop_img');
                            echo wp_get_attachment_image($image_id, 'shop-detail');
                            ?>
                          </div>
                          <div class="shop-body">
                            <?php
                            // カスタムフィールドを変数に格納
                            $shop_name = get_sub_field('shop_name');
                            $shop_strength = get_sub_field('shop_strength');
                            $shop_hours = get_sub_field('shop_hours');
                            $floor_info = get_sub_field('floor_info');
                            $link_btn = get_sub_field('service_detailpage_linkbutton');
                            ?>
                            <p class="shop-title"><?php echo esc_html($shop_name); ?></p>
                            <p class="shop-caption"><?php echo esc_html($shop_strength); ?></p>
                            <div class="shop-detail">
                              <dl>
                                <dt><?php echo esc_html($title_one); ?></dt>
                                <dd><?php echo esc_html($shop_hours); ?></dd>
                              </dl>
                              <dl>
                                <dt><?php echo esc_html($title_two); ?></dt>
                                <dd><?php echo esc_html($floor_info); ?></dd>
                              </dl>
                              <br>
                              <br>
                              <?php if (!empty($link_btn)): ?>
                                <a href="<?php echo esc_url($link_btn); ?>" target="_blank" rel="noopener noreferrer" style="color: white; background-color: #232323; padding: 3px 80px; font-size: 10px; border-radius: 60px;">詳細はこちら</a>
                              <?php endif; ?>
                            </div>
                          </div>
                        </li>