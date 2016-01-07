<?php

require_once dirname( dirname( __FILE__ ) ) . '/Brand/Brand.php';
require_once dirname( dirname( __FILE__ ) ) . '/Article/Feature/Feature.php';

function Navigation() {
?>
<header id="masthead" class="navigation" role="banner">
  <div class="navigation__container">
    <?php Brand(); ?>
      
    <nav id="site-navigation" class="navigation__nav" role="navigation">
      <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
        <?php esc_html_e( 'Primary Menu', 'bemmy' ); ?>
      </button>

      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
    </nav>
  </div>
</header>


<?php
  if ( has_post_thumbnail() && ! is_home() && ! is_front_page() ) {
    Article_Feature();
  }
}
