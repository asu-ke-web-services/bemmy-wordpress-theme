<?php

require_once dirname( dirname( __FILE__ ) ) . '/Meta/Meta.php';

function Search_Header() {
?>
<header class="article__header article__header--search">
  <?php the_title( sprintf( '<h2 class="article__title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

  <?php if ( 'post' === get_post_type() ) :
    Article_Meta();
  endif; ?>
</header>

<?php
}
