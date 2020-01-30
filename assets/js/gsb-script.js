// copy
function gsbCopy( e ) {
    jQuery( e ).siblings( 'input.gsb_link_copy' ).select();
    document.execCommand( 'copy' );
    jQuery( e ).after( '<div class="gsb_mess">Скопировано</div>' ).fadeIn().delay( 1500 );
    jQuery( '.gsb_mess' ).delay( 2000 ).fadeOut();
}