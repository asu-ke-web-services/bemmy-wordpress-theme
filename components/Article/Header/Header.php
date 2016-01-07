<?php

require_once dirname( dirname( __FILE__ ) ) . '/Meta/Meta.php';

function Article_Header() {
  $has_meta = 'post' === get_post_type();
  $modifier = $has_meta ? 'article__title--with-meta' : '';

?>
<header class="article__header">
  <?php
  if ( is_single() ) {
    if ( has_post_thumbnail() ) {
      //Article_Feature();
    } else {
      the_title( '<h1 class="article__title ' . $modifier . '">', '</h1>' );
    }
  } else {
    the_title( '<h2 class="article__title ' . $modifier . '"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
  }

  if ( $has_meta ) {
    Article_Meta();
  }
?>
</header>

<?php
}
