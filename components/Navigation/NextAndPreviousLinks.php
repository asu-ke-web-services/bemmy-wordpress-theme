<?php

require_once dirname( dirname( __FILE__ ) ) . '/Article/PreviewThumbnail/PreviewThumbnail.php';

function NextAndPreviousLinks() {
  global $wp_query;

  $previous_post = get_previous_post();
  $next_post = get_next_post();

  $prev_id = empty( $previous_post ) ? null : $previous_post->ID;
  $next_id = empty( $next_post ) ? null : $next_post->ID;

?>
  <?php if ( ! empty( $prev_id ) && ! empty( $next_id ) ) : ?>
    <nav class="post-links post-links--both" role="navigation">
      <?php Article_PreviewThumbnail( $prev_id ); ?>
      <?php Article_PreviewThumbnail( $next_id); ?>
    </nav>
  <?php elseif ( ! empty( $prev_id ) ): ?>
    <nav class="post-links post-links--single" role="navigation">
      <?php Article_PreviewThumbnail( $prev_id ); ?>
    </nav>
  <?php elseif ( ! empty( $next_id ) ): ?>
    <nav class="post-links post-links--single" role="navigation">
      <?php Article_PreviewThumbnail( $next_id ); ?>
    </nav>
  <?php endif; ?>
<?php
}