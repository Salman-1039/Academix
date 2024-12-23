<footer class="footer">
  <div class="container">
    <div class="footer-blocks">
      <div class="footer-block">
        <?php
        if (has_nav_menu('footer-1')) {
          wp_nav_menu(array(
            'theme_location' => 'footer-1',
            'menu_class'     => 'footer-menu',
            'container'      => false,
          ));
        }
        ?>
      </div>
      <div class="footer-block">
        <?php
        if (has_nav_menu('footer-2')) {
          wp_nav_menu(array(
            'theme_location' => 'footer-2',
            'menu_class'     => 'footer-menu',
            'container'      => false,
          ));
        }
        ?>
      </div>
      <div class="footer-block">
        <?php
        if (has_nav_menu('footer-3')) {
          wp_nav_menu(array(
            'theme_location' => 'footer-3',
            'menu_class'     => 'footer-menu',
            'container'      => false,
          ));
        }
        ?>
      </div>
    </div>
  </div>
  <footer class="footer">
  <div class="container">
    <div class="footer-copyright">
      &copy; <?php echo date('Y'); ?> 
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <?php bloginfo('name'); ?>
      </a>. 
      All Rights Reserved. Designed by 
      <a href="https://yourwebsite.com" target="_blank" rel="noopener">
        AcademiX
      </a>.
    </div>
  </div>
</footer>
