<?php
/*
Plugin Name: gw2armory
Plugin URI: 
Description: gw2armory
Version: 1.0
Author: xcesior
Author URI: 
*/
?>
<?php
/*  Copyright å2017 xcesior (email: 229500627@qq.com

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
?>
<?php
function hook_gw2_head(){
	echo '<script async src="https://gw2armory.com/gw2aEmbeds.js"></script>';
}
function hook_gw2_scripts(){
	wp_enqueue_script('gw2',plugin_dir_url( __FILE__ ).'gw2.js');
	wp_enqueue_style('gw2',plugin_dir_url( __FILE__ ).'gw2.css');
	
}
add_action('wp_head','hook_gw2_head');
add_action('wp_enqueue_scripts', 'hook_gw2_scripts');

function gw2_get_avatar($atts, $content=''){
	extract( shortcode_atts( array('user_id' => 0,
					'size' => 96 ), $atts ) );
	if( !$user_id )	return;
	return get_avatar($user_id, $size);
}
function gw2_get_user_box( $atts, $content='' ){
	extract( shortcode_atts( array('user_id' => 0,
					'size' => 96 ), $atts ) );
	if( !$user_id )	return;
	$user = get_user_by( 'id', $user_id );
	return  $user->display_name;
}
add_shortcode( 'gw2Avatar', 'gw2_get_avatar' );
add_shortcode( 'gw2Userbox', 'gw2_get_user_box' );
function gw2_debug($content){
	global $wp_filter;
	print '<pre>';
	print_r($wp_filter['the_content']);
	print '</pre>';
	return $content;
}
function add_tinymce_options($opt){
        $opt['verify_html'] = false;
        return $opt;
}

add_filter('tiny_mce_before_init', 'add_tinymce_options');

//add_filter("the_content", gw2_debug);
//remove_filter('the_content', 'wpautop');
?>
