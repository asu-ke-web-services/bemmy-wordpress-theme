<?php

function Brand() {
?>
  <div class="brand">
    <h1 class="brand__title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    <?php
    $description = get_bloginfo( 'description', 'display' );
    if ( $description || is_customize_preview() ) : ?>
      <span class="brand__description"><?php echo $description; /* WPCS: xss ok. */ ?></span>
    <?php
    endif; ?>
  </div>
<?php
}
