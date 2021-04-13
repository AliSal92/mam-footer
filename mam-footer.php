<?php
/**
 * Plugin Name: MAM Footer
 * Plugin URI: https://github.com/AliSal92/mam-footer
 * Description: Generates [mam_footer_uk], [mam_footer_th], [mam_footer_th_th] and [mam_footer_au] shortcodes used to add Designed by moveaheadmedia link to the website footer. Can be used like this too [mam_footer_au]Move Ahead Media[/mam_footer_au]
 * Version: 1.0
 * Author: Ali Sal
 * Author URI: https://github.com/AliSal92/
 */

add_shortcode( 'mam_footer_uk', 'mam_footer_uk' );
function mam_footer_uk($atts, $content = "Move Ahead Media") {
    $html = '<a href="http://www.moveaheadmedia.co.uk/" rel="nofollow, noopener" target="_blank">'.$content.'</a>';
    if(is_front_page()){
        $html = '<a href="http://www.moveaheadmedia.co.uk/" rel="follow, noopener" target="_blank">'.$content.'</a>';
    }
    return $html;
}

add_shortcode( 'mam_footer_au', 'mam_footer_au' );
function mam_footer_au($atts, $content = "Move Ahead Media") {
    $html = '<a href="http://www.moveaheadmedia.com.au/" rel="nofollow, noopener" target="_blank">'.$content.'</a>';
    if(is_front_page()){
        $html = '<a href="http://www.moveaheadmedia.com.au/" rel="follow, noopener" target="_blank">'.$content.'</a>';
    }
    return $html;
}

add_shortcode( 'mam_footer_th_th', 'mam_footer_th_th' );
function mam_footer_th($atts, $content = "Move Ahead Media") {
    $html = '<a href="http://www.moveaheadmedia.co.th/th/" rel="nofollow, noopener" target="_blank">'.$content.'</a>';
    if(is_front_page()){
        $html = '<a href="http://www.moveaheadmedia.co.th/th/" rel="follow, noopener" target="_blank">'.$content.'</a>';
    }
    return $html;
}