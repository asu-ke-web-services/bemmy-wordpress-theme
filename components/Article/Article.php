<?php

require_once dirname( __FILE__ ) . '/Header/Header.php';
require_once dirname( __FILE__ ) . '/Content/Content.php';
require_once dirname( __FILE__ ) . '/Content/Continue.php';
require_once dirname( __FILE__ ) . '/Footer/Footer.php';

function Article() {
?>
<div class="article">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php Article_Header(); ?>
    <?php
      if ( is_single() ) {
        Article_Content();
      } else {
        Article_Continue();
      }
    ?>  
    <?php Article_Footer(); ?>
  </article>
</div>

<?php
}
