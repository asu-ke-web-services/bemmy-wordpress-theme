<?php

function Page_Header() {
  if ( has_post_thumbnail() ) {
    //Article_Feature();
  } else {
?>
    <header class="article__header">
      <?php the_title( '<h1 class="article__title">', '</h1>' ); ?>
    </header><!-- .entry-header -->
<?php
  }
}