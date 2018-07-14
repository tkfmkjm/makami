<?php
// sidebar
register_sidebar(array(
    'name'=>'Sidebar',
    'before_widget'=>'<div class="sidebar-wrapper">',
    'after_widget'=>'</div>',
    'before_title' => '<h4 class="sidebar-title">',
    'after_title' => '</h4>'
));

// activate featured image
add_theme_support( 'post-thumbnails' );

// activate custom menu
add_theme_support( 'menus' );

// change [...] to ...
function new_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

//本文抜粋を取得する関数
//使用方法：http://nelog.jp/get_the_custom_excerpt
// function get_the_custom_excerpt($content, $length) {
//     $length = ($length ? $length : 200);//デフォルトの長さを指定する
//     $content =  preg_replace('/<!--more-->.+/is',"",$content); //moreタグ以降削除
//     $content =  strip_shortcodes($content);//ショートコード削除
//     $content =  strip_tags($content);//タグの除去
//     $content =  str_replace("&nbsp;","",$content);//特殊文字の削除（今回はスペースのみ）
//     $content =  mb_substr($content,0,$length);//文字列を指定した長さで切り取る
//     return $content;
//   }


// Pagination
function pagination_bar() {
    global $wp_query;
 
    $total_pages = $wp_query->max_num_pages;
 
    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));
 
        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}
    
?>