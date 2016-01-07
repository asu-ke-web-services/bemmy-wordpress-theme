<?php

require_once dirname( __FILE__ ) . '/Header/Header.php';
require_once dirname( dirname( __FILE__ ) ) . '/Article/Content/Content.php';
require_once dirname( __FILE__ ) . '/Footer/Footer.php';

function Page() {
?>
<div class="article">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php Page_Header(); ?>
    <?php Article_Content(); ?>
    <?php Page_Footer(); ?>
  </article>
</div>

<?php
}
