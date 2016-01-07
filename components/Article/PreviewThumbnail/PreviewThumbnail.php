<?php

function Article_PreviewThumbnail( $post_id ) {
  $link = get_permalink( $post_id );
  $title = get_the_title( $post_id );
  $images = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'full' );

  $has_images = count( $images ) > 0; 
?>
  <a
      class="article__preview-thumbnail"
      <?php if ( $has_images ) : ?>
        style="background-image: url(<?php echo $images[0]; ?>)"
      <?php endif; ?>
      href="<?php echo $link; ?>">
    <h3 class="article__preview-thumbnail-title">
      <?php echo $title; ?>
    </h3>
  </a>
<?php
}