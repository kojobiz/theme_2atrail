<?php if (! is_front_page()): ?>
  </div>
  </div>
  </main>
  </div>
  </div>
<?php endif;
if (! $footer_cache = get_transient('footer_cache')):
  ob_start();
?>
  <footer class="footer" id="footer">
    <div class="footerContents">
      <div class="footerContents-contact">
        <div class="enterprise-logo">
          <a href="https://atrail.co.jp/">
            <img src="https://atrail.co.jp/wp-content/uploads/images/logo-white.png" alt="atrail" style="max-width:80px;" />
          </a>
        </div>
        <div class="enterprise-detail">
          <p class="name">アトレイル株式会社</p>
          <p class="address">
            〒533-0033<br>
            大阪市東淀川区東中島1丁目21番3号<br>
            06-6379-3018<br>
            受付時間 / 10:00～17:00（水曜定休）
          </p>
        </div>
      </div>
      <div class="footerContents-sitemap">
        <nav class="footer-nav">
          <?php
          wp_nav_menu([
            'theme_location' => 'place_footer',
            'container' => false,
          ]);
          ?>

        </nav>
      </div>
    </div>
    <p class="copyright">大阪市淀川区の不動産のことなら、経験豊富なアトレイルにお任せください。</p>
    <p class="copyright-text">&copy;<span class="copyright-name">ATRAIL CO., LTD.</span></p>

    <div class="scroll-top">
      <button id="scroll-top"><a href="javascript:void(0)" class="scroll-top">トップに戻る</a>
      </button>
    </div>
  </footer>
<?php
  $footer_cache = ob_get_clean();
  set_transient('footer_cache', $footer_cache, 60 * 5);
else:
  echo $footer_cache;
endif;
?>
</div>

<?php wp_footer(); ?>
</body>

</html>