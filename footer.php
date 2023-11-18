<footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="footer-left">
              <div><img src="./assets/img/footer-logo.svg" alt=""></div>
              <p>Book your trip in minute, get full Control for much longer.</p>
            </div>
          </div>
          <div class="col-md-9">
            <div class="footer-right">
              <div class="row">
                <div class="col-md-9">
                  <div class="fr-left">
                    <div class="row">
                      <div class="col-md-4">
                        <h5>Company</h5>
                        <?php 
                          wp_nav_menu(
                            array(
                                'theme_location' => 'footer-menu-one',
                                'menu_class'     => 'company-links',
                            )
                          );
                        ?>
                      </div>
                      <div class="col-md-4">
                        <h5>Contact</h5>
                        <?php 
                          wp_nav_menu(
                            array(
                                'theme_location' => 'footer-menu-two',
                                'menu_class'     => 'contact-links',
                            )
                          );
                        ?>
                      </div>
                      <div class="col-md-4">
                        <h5>More</h5>
                        <?php 
                          wp_nav_menu(
                            array(
                                'theme_location' => 'footer-menu-three',
                                'menu_class'     => 'more-links',
                            )
                          );
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 footer-links">
                  <div class="social-icons">
                    <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.svg" alt=""></a>
                    <a href=""><img width="61px" height="61px" src="<?php echo get_template_directory_uri(); ?>/assets/img//Instagram-Glyph-Black-Logo.wine.svg" alt="ff"></a>
                    <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter.svg" alt=""></a>
                  </div>
                  <h5>Discover our app</h5>
                  <div class="app-links">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Google-Play.svg" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Play-Store.svg" alt="">
                  </div>
                </div>  
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer> 

<?php wp_footer(); ?>
</body>
</html