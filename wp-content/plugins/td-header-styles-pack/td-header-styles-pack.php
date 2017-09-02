<?php
/*
Plugin Name: ionMag Header Styles - Premium Pack
Plugin URI: https://www.wpion.com/?utm_source=ionMag_free&utm_campaign=premium_plugins_uri&utm_medium=wp_admin
Description: 9 Header Styles for the ionMag Theme
Author: WPion
Version: 1.1
Author URI: https://www.wpion.com/?utm_source=ionMag_free&utm_campaign=premium_plugins_uri&utm_medium=wp_admin
*/
class td_api_plugin_header_styles {
    var $plugin_url = '';
    var $plugin_path = '';

    function __construct() {
        $this->plugin_url = plugins_url('', __FILE__); // path used for elements like images, css, etc which are available on end user
        $this->plugin_path = dirname(__FILE__); // used for internal (server side) files

        add_action('td_global_after', array($this, 'hook_td_global_after')); // hook used to add or modify items via Api
        add_action('admin_enqueue_scripts', array('td_api_plugin_header_styles', 'td_plugin_wpadmin_css')); // hook used to add custom css for wp-admin area
        add_action('wp_enqueue_scripts', array('td_api_plugin_header_styles', 'td_plugin_frontend_css')); // hook used to add custom css used on frontend area
    }

    static function td_plugin_wpadmin_css() {
        wp_enqueue_style('td-plugin-header-styles-framework', plugins_url('', __FILE__) . '/style-admin.css'); // backend css (admin_enqueue_scripts)
    }

    static function td_plugin_frontend_css() {
        wp_enqueue_style('td-plugin-header-styles-framework', plugins_url('', __FILE__) . '/style.css'); // frontend css (wp_enqueue_scripts)
    }

    function hook_td_global_after()    { //add the api code inside this function

        /**
         * the headers
         */
        td_api_header_style::add('header_style_pr_1',
            array(
                'text' => '<strong>Style 1 - Premium</strong>',
                'file' => $this->plugin_path . '/header/header-style-pr-1.php',
                'img' => $this->plugin_url . '/images/panel/menu/icon-menu-p1.png',
                'premium' => true
            )
        );

        td_api_header_style::add('header_style_pr_2',
            array(
                'text' => '<strong>Style 2 - Premium</strong>',
                'file' => $this->plugin_path . '/header/header-style-pr-2.php',
                'img' => $this->plugin_url . '/images/panel/menu/icon-menu-p2.png',
                'premium' => true
            )
        );

        td_api_header_style::add('header_style_pr_3',
            array(
                'text' => '<strong>Style 3 - Premium</strong>',
                'file' => $this->plugin_path . '/header/header-style-pr-3.php',
                'img' => $this->plugin_url . '/images/panel/menu/icon-menu-p3.png',
                'premium' => true
            )
        );

        td_api_header_style::add('header_style_pr_4',
            array(
                'text' => '<strong>Style 4 - Premium</strong>',
                'file' => $this->plugin_path . '/header/header-style-pr-4.php',
                'img' => $this->plugin_url . '/images/panel/menu/icon-menu-p4.png',
                'premium' => true
            )
        );

        td_api_header_style::add('header_style_pr_5',
            array(
                'text' => '<strong>Style 5 - Premium</strong>',
                'file' => $this->plugin_path . '/header/header-style-pr-5.php',
                'img' => $this->plugin_url . '/images/panel/menu/icon-menu-p5.png',
                'premium' => true
            )
        );

        td_api_header_style::add('header_style_pr_6',
            array(
                'text' => '<strong>Style 6 - Premium</strong>',
                'file' => $this->plugin_path . '/header/header-style-pr-6.php',
                'img' => $this->plugin_url . '/images/panel/menu/icon-menu-p6.png',
                'premium' => true
            )
        );

        td_api_header_style::add('header_style_pr_7',
            array(
                'text' => '<strong>Style 7 - Premium</strong>',
                'file' => $this->plugin_path . '/header/header-style-pr-7.php',
                'img' => $this->plugin_url . '/images/panel/menu/icon-menu-p7.png',
                'premium' => true
            )
        );

        td_api_header_style::add('header_style_pr_8',
            array(
                'text' => '<strong>Style 8 - Premium</strong>',
                'file' => $this->plugin_path . '/header/header-style-pr-8.php',
                'img' => $this->plugin_url . '/images/panel/menu/icon-menu-p8.png',
                'premium' => true
            )
        );

        td_api_header_style::add('header_style_pr_9',
            array(
                'text' => '<strong>Style 9 - Premium</strong>',
                'file' => $this->plugin_path . '/header/header-style-pr-9.php',
                'img' => $this->plugin_url . '/images/panel/menu/icon-menu-p9.png',
                'premium' => true
            )
        );

    }
}
new td_api_plugin_header_styles();