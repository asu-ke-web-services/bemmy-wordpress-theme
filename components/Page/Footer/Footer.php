<?php

function Page_Footer() {
?>
<footer class="article__footer">
  <?php
    edit_post_link(
      sprintf(
        /* translators: %s: Name of current post */
        esc_html__( 'Edit %s', 'bemmy' ),
        the_title( '<span class="screen-reader-text">"', '"</span>', false )
      ),
      '<span class="edit-link">',
      '</span>'
    );
  ?>
</footer>
<?php
}
