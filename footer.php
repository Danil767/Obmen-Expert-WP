    <footer class="footer">
      <div class="container footer__container">
        <div class="footer__start">
          <div class="footer__text">
            <?php the_field('copyright-text') ?>
          </div>
        </div>
        <div class="footer__end">
          <a class="footer__link" href="<?php the_field('telegramm-link') ?>">
            <img src="<?php bloginfo('template_url'); ?>/assets/fonts/tg%281%29.svg" alt="tg">
          </a>
        </div>
      </div>
    </footer>

    <?php wp_footer() ?>

    <iframe height="1" width="1" style="position: absolute; top: 0px; left: 0px; border: none; visibility: hidden;">
    </iframe>
    </body>

    </html>