<?php
/*
Plugin Name: ionMag Smart List Styles - Red Premium Pack
Plugin URI: https://www.wpion.com/?utm_source=ionMag_free&utm_campaign=premium_plugins_uri&utm_medium=wp_admin
Description: 7 Smart List Styles for the ionMag Theme
Author: WPion
Version: 1.1
Author URI: https://www.wpion.com/?utm_source=ionMag_free&utm_campaign=premium_plugins_uri&utm_medium=wp_admin
*/
class td_api_plugin_smart_lists_red {
    var $plugin_url = '';
    var $plugin_path = '';

    function __construct() {
        $this->plugin_url = plugins_url('', __FILE__); // path used for elements like images, css, etc which are available on end user
        $this->plugin_path = dirname(__FILE__); // used for internal (server side) files

        add_action('td_global_after', array($this, 'hook_td_global_after')); // hook used to add or modify items via Api
        add_action('admin_enqueue_scripts', array('td_api_plugin_smart_lists_red', 'td_plugin_wpadmin_css')); // hook used to add custom css for wp-admin area
        add_action('wp_enqueue_scripts', array('td_api_plugin_smart_lists_red', 'td_plugin_frontend_css')); // hook used to add custom css used on frontend area
    }

    static function td_plugin_wpadmin_css() {
        wp_enqueue_style('td-plugin-smart-lists-red-framework', plugins_url('', __FILE__) . '/style-admin.css'); // backend css (admin_enqueue_scripts)
    }

    static function td_plugin_frontend_css() {
        wp_enqueue_style('td-plugin-smart-lists-red-framework', plugins_url('', __FILE__) . '/style.css'); // frontend css (wp_enqueue_scripts)
    }

    function hook_td_global_after()    { //add the api code inside this function

        /**
         * Thumbs
         */
        td_api_thumb::update('td_640x0',
            array(
                'name' => 'td_640x0',
                'width' => 640,
                'height' => 0,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    '<span style="color:#f1a1a1;">Smart list Red 2 &middot; 3 &middot; 4 &middot; 5 &middot; 6</span>'
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
                    '<span style="color:#f1a1a1;">Smart list Red 2 &middot; 3 &middot; 4 &middot; 5 &middot; 6</span>'
                ),
                'no_image_path' => $this->plugin_url,
            )
        );


        /**
         * Smart lists
         */
        td_api_smart_list::add('td_smart_list_rd_1',
            array(
                'file' => $this->plugin_path . '/smart_lists/td_smart_list_rd_1.php',
                'text' => 'Smart list Red 1',
                'img' => $this->plugin_url . '/images/panel/smart_lists/td_smart_list_rd_1.png',
                'extract_first_image' => true,
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_smart_list::add('td_smart_list_rd_2',
            array(
                'file' => $this->plugin_path . '/smart_lists/td_smart_list_rd_2.php',
                'text' => 'Smart list Red 2',
                'img' => $this->plugin_url . '/images/panel/smart_lists/td_smart_list_rd_2.png',
                'extract_first_image' => true,
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_smart_list::add('td_smart_list_rd_3',
            array(
                'file' => $this->plugin_path . '/smart_lists/td_smart_list_rd_3.php',
                'text' => 'Smart list Red 3',
                'img' => $this->plugin_url . '/images/panel/smart_lists/td_smart_list_rd_3.png',
                'extract_first_image' => true,
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_smart_list::add('td_smart_list_rd_4',
            array(
                'file' => $this->plugin_path . '/smart_lists/td_smart_list_rd_4.php',
                'text' => 'Smart list Red 4',
                'img' => $this->plugin_url . '/images/panel/smart_lists/td_smart_list_rd_4.png',
                'extract_first_image' => true,
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_smart_list::add('td_smart_list_rd_5',
            array(
                'file' => $this->plugin_path . '/smart_lists/td_smart_list_rd_5.php',
                'text' => 'Smart list Red 5',
                'img' => $this->plugin_url . '/images/panel/smart_lists/td_smart_list_rd_5.png',
                'extract_first_image' => true,
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_smart_list::add('td_smart_list_rd_6',
            array(
                'file' => $this->plugin_path . '/smart_lists/td_smart_list_rd_6.php',
                'text' => 'Smart list Red 6',
                'img' => $this->plugin_url . '/images/panel/smart_lists/td_smart_list_rd_6.png',
                'extract_first_image' => true,
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_smart_list::add('td_smart_list_rd_7',
            array(
                'file' => $this->plugin_path . '/smart_lists/td_smart_list_rd_7.php',
                'text' => 'Smart list Red 7',
                'img' => $this->plugin_url . '/images/panel/smart_lists/td_smart_list_rd_7.png',
                'extract_first_image' => false,
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );


        /**
         * Ads
         */
        td_api_ad::add('smart_list_rd_3',
            array(
                'text' => 'Smart list Red 3',
                'ad_type' => 'ajax',
                'fields' => array(
                    'ad_field_position_content' => false,
                    'ad_field_after_paragraph' => false,
                ),
                'premium' => true
            )
        );

        td_api_ad::add('smart_list_rd_4',
            array(
                'text' => 'Smart list Red 4',
                'ad_type' => 'ajax',
                'fields' => array(
                    'ad_field_position_content' => false,
                    'ad_field_after_paragraph' => false,
                ),
                'premium' => true
            )
        );

        td_api_ad::add('smart_list_rd_5',
            array(
                'text' => 'Smart list Red 5',
                'ad_type' => 'ajax',
                'fields' => array(
                    'ad_field_position_content' => false,
                    'ad_field_after_paragraph' => false,
                ),
                'premium' => true
            )
        );

        td_api_ad::add('smart_list_rd_6',
            array(
                'text' => 'Smart list Red 6',
                'ad_type' => 'ajax',
                'fields' => array(
                    'ad_field_position_content' => false,
                    'ad_field_after_paragraph' => false,
                ),
                'premium' => true
            )
        );

        td_api_ad::add('smart_list_rd_7',
            array(
                'text' => 'Smart list Red 7',
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
new td_api_plugin_smart_lists_red();