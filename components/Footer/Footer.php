<?php

function Footer() {
?>
<footer id="colophon" class="footer" role="contentinfo">
  <div class="footer__info">
    <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bemmy' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'bemmy' ), 'WordPress' ); ?></a>
    <span class="sep"> | </span>
    <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'bemmy' ), 'bemmy', '<a href="https://github.com/idmontie" rel="designer">Ivan Montiel</a>' ); ?>
  </div>
</footer>
<?php
}
