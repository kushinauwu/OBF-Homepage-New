<footer>
  <section class="footer-section">
    <div class="container">
      <?php if ( is_active_sidebar( 'footer-links' ) ) : ?>
          <?php dynamic_sidebar( 'footer-links' ); ?>
      <?php endif; ?>
    </div>
  </section>

  <section class="footer-logo">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_bloginfo('template_url') ?>/img/logos/obf-logo.png" width=300px>
                    </a>
                </div>
            </div>
        </div>
    </section>

  <?php if ( is_active_sidebar( 'footer-credits' ) ) : ?>
      <?php dynamic_sidebar( 'footer-credits' ); ?>
  <?php endif; ?>
  
</footer>

</div>
<?php wp_footer(); ?>
</body>

</html>
