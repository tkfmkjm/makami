<?php
if ( empty( get_search_query() ) ) :
    // 検索キーワードがないとき
    echo '<p>検索キーワードが未入力です。</p>';
  else :
    // 検索キーワードがあるとき
    if ( have_posts() ) :
      // 該当するエントリーがあるとき
      while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/post/content' );
      endwhile;
    else :
      // 該当するエントリーがないとき
      echo '<p>0 result found!</p>';
    endif;
  endif;
?>