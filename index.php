<?php

/*

  ╔═╗╔╦╗╔═╗╔╦╗
  ║ ║ ║ ╠╣ ║║║ https://otshelnik-fm.ru
  ╚═╝ ╩ ╚  ╩ ╩

 */


// ресурсы
add_action( 'rcl_enqueue_scripts', 'gsb_load_resources', 10 );
function gsb_load_resources() {
    if ( ! rcl_is_group_single() && ! is_singular( 'post-group' ) )
        return;

    gsb_resources();
}

function gsb_resources() {
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
