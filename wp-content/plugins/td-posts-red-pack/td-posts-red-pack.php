<?php
/*
Plugin Name: ionMag Post Templates - Red Premium Pack
Plugin URI: https://www.wpion.com/?utm_source=ionMag_free&utm_campaign=premium_plugins_uri&utm_medium=wp_admin
Description: 15 Post Templates for the ionMag Theme
Author: WPion
Version: 1.1
Author URI: https://www.wpion.com/?utm_source=ionMag_free&utm_campaign=premium_plugins_uri&utm_medium=wp_admin
*/
class td_api_plugin_posts_red {
    var $plugin_url = '';
    var $plugin_path = '';

    function __construct() {
        $this->plugin_url = plugins_url('', __FILE__); // path used for elements like images, css, etc which are available on end user
        $this->plugin_path = dirname(__FILE__); // used for internal (server side) files

        add_action('td_global_after', array($this, 'hook_td_global_after')); // hook used to add or modify items via Api
        add_action('admin_enqueue_scripts', array('td_api_plugin_posts_red', 'td_plugin_wpadmin_css')); // hook used to add custom css for wp-admin area
        add_action('wp_enqueue_scripts', array('td_api_plugin_posts_red', 'td_plugin_frontend_css')); // hook used to add custom css used on frontend area
    }

    static function td_plugin_wpadmin_css() {
        wp_enqueue_style('td-plugin-posts-red-framework', plugins_url('', __FILE__) . '/style-admin.css'); // backend css (admin_enqueue_scripts)
    }

    static function td_plugin_frontend_css() {
        wp_enqueue_style('td-plugin-posts-red-framework', plugins_url('', __FILE__) . '/style.css'); // frontend css (wp_enqueue_scripts)
    }

    function hook_td_global_after()    { //add the api code inside this function
        // Thumbs
        td_api_thumb::update('td_300x0',
            array(
                'name' => 'td_300x0',
                'width' => 300,
                'height' => 0,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    '<span style="color:#f1a1a1;">Post template Red 1</span>'
                ),
                'no_image_path' => $this->plugin_url,
            )
        );

        td_api_thumb::update('td_640x0',
            array(
                'name' => 'td_640x0',
                'width' => 640,
                'height' => 0,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    '<span style="color:#f1a1a1;">Post template Red 2 &middot; 9 &middot; 14</span>'
                ),
                'no_image_path' => $this->plugin_url,
            )
        );

        td_api_thumb::update('td_980x0',
            array(
                'name' => 'td_980x0',
                'width' => 980,
                'height' => 0,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    '<span style="color:#f1a1a1;">Post template Red 2 &middot; 4 &middot; 5 &middot; 6 &middot; 7 &middot; 8 &middot; 14</span>'
                ),
                'no_image_path' => $this->plugin_url,
            )
        );

        /**
         * single template list
         */
        td_api_single_template::add('single_template_rd_1',
            array(
                'file' => $this->plugin_path . '/single_template_rd_1.php',
                'text' => 'Single template red 1',
                'img' => $this->plugin_url . '/images/panel/single_templates/single_template_rd_1.png',
                'show_featured_image_on_all_pages' => false,
                'bg_disable_background' => false,          // disable the featured image
                'bg_box_layout_config' => 'auto',                // auto | td-boxed-layout | td-full-layout
                'bg_use_featured_image_as_background' => false,   // uses the featured image as a background
                'exclude_ad_content_top' => true,
                'premium' => true
            )
        );

        td_api_single_template::add('single_template_rd_2',
            array(
                'file' => $this->plugin_path . '/single_template_rd_2.php',
                'text' => 'Single template red 2',
                'img' => $this->plugin_url . '/images/panel/single_templates/single_template_rd_2.png',
                'show_featured_image_on_all_pages' => false,
                'bg_disable_background' => false,          // disable the featured image
                'bg_box_layout_config' => 'auto',                // auto | td-boxed-layout | td-full-layout
                'bg_use_featured_image_as_background' => false,   // uses the featured image as a background
                'exclude_ad_content_top' => false,
                'premium' => true
            )
        );

        td_api_single_template::add('single_template_rd_3',
            array(
                'file' => $this->plugin_path . '/single_template_rd_3.php',
                'text' => 'Single template red 3',
                'img' => $this->plugin_url . '/images/panel/single_templates/single_template_rd_3.png',
                'show_featured_image_on_all_pages' => false,
                'bg_disable_background' => false,          // disable the featured image
                'bg_box_layout_config' => 'auto',                // auto | td-boxed-layout | td-full-layout
                'bg_use_featured_image_as_background' => false,   // uses the featured image as a background
                'exclude_ad_content_top' => false,
                'premium' => true
            )
        );

        td_api_single_template::add('single_template_rd_4',
            array(
                'file' => $this->plugin_path . '/single_template_rd_4.php',
                'text' => 'Single template red 4',
                'img' => $this->plugin_url . '/images/panel/single_templates/single_template_rd_4.png',
                'show_featured_image_on_all_pages' => true,
                'bg_disable_background' => false,          // disable the featured image
                'bg_box_layout_config' => 'auto',                // auto | td-boxed-layout | td-full-layout
                'bg_use_featured_image_as_background' => false,   // uses the featured image as a background
                'exclude_ad_content_top' => false,
                'premium' => true
            )
        );

        td_api_single_template::add('single_template_rd_5',
            array(
                'file' => $this->plugin_path . '/single_template_rd_5.php',
                'text' => 'Single template red 5',
                'img' => $this->plugin_url . '/images/panel/single_templates/single_template_rd_5.png',
                'show_featured_image_on_all_pages' => true,
                'bg_disable_background' => false,          // disable the featured image
                'bg_box_layout_config' => 'auto',                // auto | td-boxed-layout | td-full-layout
                'bg_use_featured_image_as_background' => false,   // uses the featured image as a background
                'exclude_ad_content_top' => false,
                'premium' => true
            )
        );

        td_api_single_template::add('single_template_rd_6',
            array(
                'file' => $this->plugin_path . '/single_template_rd_6.php',
                'text' => 'Single template red 6',
                'img' => $this->plugin_url . '/images/panel/single_templates/single_template_rd_6.png',
                'show_featured_image_on_all_pages' => true,
                'bg_disable_background' => false,          // disable the featured image
                'bg_box_layout_config' => 'auto',                // auto | td-boxed-layout | td-full-layout
                'bg_use_featured_image_as_background' => false,   // uses the featured image as a background
                'exclude_ad_content_top' => false,
                'premium' => true
            )
        );

        td_api_single_template::add('single_template_rd_7',
            array(
                'file' => $this->plugin_path . '/single_template_rd_7.php',
                'text' => 'Single template red 7',
                'img' => $this->plugin_url . '/images/panel/single_templates/single_template_rd_7.png',
                'show_featured_image_on_all_pages' => true,
                'bg_disable_background' => false,          // disable the featured image
                'bg_box_layout_config' => 'auto',                // auto | td-boxed-layout | td-full-layout
                'bg_use_featured_image_as_background' => false,   // uses the featured image as a background
                'exclude_ad_content_top' => false,
                'premium' => true
            )
        );

        td_api_single_template::add('single_template_rd_8',
            array(
                'file' => $this->plugin_path . '/single_template_rd_8.php',
                'text' => 'Single template red 8',
                'img' => $this->plugin_url . '/images/panel/single_templates/single_template_rd_8.png',
                'show_featured_image_on_all_pages' => true,
                'bg_disable_background' => false,          // disable the featured image
                'bg_box_layout_config' => 'auto',                // auto | td-boxed-layout | td-full-layout
                'bg_use_featured_image_as_background' => false,   // uses the featured image as a background
                'exclude_ad_content_top' => false,
                'premium' => true
            )
        );

        td_api_single_template::add('single_template_rd_9',
            array(
                'file' => $this->plugin_path . '/single_template_rd_9.php',
                'text' => 'Single template red 9',
                'img' => $this->plugin_url . '/images/panel/single_templates/single_template_rd_9.png',
                'show_featured_image_on_all_pages' => true,
                'bg_disable_background' => false,          // disable the featured image
                'bg_box_layout_config' => 'auto',                // auto | td-boxed-layout | td-full-layout
                'bg_use_featured_image_as_background' => false,   // uses the featured image as a background
                'exclude_ad_content_top' => false,
                'premium' => true
            )
        );

        td_api_single_template::add('single_template_rd_10',
            array(
                'file' => $this->plugin_path . '/single_template_rd_10.php',
                'text' => 'Single template red 10',
                'img' => $this->plugin_url . '/images/panel/single_templates/single_template_rd_10.png',
                'show_featured_image_on_all_pages' => true,
                'bg_disable_background' => false,          // disable the featured image
                'bg_box_layout_config' => 'auto',                // auto | td-boxed-layout | td-full-layout
                'bg_use_featured_image_as_background' => false,   // uses the featured image as a background
                'exclude_ad_content_top' => false,
                'premium' => true
            )
        );

        td_api_single_template::add('single_template_rd_11',
            array(
                'file' => $this->plugin_path . '/single_template_rd_11.php',
                'text' => 'Single template red 11',
                'img' => $this->plugin_url . '/images/panel/single_templates/single_template_rd_11.png',
                'show_featured_image_on_all_pages' => true,
                'bg_disable_background' => false,          // disable the featured image
                'bg_box_layout_config' => 'auto',                // auto | td-boxed-layout | td-full-layout
                'bg_use_featured_image_as_background' => false,   // uses the featured image as a background
                'exclude_ad_content_top' => false,
                'premium' => true
            )
        );

        td_api_single_template::add('single_template_rd_12',
            array(
                'file' => $this->plugin_path . '/single_template_rd_12.php',
                'text' => 'Single template red 12',
                'img' => $this->plugin_url . '/images/panel/single_templates/single_template_rd_12.png',
                'show_featured_image_on_all_pages' => true,
                'bg_disable_background' => false,          // disable the featured image
                'bg_box_layout_config' => 'auto',                // auto | td-boxed-layout | td-full-layout
                'bg_use_featured_image_as_background' => false,   // uses the featured image as a background
                'exclude_ad_content_top' => false,
                'premium' => true
            )
        );

        td_api_single_template::add('single_template_rd_13',
            array(
                'file' => $this->plugin_path . '/single_template_rd_13.php',
                'text' => 'Single template red 13',
                'img' => $this->plugin_url . '/images/panel/single_templates/single_template_rd_13.png',
                'show_featured_image_on_all_pages' => true,
                'bg_disable_background' => false,          // disable the featured image
                'bg_box_layout_config' => 'td-boxed-layout',                // auto | td-boxed-layout | td-full-layout
                'bg_use_featured_image_as_background' => true,   // uses the featured image as a background
                'exclude_ad_content_top' => false,
                'premium' => true
            )
        );

        td_api_single_template::add('single_template_rd_14',
            array(
                'file' => $this->plugin_path . '/single_template_rd_14.php',
                'text' => 'Single template red 14',
                'img' => $this->plugin_url . '/images/panel/single_templates/single_template_rd_14.png',
                'show_featured_image_on_all_pages' => false,
                'bg_disable_background' => false,          // disable the featured image
                'bg_box_layout_config' => 'auto',                // auto | td-boxed-layout | td-full-layout
                'bg_use_featured_image_as_background' => false,   // uses the featured image as a background
                'exclude_ad_content_top' => false,
                'premium' => true
            )
        );

        td_api_single_template::add('single_template_rd_15',
            array(
                'file' => $this->plugin_path . '/single_template_rd_15.php',
                'text' => 'Single template red 15',
                'img' => $this->plugin_url . '/images/panel/single_templates/single_template_rd_15.png',
                'show_featured_image_on_all_pages' => false,
                'bg_disable_background' => false,          // disable the featured image
                'bg_box_layout_config' => 'auto',                // auto | td-boxed-layout | td-full-layout
                'bg_use_featured_image_as_background' => false,   // uses the featured image as a background
                'exclude_ad_content_top' => false,
                'premium' => true
            )
        );

        td_api_single_template::add('single_template_rd_16',
            array(
                'file' => $this->plugin_path . '/single_template_rd_16.php',
                'text' => 'Single template red 16',
                'img' => $this->plugin_url . '/images/panel/single_templates/single_template_rd_16.png',
                'show_featured_image_on_all_pages' => true,
                'bg_disable_background' => false,          // disable the featured image
                'bg_box_layout_config' => 'auto',                // auto | td-boxed-layout | td-full-layout
                'bg_use_featured_image_as_background' => false,   // uses the featured image as a background
                'exclude_ad_content_top' => false,
                'premium' => true
            )
        );



        // add module typography/fonts customization options in the theme panel
        td_global::$typography_settings_list['Post title'] = array_merge( td_global::$typography_settings_list['Post title'] ,
            array (
                'td_post_title_rd_1' =>  array(
                    'text' => 'Style Red 1',
                    'type' => 'default',
                ),
                'td_post_title_rd_2' =>  array(
                    'text' => 'Style Red 2',
                    'type' => 'default',
                ),
                'td_post_title_rd_3' =>  array(
                    'text' => 'Style Red 3',
                    'type' => 'default',
                ),
                'td_post_title_rd_4' =>  array(
                    'text' => 'Style Red 4',
                    'type' => 'default',
                ),
                'td_post_title_rd_5' =>  array(
                    'text' => 'Style Red 5',
                    'type' => 'default',
                ),
                'td_post_title_rd_6' =>  array(
                    'text' => 'Style Red 6',
                    'type' => 'default',
                ),
                'td_post_title_rd_7' =>  array(
                    'text' => 'Style Red 7',
                    'type' => 'default',
                ),
                'td_post_title_rd_8' =>  array(
                    'text' => 'Style Red 8',
                    'type' => 'default',
                ),
                'td_post_title_rd_9' =>  array(
                    'text' => 'Style Red 9',
                    'type' => 'default',
                ),
                'td_post_title_rd_10' =>  array(
                    'text' => 'Style Red 10',
                    'type' => 'default',
                ),
                'td_post_title_rd_11' =>  array(
                    'text' => 'Style Red 11',
                    'type' => 'default',
                ),
                'td_post_title_rd_12' =>  array(
                    'text' => 'Style Red 12',
                    'type' => 'default',
                ),
                'td_post_title_rd_13' =>  array(
                    'text' => 'Style Red 13',
                    'type' => 'default',
                ),
                'td_post_title_rd_14' =>  array(
                    'text' => 'Style Red 14',
                    'type' => 'default',
                ),
                'td_post_title_rd_15' =>  array(
                    'text' => 'Style Red 15',
                    'type' => 'default',
                ),
                'td_post_title_rd_16' =>  array(
                    'text' => 'Style Red 16',
                    'type' => 'default',
                )

            )
        );


        // the @ variables in the css generator are loaded from the main theme for now...
        // we should be able to load @variables from here too
        td_api_css_generator::add('td-posts-red-pack', '
        <style>
            /* @td_post_title_rd_1 */
            .td-post-template-rd-1 .td-post-header .entry-title {
                @td_post_title_rd_1
            }
            
            /* @td_post_title_rd_2 */
            .td-post-template-rd-2 .td-post-header .entry-title {
                @td_post_title_rd_2
            }
            
            /* @td_post_title_rd_3 */
            .td-post-template-rd-3 .td-post-header .entry-title {
                @td_post_title_rd_3
            }
            
            /* @td_post_title_rd_4 */
            .td-post-template-rd-4 .td-post-header .entry-title {
                @td_post_title_rd_4
            }
            
            /* @td_post_title_rd_5 */
            .td-post-template-rd-5 .td-post-header .entry-title {
                @td_post_title_rd_5
            }
            
            /* @td_post_title_rd_6 */
            .td-post-template-rd-6 .td-post-header .entry-title {
                @td_post_title_rd_6
            }
            
            /* @td_post_title_rd_7 */
            .td-post-template-rd-7 .td-post-header .entry-title {
                @td_post_title_rd_7
            }
            
            /* @td_post_title_rd_8 */
            .td-post-template-rd-8 .td-post-header .entry-title {
                @td_post_title_rd_8
            }
            
            /* @td_post_title_rd_9 */
            .td-post-template-rd-9 .td-post-header .entry-title {
                @td_post_title_rd_9
            }
            
            /* @td_post_title_rd_10 */
            .td-post-template-rd-10 .td-post-header .entry-title {
                @td_post_title_rd_10
            }
            
            /* @td_post_title_rd_11 */
            .td-post-template-rd-11 .td-post-header .entry-title {
                @td_post_title_rd_11
            }
            
            /* @td_post_title_rd_12 */
            .td-post-template-rd-12 .td-post-header .entry-title {
                @td_post_title_rd_12
            }
            
            /* @td_post_title_rd_13 */
            .td-post-template-rd-13 .td-post-header .entry-title {
                @td_post_title_rd_13
            }
            
            /* @td_post_title_rd_14 */
            .td-post-template-rd-14 .td-post-header .entry-title {
                @td_post_title_rd_14
            }
            
            /* @td_post_title_rd_15 */
            .td-post-template-rd-15 .td-post-header .entry-title {
                @td_post_title_rd_15
            }
            
            /* @td_post_title_rd_16 */
            .td-post-template-rd-16 .td-post-header .entry-title {
                @td_post_title_rd_16
            }
            
            
        </style>
        ');


        /**
         * Ads
         */
        td_api_ad::add('post_style_rd_1',
            array(
                'text' => 'Post template Red 1',
                'ad_type' => 'ajax',
                'fields' => array(
                    'ad_field_position_content' => false,
                    'ad_field_after_paragraph' => false,
                ),
                'premium' => true
            )
        );

        td_api_ad::add('post_style_rd_9',
            array(
                'text' => 'Post template Red 9',
                'ad_type' => 'ajax',
                'fields' => array(
                    'ad_field_position_content' => false,
                    'ad_field_after_paragraph' => false,
                ),
                'premium' => true
            )
        );

        td_api_ad::add('post_style_rd_14',
            array(
                'text' => 'Post template Red 14 and 15',
                'ad_type' => 'ajax',
                'fields' => array(
                    'ad_field_position_content' => false,
                    'ad_field_after_paragraph' => false,
                ),
                'premium' => true
            )
        );
    }
}
new td_api_plugin_posts_red();