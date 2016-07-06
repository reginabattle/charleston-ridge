
  <!-- Footer -->
  <footer class="footer-wrapper">
    <div class="row">

      <div class="divider twelve columns">
        <img src="<?php echo THEME_DIR; ?>/images/layout/logo-footer.svg" alt="Charleston Ridge Apartments" />
      </div>

  <!--<div class="social-links three columns">
        <header>
          <h1>Connect</h1>
        </header>

        <?php if(get_field('twitter', 7)) : ?><a href="<?php the_field('twitter', 7); ?>" target="_blank">Twitter</a> &bull;<?php endif; ?> <?php if(get_field('facebook', 7)) : ?><a href="<?php the_field('facebook', 7); ?>" target="_blank">Facebook</a> <br /><?php endif; ?>
        <?php if(get_field('linkedin', 7)) : ?><a href="<?php the_field('linkedin', 7); ?>" target="_blank">Linkedin</a><?php endif; ?>
      </div> -->

      <div class="inquiry-info six push-six columns">
        <header>
          <h1>Inquire</h1>
        </header>

        <p><?php the_field('phone_number', 7); ?><br />
        <a href="mailto:<?php the_field('email_address', 7); ?>"><?php the_field('email_address', 7); ?></a></p>
      </div>

      <div class="copyright six pull-six columns">
        <p><?php the_field('address', 7); ?></p>
        <p class="small">&copy; 2016 <?php bloginfo( 'name' ); ?>. All rights reserved.</p>

        <img src="<?php echo THEME_DIR; ?>/images/layout/logo-eho.svg" alt="Equal Housing Opportunity" />
      </div>


    </div>
  </footer>
  <!-- end footer -->

  <?php if(is_page('luxuries')) : ?>
    <script type="text/javascript" src="<?php echo THEME_DIR; ?>/js/libs/perfect-scrollbar.min.js"></script>
    <script type="text/javascript">
      $(function() {
        $('.content-box .content').perfectScrollbar();
      });
    </script>

  <?php endif; ?>

  <?php if(is_front_page() || is_page('neighborhood')) : ?>
    
    <script type="text/javascript">
      $(window).load(function() {
        $('.flexslider').flexslider({
          animation: "fade",
          controlNav: false,
          directionNav: false,
          controlsContainer: $(".custom-controls-container"),
          customDirectionNav: $(".custom-navigation a")
        }); 
      });
    </script>

  <?php endif; ?>
 
  <?php wp_footer(); ?>

</body>
</html>
