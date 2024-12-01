<!-- front-page.phpの場合 -->
<?php if (is_front_page()): ?>
    <?php get_template_part('content-header2carousel'); ?>

    <!-- front-page.php以外のphpページの場合 -->
<?php else: ?>
    <div class="wrap" style="margin-top: 85px!important;">
        <div id="primary" class="content-area">
            <main>
                <div class="page-contents" style="padding-top: 0px;">
                    <?php get_template_part('content-header2img_logo'); ?>
                    <div class="page-container">
                        <div class="bread_crumb" style="padding: 2px 0; margin: 0 2%;">
                            <?php
                            if (function_exists('bcn_display')) {
                                bcn_display();
                            }
                            ?>
                        </div>
                    <?php endif; ?>