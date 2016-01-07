<?php

function Article_Content() {
?>
<div class="article__content">
    <?php
      the_content();

      wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bemmy' ),
        'after'  => '</div>',
      ) );
    ?>
  </div>

<?php
}
