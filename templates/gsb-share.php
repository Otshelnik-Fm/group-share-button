<?php
/*
  v1.0
  Шаблон дополнения Group Share Button.
  Шаблон для показа кнопок поделиться в соцсетях
  Этот шаблон можно скопировать в папку реколл шаблонов по пути: ваш-сайт/wp-content/wp-recall/templates/
  - сделать нужные вам правки и изменения, и он будет подключаться оттуда.
  Работа с шаблонами описана тут: https://codeseller.ru/?p=11632
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$link  = get_the_permalink();
$title = get_the_title();

$fb_url  = 'https://www.facebook.com/sharer.php?u=' . $link;
$vk_url  = 'https://vkontakte.ru/share.php?url=' . $link;
$ok_url  = 'https://connect.ok.ru/offer?url=' . $link;
$tw_url  = 'https://twitter.com/intent/tweet?text=' . $title . ' ' . $link;
$mr_url  = 'https://connect.mail.ru/share?url=' . $link;
$pin_url = 'https://pinterest.com/pin/create/button/?url=' . $link;
?>

<div class="gsb_share_box">
    <a class="gsb_ico gsb_fb" title="Facebook" onclick="window.open( '<?php echo $fb_url; ?>', 'sharer', 'toolbar=0,status=0,width=700,height=400' );yaCounter46868760.reachGoal( 'fb_sh' ); return true;" href="javascript: void(0)" rel="nofollow noopener">
        <i class="rcli fa-facebook" aria-hidden="true"></i>
    </a>

    <a class="gsb_ico gsb_tw" title="Twitter" onClick="window.open( '<?php echo $tw_url; ?>', 'sharer', 'toolbar=0,status=0,width=700,height=400' );yaCounter46868760.reachGoal( 'tw_sh' );return true;" href="javascript: void(0)" rel="nofollow noopener">
        <i class="rcli fa-twitter" aria-hidden="true"></i>
    </a>

    <a class="gsb_ico gsb_vk" title="ВКонтакте" onClick="window.open( '<?php echo $vk_url; ?>', 'sharer', 'toolbar=0,status=0,width=700,height=400' );yaCounter46868760.reachGoal( 'vk_sh' );return true;" href="javascript: void(0)" rel="nofollow noopener">
        <i class="rcli fa-vk" aria-hidden="true"></i>
    </a>

    <a class="gsb_ico gsb_tg no_marked_icon" title="Telegram" href="javascript:window.open('https://t.me/share/url?url='+encodeURIComponent(window.location.href), '_blank')" rel="nofollow noopener">
        <i class="rcli fa-paper-plane" aria-hidden="true"></i>
    </a>

    <a class="gsb_ico gsb_ok" title="Одноклассники" onClick="window.open( '<?php echo $ok_url; ?>', 'sharer', 'toolbar=0,status=0,width=700,height=400' );yaCounter46868760.reachGoal( 'ok_sh' );return true;" href="javascript: void(0)" rel="nofollow noopener">
        <i class="rcli fa-odnoklassniki" aria-hidden="true"></i>
    </a>

    <a class="gsb_ico gsb_mr" title="Мой Мир" onClick="window.open( '<?php echo $mr_url; ?>', 'sharer', 'toolbar=0,status=0,width=700,height=400' );yaCounter46868760.reachGoal( 'mr_sh' );return true;" href="javascript: void(0)" rel="nofollow noopener">
        <i class="rcli fa-at" aria-hidden="true"></i>
    </a>

    <a class="gsb_ico gsb_pin" title="Pinterest" onClick="window.open( '<?php echo $pin_url; ?>', 'sharer', 'toolbar=0,status=0,width=700,height=400' );yaCounter46868760.reachGoal( 'pin_sh' );return true;" href="javascript: void(0)" rel="nofollow noopener">
        <i class="rcli fa-pinterest" aria-hidden="true"></i>
    </a>

    <a class="gsb_copy" title="Скопировать ссылку в буфер" href="javascript: void(0)" rel="nofollow noopener">
        <i class="rcli fa-files-o" aria-hidden="true" title="Копировать ссылку"></i>
        <span>Копировать ссылку</span>
    </a>
    <input class="gsb_link_copy" value="<?php echo $link; ?>" style="position:absolute;z-index:-999;opacity:0;">
</div>