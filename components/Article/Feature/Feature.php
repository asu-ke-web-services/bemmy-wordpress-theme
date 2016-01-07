<?php

require_once dirname( dirname( __FILE__ ) ) . '/Header/Header.php';

function Article_Feature() {
  $images = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
?>
<div class="article__feature" style="background-image: url(<?php echo $images[0]; ?>)">
  <?php
  the_title( '<h1 class="article__title article__title--feature">', '</h1>' );
  ?>
</div>
<?php
}
