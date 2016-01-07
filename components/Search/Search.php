<?php

require_once dirname( __FILE__ ) . '/Header/Header.php';
require_once dirname( dirname( __FILE__ ) ) . '/Article/Summary/Summary.php';
require_once dirname( dirname( __FILE__ ) ) . '/Article/Footer/Footer.php';

function Search() {
?>
<div class="article">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php Search_Header(); ?>
    <?php Article_Summary(); ?>
    <?php Article_Footer(); ?>
  </article>
</div>

<?php
}
