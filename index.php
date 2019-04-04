<?php

/*

  ╔═╗╔╦╗╔═╗╔╦╗
  ║ ║ ║ ╠╣ ║║║ https://otshelnik-fm.ru
  ╚═╝ ╩ ╚  ╩ ╩

 */


// ресурсы
add_action( 'rcl_enqueue_scripts', 'gsb_resources', 10 );
function gsb_resources() {
    if ( ! rcl_is_group_single() && ! is_singular( 'post-group' ) )
        return;

    rcl_enqueue_style( 'gsb_style', rcl_addon_url( 'assets/css/gsb-style.css', __FILE__ ) );
    rcl_enqueue_script( 'gsb_script', rcl_addon_url( 'assets/js/gsb-script.js', __FILE__ ), false, true );
}

// выведем блок "поделиться" - в подвале groups theme replace
add_action( 'gtr_post_footer', 'gsb_get_repost_box', 20 );
function gsb_get_repost_box() {
    echo gsb_share_box();
}

// шаблон
function gsb_get_template() {
    return rcl_get_include_template( 'gsb-share.php', __FILE__ );
}

// поделиться блок
function gsb_share_box() {
    $content = gsb_get_template();

    $out = '<div class="gsb_share">';
    $out .= '<i class="rcli fa-retweet" aria-hidden="true" onclick=""></i>';
    $out .= '<div class="gsb_share_hidden">' . $content . '</div>';
    $out .= '</div>';

    return $out;
}

add_filter( 'the_content', 'gsb_share_in_single_post', 30 );
function gsb_share_in_single_post( $content ) {
    if ( is_single() && in_the_loop() && is_main_query() ) {
        global $post;
        if ( $post->post_type !== 'post-group' )
            return $content;

        $share = gsb_get_template();
        return $content . '<div class="gsb_post_share">' . $share . '</div>';
    }

    return $content;
}

function gsb_bookmarks() {
    if ( ! is_user_logged_in() || ! rcl_exist_addon( 'bookmarks' ) || ! is_singular( 'post-group' ) )
        return;

    global $post;
    $out = '<div class="gsb_bookmark">';
    $out .= '<a href="#" class="add-bookmark" title="В закладки" data-post="' . $post->ID . '">';
    $out .= '<i class="rcli fa-bookmark-o" aria-hidden="true"></i>';
    $out .= '<span>В закладки</span>';
    $out .= '</a>';
    $out .= '</div>';

    echo $out;
}
