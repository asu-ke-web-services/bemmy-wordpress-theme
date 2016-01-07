<?php

/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function bemmy_posted_on() {
  $byline = sprintf(
    esc_html_x( '%s', 'post author', 'bemmy' ),
    '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
  );

  $posted_in = '';

  // Hide category and tag text for pages.
  if ( 'post' === get_post_type() ) {
    /* translators: used between list items, there is a space after the comma */
    $tags_list = get_the_tag_list( '', esc_html__( ', ', 'bemmy' ) );
    if ( $tags_list ) {
      $posted_in .= sprintf( ' on <span class="tags-links">' . esc_html__( ' %1$s', 'bemmy' ) . '</span>', $tags_list ); // WPCS: XSS OK.
    }

    /* translators: used between list items, there is a space after the comma */
    $categories_list = get_the_category_list( esc_html__( ', ', 'bemmy' ) );
    if ( $categories_list && bemmy_categorized_blog() ) {
      $posted_in .= sprintf( ' <span class="cat-links">' . esc_html__( ' in %1$s', 'bemmy' ) . '</span>', $categories_list ); // WPCS: XSS OK.
    }
  }

  echo '<span class="artcile__meta-byline"> ' . $byline . '</span><span class="article__meta-in">' . $posted_in . '</span>'; // WPCS: XSS OK.



  $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
  if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
    $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
  }

  $time_string = sprintf( $time_string,
    esc_attr( get_the_date( 'c' ) ),
    esc_html( get_the_date() ),
    esc_attr( get_the_modified_date( 'c' ) ),
    esc_html( get_the_modified_date() )
  );

  $posted_on = sprintf(
    '<span class="sep"> | </span>' . esc_html_x( ' %s', 'post date', 'bemmy' ),
    '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
  );

  echo $posted_on;
}


function bemmy_entry_footer() {
  

  if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
    echo '<span class="comments-link">';
    comments_popup_link( esc_html__( 'Leave a comment', 'bemmy' ), esc_html__( '1 Comment', 'bemmy' ), esc_html__( '% Comments', 'bemmy' ) );
    echo '</span>';
  }

  edit_post_link(
    sprintf(
      /* translators: %s: Name of current post */
      esc_html__( 'Edit %s', 'bemmy' ),
      the_title( '<span class="screen-reader-text">"', '"</span>', false )
    ),
    '<span class="edit-link">',
    '</span>'
  );
}

function Article_Meta() {
?>

<div class="article__meta">
  <?php bemmy_posted_on(); ?>
</div>

<?php
}
