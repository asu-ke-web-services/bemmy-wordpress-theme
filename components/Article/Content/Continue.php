<?php

function Article_Continue() {
?>
<div class="article__content article__content--continue">
  <?php the_excerpt(); ?>
  <a href="<?php echo get_permalink(); ?>">
    <?php
      echo sprintf(
        /* translators: %s: Name of current post. */
        wp_kses( __( 'Continue reading %s <span class="meta-nav">&raquo;</span>', 'bemmy' ), array( 'span' => array( 'class' => array() ) ) ),
        the_title( '<span class="screen-reader-text">"', '"</span>', false )
      );
    ?>
  </a>
  <?php
    wp_link_pages( array(
      'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bemmy' ),
      'after'  => '</div>',
    ) );
  ?>
</div>

<?php
}
