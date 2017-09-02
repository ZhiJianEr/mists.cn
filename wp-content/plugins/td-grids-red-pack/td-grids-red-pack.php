<?php
/*
Plugin Name: ionMag Big Grids - Red Premium Pack
Plugin URI: https://www.wpion.com/?utm_source=ionMag_free&utm_campaign=premium_plugins_uri&utm_medium=wp_admin
Description: 19 Grids for the ionMag Theme
Author: WPion
Version: 1.1
Author URI: https://www.wpion.com/?utm_source=ionMag_free&utm_campaign=premium_plugins_uri&utm_medium=wp_admin
*/
class td_api_plugin_big_grids_red {
    var $plugin_url = '';
    var $plugin_path = '';

    function __construct() {
        $this->plugin_url = plugins_url('', __FILE__); // path used for elements like images, css, etc which are available on end user
        $this->plugin_path = dirname(__FILE__); // used for internal (server side) files

        add_action('td_global_after', array($this, 'hook_td_global_after')); // hook used to add or modify items via Api
        add_action('admin_enqueue_scripts', array('td_api_plugin_big_grids_red', 'td_plugin_wpadmin_css')); // hook used to add custom css for wp-admin area
        add_action('wp_enqueue_scripts', array('td_api_plugin_big_grids_red', 'td_plugin_frontend_css')); // hook used to add custom css used on frontend area
    }

    static function td_plugin_wpadmin_css() {
        wp_enqueue_style('td-plugin-bg-red-framework', plugins_url('', __FILE__) . '/style-admin.css'); // backend css (admin_enqueue_scripts)
    }

    static function td_plugin_frontend_css() {
        wp_enqueue_style('td-plugin-bg-red-framework', plugins_url('', __FILE__) . '/style.css'); // frontend css (wp_enqueue_scripts)
    }

    function hook_td_global_after()    { //add the api code inside this function
        // Modules list
        td_api_module::add('td_module_mx_rd_bg_1',
            array(
                'file' => $this->plugin_path . '/modules/td_module_mx_rd_bg_1.php',
                'text' => 'Module BG MX Red 1',
                'img' => $this->plugin_url . '/images/modules/td_module_mx_rd_bg_1.png',
                'used_on_blocks' => array('Big Grid Red 1'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx_rd_bg_2',
            array(
                'file' => $this->plugin_path . '/modules/td_module_mx_rd_bg_2.php',
                'text' => 'Module BG MX Red 2',
                'img' => $this->plugin_url . '/images/modules/td_module_mx_rd_bg_2.png',
                'used_on_blocks' => array('Big Grid Red 1'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx_rd_bg_3',
            array(
                'file' => $this->plugin_path . '/modules/td_module_mx_rd_bg_3.php',
                'text' => 'Module BG MX Red 3',
                'img' => $this->plugin_url . '/images/modules/td_module_mx_rd_bg_3.png',
                'used_on_blocks' => array('Big Grid Red 1'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx_rd_bg_4',
            array(
                'file' => $this->plugin_path . '/modules/td_module_mx_rd_bg_4.php',
                'text' => 'Module BG MX Red 4',
                'img' => $this->plugin_url . '/images/modules/td_module_mx_rd_bg_4.png',
                'used_on_blocks' => array('Big Grid Red 2', 'Big Grid Red 4', 'Big Grid Red 10', 'Big Grid Red 13'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx_rd_bg_5',
            array(
                'file' => $this->plugin_path . '/modules/td_module_mx_rd_bg_5.php',
                'text' => 'Module BG MX Red 5',
                'img' => $this->plugin_url . '/images/modules/td_module_mx_rd_bg_5.png',
                'used_on_blocks' => array('Big Grid Red 2', 'Big Grid Red 16'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx_rd_bg_6',
            array(
                'file' => $this->plugin_path . '/modules/td_module_mx_rd_bg_6.php',
                'text' => 'Module BG MX Red 6',
                'img' => $this->plugin_url . '/images/modules/td_module_mx_rd_bg_6.png',
                'used_on_blocks' => array('Big Grid Red 3'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx_rd_bg_7',
            array(
                'file' => $this->plugin_path . '/modules/td_module_mx_rd_bg_7.php',
                'text' => 'Module BG MX Red 7',
                'img' => $this->plugin_url . '/images/modules/td_module_mx_rd_bg_7.png',
                'used_on_blocks' => array('Big Grid Red 3'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx_rd_bg_8',
            array(
                'file' => $this->plugin_path . '/modules/td_module_mx_rd_bg_8.php',
                'text' => 'Module BG MX Red 8',
                'img' => $this->plugin_url . '/images/modules/td_module_mx_rd_bg_8.png',
                'used_on_blocks' => array('Big Grid Red 4'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx_rd_bg_9',
            array(
                'file' => $this->plugin_path . '/modules/td_module_mx_rd_bg_9.php',
                'text' => 'Module BG MX Red 9',
                'img' => $this->plugin_url . '/images/modules/td_module_mx_rd_bg_9.png',
                'used_on_blocks' => array('Big Grid Red 5', 'Big Grid Red 6', 'Big Grid Red 15'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx_rd_bg_10',
            array(
                'file' => $this->plugin_path . '/modules/td_module_mx_rd_bg_10.php',
                'text' => 'Module BG MX Red 10',
                'img' => $this->plugin_url . '/images/modules/td_module_mx_rd_bg_10.png',
                'used_on_blocks' => array('Big Grid Red 5', 'Big Grid Red 6', 'Big Grid Red 15'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx_rd_bg_11',
            array(
                'file' => $this->plugin_path . '/modules/td_module_mx_rd_bg_11.php',
                'text' => 'Module BG MX Red 11',
                'img' => $this->plugin_url . '/images/modules/td_module_mx_rd_bg_11.png',
                'used_on_blocks' => array('Big Grid Red 7'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx_rd_bg_12',
            array(
                'file' => $this->plugin_path . '/modules/td_module_mx_rd_bg_12.php',
                'text' => 'Module BG MX Red 12',
                'img' => $this->plugin_url . '/images/modules/td_module_mx_rd_bg_12.png',
                'used_on_blocks' => array('Big Grid Red 7', 'Big Grid Red 8', 'Big Grid Red 12'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx_rd_bg_13',
            array(
                'file' => $this->plugin_path . '/modules/td_module_mx_rd_bg_13.php',
                'text' => 'Module BG MX Red 13',
                'img' => $this->plugin_url . '/images/modules/td_module_mx_rd_bg_13.png',
                'used_on_blocks' => array('Big Grid Red 8', 'Big Grid Red 12'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx_rd_bg_14',
            array(
                'file' => $this->plugin_path . '/modules/td_module_mx_rd_bg_14.php',
                'text' => 'Module BG MX Red 14',
                'img' => $this->plugin_url . '/images/modules/td_module_mx_rd_bg_14.png',
                'used_on_blocks' => array('Big Grid Red 9'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx_rd_bg_15',
            array(
                'file' => $this->plugin_path . '/modules/td_module_mx_rd_bg_15.php',
                'text' => 'Module BG MX Red 15',
                'img' => $this->plugin_url . '/images/modules/td_module_mx_rd_bg_15.png',
                'used_on_blocks' => array('Big Grid Red 11'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx_rd_bg_16',
            array(
                'file' => $this->plugin_path . '/modules/td_module_mx_rd_bg_16.php',
                'text' => 'Module BG MX Red 16',
                'img' => $this->plugin_url . '/images/modules/td_module_mx_rd_bg_16.png',
                'used_on_blocks' => array('Big Grid Red 11'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx_rd_bg_17',
            array(
                'file' => $this->plugin_path . '/modules/td_module_mx_rd_bg_17.php',
                'text' => 'Module BG MX Red 17',
                'img' => $this->plugin_url . '/images/modules/td_module_mx_rd_bg_17.png',
                'used_on_blocks' => array('Big Grid Red 12'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx_rd_bg_18',
            array(
                'file' => $this->plugin_path . '/modules/td_module_mx_rd_bg_18.php',
                'text' => 'Module BG MX Red 18',
                'img' => $this->plugin_url . '/images/modules/td_module_mx_rd_bg_18.png',
                'used_on_blocks' => array('Big Grid Red 14'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx_rd_bg_19',
            array(
                'file' => $this->plugin_path . '/modules/td_module_mx_rd_bg_19.php',
                'text' => 'Module BG MX Red 19',
                'img' => $this->plugin_url . '/images/modules/td_module_mx_rd_bg_19.png',
                'used_on_blocks' => array('Big Grid Red 14'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx_rd_bg_20',
            array(
                'file' => $this->plugin_path . '/modules/td_module_mx_rd_bg_20.php',
                'text' => 'Module BG MX Red 20',
                'img' => $this->plugin_url . '/images/modules/td_module_mx_rd_bg_20.png',
                'used_on_blocks' => array('Big Grid Red 17', 'Big Grid Red 18'),
                'excerpt_title' => 12,
                'excerpt_content' => 25,
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx_rd_bg_21',
            array(
                'file' => $this->plugin_path . '/modules/td_module_mx_rd_bg_21.php',
                'text' => 'Module BG MX Red 21',
                'img' => $this->plugin_url . '/images/modules/td_module_mx_rd_bg_21.png',
                'used_on_blocks' => array('Big Grid Red 17', 'Big Grid Red 19'),
                'excerpt_title' => 12,
                'excerpt_content' => 12,
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx_rd_bg_22',
            array(
                'file' => $this->plugin_path . '/modules/td_module_mx_rd_bg_22.php',
                'text' => 'Module BG MX Red 22',
                'img' => $this->plugin_url . '/images/modules/td_module_mx_rd_bg_22.png',
                'used_on_blocks' => array('Big Grid Red 16'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx_rd_bg_23',
            array(
                'file' => $this->plugin_path . '/modules/td_module_mx_rd_bg_23.php',
                'text' => 'Module BG MX Red 23',
                'img' => $this->plugin_url . '/images/modules/td_module_mx_rd_bg_23.png',
                'used_on_blocks' => array('Big Grid Red Full 1', 'Big Grid Red Full 6'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx_rd_bg_24',
            array(
                'file' => $this->plugin_path . '/modules/td_module_mx_rd_bg_24.php',
                'text' => 'Module BG MX Red 24',
                'img' => $this->plugin_url . '/images/modules/td_module_mx_rd_bg_24.png',
                'used_on_blocks' => array('Big Grid Red Full 2', 'Big Grid Red Full 8', 'Big Grid Red Full 9', 'Big Grid Red Full 10'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx_rd_bg_25',
            array(
                'file' => $this->plugin_path . '/modules/td_module_mx_rd_bg_25.php',
                'text' => 'Module BG MX Red 25',
                'img' => $this->plugin_url . '/images/modules/td_module_mx_rd_bg_25.png',
                'used_on_blocks' => array('Big Grid Red Full 3'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx_rd_bg_26',
            array(
                'file' => $this->plugin_path . '/modules/td_module_mx_rd_bg_26.php',
                'text' => 'Module BG MX Red 26',
                'img' => $this->plugin_url . '/images/modules/td_module_mx_rd_bg_26.png',
                'used_on_blocks' => array('Big Grid Red Full 4'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx_rd_bg_27',
            array(
                'file' => $this->plugin_path . '/modules/td_module_mx_rd_bg_27.php',
                'text' => 'Module BG MX Red 27',
                'img' => $this->plugin_url . '/images/modules/td_module_mx_rd_bg_27.png',
                'used_on_blocks' => array('Big Grid Red Full 5'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx_rd_bg_28',
            array(
                'file' => $this->plugin_path . '/modules/td_module_mx_rd_bg_28.php',
                'text' => 'Module BG MX Red 28',
                'img' => $this->plugin_url . '/images/modules/td_module_mx_rd_bg_28.png',
                'used_on_blocks' => array('Big Grid Red Full 7'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx_rd_bg_29',
            array(
                'file' => $this->plugin_path . '/modules/td_module_mx_rd_bg_29.php',
                'text' => 'Module BG MX Red 29',
                'img' => $this->plugin_url . '/images/modules/td_module_mx_rd_bg_29.png',
                'used_on_blocks' => array('Big Grid Red Full 7'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx_rd_bg_30',
            array(
                'file' => $this->plugin_path . '/modules/td_module_mx_rd_bg_30.php',
                'text' => 'Module BG MX Red 30',
                'img' => $this->plugin_url . '/images/modules/td_module_mx_rd_bg_30.png',
                'used_on_blocks' => array('Big Grid Red Full 8', 'Big Grid Red Full 9', 'Big Grid Red Full 10'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx_rd_bg_31',
            array(
                'file' => $this->plugin_path . '/modules/td_module_mx_rd_bg_31.php',
                'text' => 'Module BG MX Red 31',
                'img' => $this->plugin_url . '/images/modules/td_module_mx_rd_bg_31.png',
                'used_on_blocks' => array('Big Grid Red Full 6'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx_rd_bg_32',
            array(
                'file' => $this->plugin_path . '/modules/td_module_mx_rd_bg_32.php',
                'text' => 'Module BG MX Red 32',
                'img' => $this->plugin_url . '/images/modules/td_module_mx_rd_bg_32.png',
                'used_on_blocks' => array('Big Grid Red Full 9'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );



        // add module typography/fonts customization options in the theme panel
        td_global::$typography_settings_list['Big grids modules - Article Title'] = array_merge( td_global::$typography_settings_list['Big grids modules - Article Title'] ,
            array (
                'td_module_mx_rd_bg_1' =>  array(
                    'text' => 'Module BG MX Red 1',
                    'type' => 'default',
                ),
                'td_module_mx_rd_bg_2' =>  array(
                    'text' => 'Module BG MX Red 2',
                    'type' => 'default',
                ),
                'td_module_mx_rd_bg_3' =>  array(
                    'text' => 'Module BG MX Red 3',
                    'type' => 'default',
                ),
                'td_module_mx_rd_bg_4' =>  array(
                    'text' => 'Module BG MX Red 4',
                    'type' => 'default',
                ),
                'td_module_mx_rd_bg_5' =>  array(
                    'text' => 'Module BG MX Red 5',
                    'type' => 'default',
                ),
                'td_module_mx_rd_bg_6' =>  array(
                    'text' => 'Module BG MX Red 6',
                    'type' => 'default',
                ),
                'td_module_mx_rd_bg_7' =>  array(
                    'text' => 'Module BG MX Red 7',
                    'type' => 'default',
                ),
                'td_module_mx_rd_bg_8' =>  array(
                    'text' => 'Module BG MX Red 8',
                    'type' => 'default',
                ),
                'td_module_mx_rd_bg_9' =>  array(
                    'text' => 'Module BG MX Red 9',
                    'type' => 'default',
                ),
                'td_module_mx_rd_bg_10' =>  array(
                    'text' => 'Module BG MX Red 10',
                    'type' => 'default',
                ),
                'td_module_mx_rd_bg_11' =>  array(
                    'text' => 'Module BG MX Red 11',
                    'type' => 'default',
                ),
                'td_module_mx_rd_bg_12' =>  array(
                    'text' => 'Module BG MX Red 12',
                    'type' => 'default',
                ),
                'td_module_mx_rd_bg_13' =>  array(
                    'text' => 'Module BG MX Red 13',
                    'type' => 'default',
                ),
                'td_module_mx_rd_bg_14' =>  array(
                    'text' => 'Module BG MX Red 14',
                    'type' => 'default',
                ),
                'td_module_mx_rd_bg_15' =>  array(
                    'text' => 'Module BG MX Red 15',
                    'type' => 'default',
                ),
                'td_module_mx_rd_bg_16' =>  array(
                    'text' => 'Module BG MX Red 16',
                    'type' => 'default',
                ),
                'td_module_mx_rd_bg_17' =>  array(
                    'text' => 'Module BG MX Red 17',
                    'type' => 'default',
                ),
                'td_module_mx_rd_bg_18' =>  array(
                    'text' => 'Module BG MX Red 18',
                    'type' => 'default',
                ),
                'td_module_mx_rd_bg_19' =>  array(
                    'text' => 'Module BG MX Red 19',
                    'type' => 'default',
                ),
                'td_module_mx_rd_bg_20' =>  array(
                    'text' => 'Module BG MX Red 20',
                    'type' => 'default',
                ),
                'td_module_mx_rd_bg_21' =>  array(
                    'text' => 'Module BG MX Red 21',
                    'type' => 'default',
                ),
                'td_module_mx_rd_bg_22' =>  array(
                    'text' => 'Module BG MX Red 22',
                    'type' => 'default',
                ),
                'td_module_mx_rd_bg_23' =>  array(
                    'text' => 'Module BG MX Red 23',
                    'type' => 'default',
                ),
                'td_module_mx_rd_bg_24' =>  array(
                    'text' => 'Module BG MX Red 24',
                    'type' => 'default',
                ),
                'td_module_mx_rd_bg_25' =>  array(
                    'text' => 'Module BG MX Red 25',
                    'type' => 'default',
                ),
                'td_module_mx_rd_bg_26' =>  array(
                    'text' => 'Module BG MX Red 26',
                    'type' => 'default',
                ),
                'td_module_mx_rd_bg_27' =>  array(
                    'text' => 'Module BG MX Red 27',
                    'type' => 'default',
                ),
                'td_module_mx_rd_bg_28' =>  array(
                    'text' => 'Module BG MX Red 28',
                    'type' => 'default',
                ),
                'td_module_mx_rd_bg_29' =>  array(
                    'text' => 'Module BG MX Red 29',
                    'type' => 'default',
                ),
                'td_module_mx_rd_bg_30' =>  array(
                    'text' => 'Module BG MX Red 31',
                    'type' => 'default',
                ),
                'td_module_mx_rd_bg_31' =>  array(
                    'text' => 'Module BG MX Red 31',
                    'type' => 'default',
                ),
                'td_module_mx_rd_bg_32' =>  array(
                    'text' => 'Module BG MX Red 32',
                    'type' => 'default',
                )

            )
        );


        // the @ variables in the css generator are loaded from the main theme for now...
        // we should be able to load @variables from here too
        td_api_css_generator::add('td-grids-red-pack', '
        <style>
            /* @td_module_mx_rd_bg_1 */
            .td-theme-wrap .td_module_mx_rd_bg_1 .entry-title {
                @td_module_mx_rd_bg_1
            }
            
            /* @td_module_mx_rd_bg_2 */
            .td-theme-wrap .td_module_mx_rd_bg_2 .entry-title {
                @td_module_mx_rd_bg_2
            }
            
            /* @td_module_mx_rd_bg_3 */
            .td-theme-wrap .td_module_mx_rd_bg_3 .entry-title {
                @td_module_mx_rd_bg_3
            }
            
            /* @td_module_mx_rd_bg_4 */
            .td-theme-wrap .td_module_mx_rd_bg_4 .entry-title {
                @td_module_mx_rd_bg_4
            }
            
            /* @td_module_mx_rd_bg_5 */
            .td-theme-wrap .td_module_mx_rd_bg_5 .entry-title {
                @td_module_mx_rd_bg_5
            }
            
            /* @td_module_mx_rd_bg_6 */
            .td-theme-wrap .td_module_mx_rd_bg_6 .entry-title {
                @td_module_mx_rd_bg_6
            }
            
            /* @td_module_mx_rd_bg_7 */
            .td-theme-wrap .td_module_mx_rd_bg_7 .entry-title {
                @td_module_mx_rd_bg_7
            }
            
            /* @td_module_mx_rd_bg_8 */
            .td-theme-wrap .td_module_mx_rd_bg_8 .entry-title {
                @td_module_mx_rd_bg_8
            }
            
            /* @td_module_mx_rd_bg_9 */
            .td-theme-wrap .td_module_mx_rd_bg_9 .entry-title {
                @td_module_mx_rd_bg_9
            }
            
            /* @td_module_mx_rd_bg_10 */
            .td-theme-wrap .td_module_mx_rd_bg_10 .entry-title {
                @td_module_mx_rd_bg_10
            }
            
            /* @td_module_mx_rd_bg_11 */
            .td-theme-wrap .td_module_mx_rd_bg_11 .entry-title {
                @td_module_mx_rd_bg_11
            }
            
            /* @td_module_mx_rd_bg_12 */
            .td-theme-wrap .td_module_mx_rd_bg_12 .entry-title {
                @td_module_mx_rd_bg_12
            }
            
            /* @td_module_mx_rd_bg_13 */
            .td-theme-wrap .td_module_mx_rd_bg_13 .entry-title {
                @td_module_mx_rd_bg_13
            }
            
            /* @td_module_mx_rd_bg_14 */
            .td-theme-wrap .td_module_mx_rd_bg_14 .entry-title {
                @td_module_mx_rd_bg_14
            }
            
            /* @td_module_mx_rd_bg_15 */
            .td-theme-wrap .td_module_mx_rd_bg_15 .entry-title {
                @td_module_mx_rd_bg_15
            }
            
            /* @td_module_mx_rd_bg_16 */
            .td-theme-wrap .td_module_mx_rd_bg_16 .entry-title {
                @td_module_mx_rd_bg_16
            }
            
            /* @td_module_mx_rd_bg_17 */
            .td-theme-wrap .td_module_mx_rd_bg_17 .entry-title {
                @td_module_mx_rd_bg_17
            }
            
            /* @td_module_mx_rd_bg_18 */
            .td-theme-wrap .td_module_mx_rd_bg_18 .entry-title {
                @td_module_mx_rd_bg_18
            }
            
            /* @td_module_mx_rd_bg_19 */
            .td-theme-wrap .td_module_mx_rd_bg_19 .entry-title {
                @td_module_mx_rd_bg_19
            }
            
            /* @td_module_mx_rd_bg_20 */
            .td-theme-wrap .td_module_mx_rd_bg_20 .entry-title {
                @td_module_mx_rd_bg_20
            }
            
            /* @td_module_mx_rd_bg_21 */
            .td-theme-wrap .td_module_mx_rd_bg_21 .entry-title {
                @td_module_mx_rd_bg_20
            }
            
            /* @td_module_mx_rd_bg_22 */
            .td-theme-wrap .td_module_mx_rd_bg_22 .entry-title {
                @td_module_mx_rd_bg_20
            }
            
            /* @td_module_mx_rd_bg_23 */
            .td-theme-wrap .td_module_mx_rd_bg_23 .entry-title {
                @td_module_mx_rd_bg_20
            }
            
            /* @td_module_mx_rd_bg_24 */
            .td-theme-wrap .td_module_mx_rd_bg_24 .entry-title {
                @td_module_mx_rd_bg_20
            }
            
            /* @td_module_mx_rd_bg_25 */
            .td-theme-wrap .td_module_mx_rd_bg_25 .entry-title {
                @td_module_mx_rd_bg_20
            }
            
            /* @td_module_mx_rd_bg_26 */
            .td-theme-wrap .td_module_mx_rd_bg_26 .entry-title {
                @td_module_mx_rd_bg_20
            }
            
            /* @td_module_mx_rd_bg_27 */
            .td-theme-wrap .td_module_mx_rd_bg_27 .entry-title {
                @td_module_mx_rd_bg_20
            }
            
            /* @td_module_mx_rd_bg_28 */
            .td-theme-wrap .td_module_mx_rd_bg_28 .entry-title {
                @td_module_mx_rd_bg_20
            }
            
            /* @td_module_mx_rd_bg_29 */
            .td-theme-wrap .td_module_mx_rd_bg_29 .entry-title {
                @td_module_mx_rd_bg_20
            }
            
            /* @td_module_mx_rd_bg_30 */
            .td-theme-wrap .td_module_mx_rd_bg_30 .entry-title {
                @td_module_mx_rd_bg_20
            }
            
            /* @td_module_mx_rd_bg_31 */
            .td-theme-wrap .td_module_mx_rd_bg_31 .entry-title {
                @td_module_mx_rd_bg_20
            }
            
            /* @td_module_mx_rd_bg_32 */
            .td-theme-wrap .td_module_mx_rd_bg_32 .entry-title {
                @td_module_mx_rd_bg_20
            }
            
            
        </style>
        ');



        // Thumbs
        td_api_thumb::update('td_238x182',
            array(
                'name' => 'td_238x182',
                'width' => 238,
                'height' => 182,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'small',
                'used_on' => array(
                    '<span style="color:#f1a1a1;">Big grid Red 1 &middot; 3</span>'
                ),
                'no_image_path' => $this->plugin_url,
            )
        );

        td_api_thumb::update('td_238x420',
            array(
                'name' => 'td_238x420',
                'width' => 238,
                'height' => 420,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    '<span style="color:#f1a1a1;">Big grid Red 4 &middot; 9</span>'
                ),
                'no_image_path' => $this->plugin_url,
            )
        );

        td_api_thumb::update('td_245x245',
            array(
                'name' => 'td_245x245',
                'width' => 245,
                'height' => 245,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'small',
                'used_on' => array(
                    '<span style="color:#f1a1a1;">Big grid Red 14 &middot; 17 &middot; 19</span>'
                ),
                'no_image_path' => $this->plugin_url,
            )
        );

        td_api_thumb::update('td_320x220',
            array(
                'name' => 'td_320x220',
                'width' => 320,
                'height' => 220,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'small',
                'used_on' => array(
                    '<span style="color:#f1a1a1;">Big grid Red 2 &middot; 3 &middot; 5 &middot; 6 &middot; 15 &middot; 16</span>'
                ),
                'no_image_path' => $this->plugin_url,
            )
        );

        td_api_thumb::update('td_320x450',
            array(
                'name' => 'td_320x450',
                'width' => 320,
                'height' => 450,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    '<span style="color:#f1a1a1;">Big grid Red 5 &middot; 6 &middot; 15</span>'
                ),
                'no_image_path' => $this->plugin_url,
            )
        );

        td_api_thumb::update('td_326x182',
            array(
                'name' => 'td_326x182',
                'width' => 326,
                'height' => 182,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'small',
                'used_on' => array(
                    '<span style="color:#f1a1a1;">Big grid Red 7 &middot; 8 &middot; 12</span>'
                ),
                'no_image_path' => $this->plugin_url,
            )
        );

        td_api_thumb::update('td_326x364',
            array(
                'name' => 'td_326x364',
                'width' => 326,
                'height' => 364,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    '<span style="color:#f1a1a1;">Big grid Red 7 &middot; 11 &middot; 12</span>'
                ),
                'no_image_path' => $this->plugin_url,
            )
        );

        td_api_thumb::update('td_485x360',
            array(
                'name' => 'td_485x360',
                'width' => 485,
                'height' => 360,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    '<span style="color:#f1a1a1;">Big grid Red 1</span>',
                    '<span style="color:#f1a1a1;">Big grid Red Full 7 &middot; 8 &middot; 9 &middot; 10</span>'
                ),
                'no_image_path' => $this->plugin_url,
            )
        );

        td_api_thumb::update('td_485x432',
            array(
                'name' => 'td_485x432',
                'width' => 485,
                'height' => 432,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    '<span style="color:#f1a1a1;">Big grid Red 1 &middot; 2 &middot; 4 &middot; 10 &middot; 13</span>',
                    '<span style="color:#f1a1a1;">Big grid Red Full 4</span>'
                ),
                'no_image_path' => $this->plugin_url,
            )
        );

        td_api_thumb::update('td_490x245',
            array(
                'name' => 'td_490x245',
                'width' => 490,
                'height' => 245,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    '<span style="color:#f1a1a1;">Big grid Red 17 &middot; 18</span>'
                ),
                'no_image_path' => $this->plugin_url,
            )
        );

        td_api_thumb::update('td_520x450',
            array(
                'name' => 'td_520x450',
                'width' => 520,
                'height' => 450,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    '<span style="color:#f1a1a1;">Big grid Red 18</span>',
                    '<span style="color:#f1a1a1;">Big grid Red Full 5</span>'
                ),
                'no_image_path' => $this->plugin_url,
            )
        );

        td_api_thumb::update('td_653x364',
            array(
                'name' => 'td_653x364',
                'width' => 653,
                'height' => 364,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    '<span style="color:#f1a1a1;">Big grid Red 8 &middot; 11 &middot; 12</span>'
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
                    '<span style="color:#f1a1a1;">Big grid Red Full 3 &middot; 6 &middot; 7</span>'
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
                    '<span style="color:#f1a1a1;">Big grid Red 16</span>',
                    '<span style="color:#f1a1a1;">Big grid Red Full 2 &middot; 8 &middot; 9 &middot; 10</span>'
                ),
                'no_image_path' => $this->plugin_url,
            )
        );

        td_api_thumb::update('td_1920x0',
            array(
                'name' => 'td_1920x0',
                'width' => 1920,
                'height' => 0,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    '<span style="color:#f1a1a1;">Big grid Red Full 1 &middot; 6</span>'
                ),
                'no_image_path' => $this->plugin_url,
            )
        );

        // Big grids list
        td_api_block::add('td_block_big_grid_rd_bg_1',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Red 1',
                "base" => 'td_block_big_grid_rd_bg_1',
                "class" => 'td_block_big_grid_rd_bg_1',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_rd_bg_1',
                'file' => $this->plugin_path . '/shortcodes/td_block_big_grid_rd_bg_1.php',
                "params" => array_merge(
                    td_config::td_block_big_grid_params()
                )
            )
        );

        td_api_block::add('td_block_big_grid_rd_bg_2',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Red 2',
                "base" => 'td_block_big_grid_rd_bg_2',
                "class" => 'td_block_big_grid_rd_bg_2',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_rd_bg_2',
                'file' => $this->plugin_path . '/shortcodes/td_block_big_grid_rd_bg_2.php',
                "params" => array_merge(
                    td_config::td_block_big_grid_params()
                )
            )
        );

        td_api_block::add('td_block_big_grid_rd_bg_3',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Red 3',
                "base" => 'td_block_big_grid_rd_bg_3',
                "class" => 'td_block_big_grid_rd_bg_3',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_rd_bg_3',
                'file' => $this->plugin_path . '/shortcodes/td_block_big_grid_rd_bg_3.php',
                "params" => array_merge(
                    td_config::td_block_big_grid_params()
                )
            )
        );

        td_api_block::add('td_block_big_grid_rd_bg_4',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Red 4',
                "base" => 'td_block_big_grid_rd_bg_4',
                "class" => 'td_block_big_grid_rd_bg_4',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_rd_bg_4',
                'file' => $this->plugin_path . '/shortcodes/td_block_big_grid_rd_bg_4.php',
                "params" => array_merge(
                    td_config::td_block_big_grid_params()
                )
            )
        );

        td_api_block::add('td_block_big_grid_rd_bg_5',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Red 5',
                "base" => 'td_block_big_grid_rd_bg_5',
                "class" => 'td_block_big_grid_rd_bg_5',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_rd_bg_5',
                'file' => $this->plugin_path . '/shortcodes/td_block_big_grid_rd_bg_5.php',
                "params" => array_merge(
                    td_config::td_block_big_grid_params()
                )
            )
        );

        td_api_block::add('td_block_big_grid_rd_bg_6',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Red 6',
                "base" => 'td_block_big_grid_rd_bg_6',
                "class" => 'td_block_big_grid_rd_bg_6',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_rd_bg_6',
                'file' => $this->plugin_path . '/shortcodes/td_block_big_grid_rd_bg_6.php',
                "params" => array_merge(
                    td_config::td_block_big_grid_params()
                )
            )
        );

        td_api_block::add('td_block_big_grid_rd_bg_7',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Red 7',
                "base" => 'td_block_big_grid_rd_bg_7',
                "class" => 'td_block_big_grid_rd_bg_7',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_rd_bg_7',
                'file' => $this->plugin_path . '/shortcodes/td_block_big_grid_rd_bg_7.php',
                "params" => array_merge(
                    td_config::td_block_big_grid_params()
                )
            )
        );

        td_api_block::add('td_block_big_grid_rd_bg_8',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Red 8',
                "base" => 'td_block_big_grid_rd_bg_8',
                "class" => 'td_block_big_grid_rd_bg_8',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_rd_bg_8',
                'file' => $this->plugin_path . '/shortcodes/td_block_big_grid_rd_bg_8.php',
                "params" => array_merge(
                    td_config::td_block_big_grid_params()
                )
            )
        );

        td_api_block::add('td_block_big_grid_rd_bg_9',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Red 9',
                "base" => 'td_block_big_grid_rd_bg_9',
                "class" => 'td_block_big_grid_rd_bg_9',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_rd_bg_9',
                'file' => $this->plugin_path . '/shortcodes/td_block_big_grid_rd_bg_9.php',
                "params" => array_merge(
                    td_config::td_block_big_grid_params()
                )
            )
        );

        td_api_block::add('td_block_big_grid_rd_bg_10',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Red 10',
                "base" => 'td_block_big_grid_rd_bg_10',
                "class" => 'td_block_big_grid_rd_bg_10',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_rd_bg_10',
                'file' => $this->plugin_path . '/shortcodes/td_block_big_grid_rd_bg_10.php',
                "params" => array_merge(
                    td_config::td_block_big_grid_params()
                )
            )
        );

        td_api_block::add('td_block_big_grid_rd_bg_11',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Red 11',
                "base" => 'td_block_big_grid_rd_bg_11',
                "class" => 'td_block_big_grid_rd_bg_11',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_rd_bg_11',
                'file' => $this->plugin_path . '/shortcodes/td_block_big_grid_rd_bg_11.php',
                "params" => array_merge(
                    td_config::td_block_big_grid_params()
                )
            )
        );

        td_api_block::add('td_block_big_grid_rd_bg_12',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Red 12',
                "base" => 'td_block_big_grid_rd_bg_12',
                "class" => 'td_block_big_grid_rd_bg_12',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_rd_bg_12',
                'file' => $this->plugin_path . '/shortcodes/td_block_big_grid_rd_bg_12.php',
                "params" => array_merge(
                    td_config::td_block_big_grid_params()
                )
            )
        );

        td_api_block::add('td_block_big_grid_rd_bg_13',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Red 13',
                "base" => 'td_block_big_grid_rd_bg_13',
                "class" => 'td_block_big_grid_rd_bg_13',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_rd_bg_13',
                'file' => $this->plugin_path . '/shortcodes/td_block_big_grid_rd_bg_13.php',
                "params" => array_merge(
                    td_config::td_block_big_grid_params()
                )
            )
        );

        td_api_block::add('td_block_big_grid_rd_bg_14',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Red 14',
                "base" => 'td_block_big_grid_rd_bg_14',
                "class" => 'td_block_big_grid_rd_bg_14',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_rd_bg_14',
                'file' => $this->plugin_path . '/shortcodes/td_block_big_grid_rd_bg_14.php',
                "params" => array_merge(
                    td_config::td_block_big_grid_params()
                )
            )
        );

        td_api_block::add('td_block_big_grid_rd_bg_15',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Red 15',
                "base" => 'td_block_big_grid_rd_bg_15',
                "class" => 'td_block_big_grid_rd_bg_15',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_rd_bg_15',
                'file' => $this->plugin_path . '/shortcodes/td_block_big_grid_rd_bg_15.php',
                "params" => array_merge(
                    td_config::td_block_big_grid_params()
                )
            )
        );

        td_api_block::add('td_block_big_grid_rd_bg_16',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Red 16',
                "base" => 'td_block_big_grid_rd_bg_16',
                "class" => 'td_block_big_grid_rd_bg_16',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_rd_bg_16',
                'file' => $this->plugin_path . '/shortcodes/td_block_big_grid_rd_bg_16.php',
                "params" => array_merge(
                    td_config::td_block_big_grid_params()
                )
            )
        );

        td_api_block::add('td_block_big_grid_rd_bg_17',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Red 17',
                "base" => 'td_block_big_grid_rd_bg_17',
                "class" => 'td_block_big_grid_rd_bg_17',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_rd_bg_17',
                'file' => $this->plugin_path . '/shortcodes/td_block_big_grid_rd_bg_17.php',
                "params" => array_merge(
                    td_config::td_block_big_grid_params()
                )
            )
        );

        td_api_block::add('td_block_big_grid_rd_bg_18',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Red 18',
                "base" => 'td_block_big_grid_rd_bg_18',
                "class" => 'td_block_big_grid_rd_bg_18',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_rd_bg_18',
                'file' => $this->plugin_path . '/shortcodes/td_block_big_grid_rd_bg_18.php',
                "params" => array_merge(
                    td_config::td_block_big_grid_params()
                )
            )
        );

        td_api_block::add('td_block_big_grid_rd_bg_19',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Red 19',
                "base" => 'td_block_big_grid_rd_bg_19',
                "class" => 'td_block_big_grid_rd_bg_19',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_rd_bg_19',
                'file' => $this->plugin_path . '/shortcodes/td_block_big_grid_rd_bg_19.php',
                "params" => array_merge(
                    td_config::td_block_big_grid_params()
                )
            )
        );

        td_api_block::add('td_block_big_grid_rd_bg_fl_1',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Red Full 1',
                "base" => 'td_block_big_grid_rd_bg_fl_1',
                "class" => 'td_block_big_grid_rd_bg_fl_1',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_rd_bg_fl_1',
                'file' => $this->plugin_path . '/shortcodes/td_block_big_grid_rd_bg_fl_1.php',
                "params" => array_merge(
                    td_config::td_block_big_grid_params()
                ),
                'tdc_in_row' => true,
            )
        );

        td_api_block::add('td_block_big_grid_rd_bg_fl_2',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Red Full 2',
                "base" => 'td_block_big_grid_rd_bg_fl_2',
                "class" => 'td_block_big_grid_rd_bg_fl_2',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_rd_bg_fl_2',
                'file' => $this->plugin_path . '/shortcodes/td_block_big_grid_rd_bg_fl_2.php',
                "params" => array_merge(
                    td_config::td_block_big_grid_params()
                ),
                'tdc_in_row' => true,
            )
        );

        td_api_block::add('td_block_big_grid_rd_bg_fl_3',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Red Full 3',
                "base" => 'td_block_big_grid_rd_bg_fl_3',
                "class" => 'td_block_big_grid_rd_bg_fl_3',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_rd_bg_fl_3',
                'file' => $this->plugin_path . '/shortcodes/td_block_big_grid_rd_bg_fl_3.php',
                "params" => array_merge(
                    td_config::td_block_big_grid_params()
                ),
                'tdc_in_row' => true,
            )
        );

        td_api_block::add('td_block_big_grid_rd_bg_fl_4',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Red Full 4',
                "base" => 'td_block_big_grid_rd_bg_fl_4',
                "class" => 'td_block_big_grid_rd_bg_fl_4',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_rd_bg_fl_4',
                'file' => $this->plugin_path . '/shortcodes/td_block_big_grid_rd_bg_fl_4.php',
                "params" => array_merge(
                    td_config::td_block_big_grid_params()
                ),
                'tdc_in_row' => true,
            )
        );

        td_api_block::add('td_block_big_grid_rd_bg_fl_5',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Red Full 5',
                "base" => 'td_block_big_grid_rd_bg_fl_5',
                "class" => 'td_block_big_grid_rd_bg_fl_5',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_rd_bg_fl_5',
                'file' => $this->plugin_path . '/shortcodes/td_block_big_grid_rd_bg_fl_5.php',
                "params" => array_merge(
                    td_config::td_block_big_grid_params()
                ),
                'tdc_in_row' => true,
            )
        );

        td_api_block::add('td_block_big_grid_rd_bg_fl_6',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Red Full 6',
                "base" => 'td_block_big_grid_rd_bg_fl_6',
                "class" => 'td_block_big_grid_rd_bg_fl_6',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_rd_bg_fl_6',
                'file' => $this->plugin_path . '/shortcodes/td_block_big_grid_rd_bg_fl_6.php',
                "params" => array_merge(
                    td_config::td_block_big_grid_params()
                ),
                'tdc_in_row' => true,
            )
        );

        td_api_block::add('td_block_big_grid_rd_bg_fl_7',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Red Full 7',
                "base" => 'td_block_big_grid_rd_bg_fl_7',
                "class" => 'td_block_big_grid_rd_bg_fl_7',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_rd_bg_fl_7',
                'file' => $this->plugin_path . '/shortcodes/td_block_big_grid_rd_bg_fl_7.php',
                "params" => array_merge(
                    td_config::td_block_big_grid_params()
                ),
                'tdc_in_row' => true,
            )
        );

        td_api_block::add('td_block_big_grid_rd_bg_fl_8',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Red Full 8',
                "base" => 'td_block_big_grid_rd_bg_fl_8',
                "class" => 'td_block_big_grid_rd_bg_fl_8',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_rd_bg_fl_8',
                'file' => $this->plugin_path . '/shortcodes/td_block_big_grid_rd_bg_fl_8.php',
                "params" => array_merge(
                    td_config::td_block_big_grid_params()
                ),
                'tdc_in_row' => true,
            )
        );

        td_api_block::add('td_block_big_grid_rd_bg_fl_9',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Red Full 9',
                "base" => 'td_block_big_grid_rd_bg_fl_9',
                "class" => 'td_block_big_grid_rd_bg_fl_9',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_rd_bg_fl_9',
                'file' => $this->plugin_path . '/shortcodes/td_block_big_grid_rd_bg_fl_9.php',
                "params" => array_merge(
                    td_config::td_block_big_grid_params()
                ),
                'tdc_in_row' => true,
            )
        );

        td_api_block::add('td_block_big_grid_rd_bg_fl_10',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Red Full 10',
                "base" => 'td_block_big_grid_rd_bg_fl_10',
                "class" => 'td_block_big_grid_rd_bg_fl_10',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_rd_bg_fl_10',
                'file' => $this->plugin_path . '/shortcodes/td_block_big_grid_rd_bg_fl_10.php',
                "params" => array_merge(
                    td_config::td_block_big_grid_params()
                ),
                'tdc_in_row' => true,
            )
        );


        /**
         * category top posts styles
         */
        td_api_category_top_posts_style::add('td_category_top_posts_style_rd_bg_1',
            array (
                'file' => $this->plugin_path . '/category_top_posts_styles/td_category_top_posts_style_rd_bg_1.php',
                'posts_shown_in_the_loop' => 4,
                'img' => $this->plugin_url . '/images/panel/category-templates/icon-category-top-rd-1.png',
                'text' => 'Red 1',
                'td_block_name' => 'td_block_big_grid_rd_bg_1',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_rd_bg_2',
            array (
                'file' => $this->plugin_path . '/category_top_posts_styles/td_category_top_posts_style_rd_bg_2.php',
                'posts_shown_in_the_loop' => 5,
                'img' => $this->plugin_url . '/images/panel/category-templates/icon-category-top-rd-2.png',
                'text' => 'Red 2',
                'td_block_name' => 'td_block_big_grid_rd_bg_2',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_rd_bg_3',
            array (
                'file' => $this->plugin_path . '/category_top_posts_styles/td_category_top_posts_style_rd_bg_3.php',
                'posts_shown_in_the_loop' => 7,
                'img' => $this->plugin_url . '/images/panel/category-templates/icon-category-top-rd-3.png',
                'text' => 'Red 3',
                'td_block_name' => 'td_block_big_grid_rd_bg_3',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_rd_bg_4',
            array (
                'file' => $this->plugin_path . '/category_top_posts_styles/td_category_top_posts_style_rd_bg_4.php',
                'posts_shown_in_the_loop' => 3,
                'img' => $this->plugin_url . '/images/panel/category-templates/icon-category-top-rd-4.png',
                'text' => 'Red 4',
                'td_block_name' => 'td_block_big_grid_rd_bg_4',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_rd_bg_5',
            array (
                'file' => $this->plugin_path . '/category_top_posts_styles/td_category_top_posts_style_rd_bg_5.php',
                'posts_shown_in_the_loop' => 4,
                'img' => $this->plugin_url . '/images/panel/category-templates/icon-category-top-rd-5.png',
                'text' => 'Red 5',
                'td_block_name' => 'td_block_big_grid_rd_bg_5',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_rd_bg_6',
            array (
                'file' => $this->plugin_path . '/category_top_posts_styles/td_category_top_posts_style_rd_bg_6.php',
                'posts_shown_in_the_loop' => 5,
                'img' => $this->plugin_url . '/images/panel/category-templates/icon-category-top-rd-6.png',
                'text' => 'Red 6',
                'td_block_name' => 'td_block_big_grid_rd_bg_6',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_rd_bg_7',
            array (
                'file' => $this->plugin_path . '/category_top_posts_styles/td_category_top_posts_style_rd_bg_7.php',
                'posts_shown_in_the_loop' => 7,
                'img' => $this->plugin_url . '/images/panel/category-templates/icon-category-top-rd-7.png',
                'text' => 'Red 7',
                'td_block_name' => 'td_block_big_grid_rd_bg_7',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_rd_bg_8',
            array (
                'file' => $this->plugin_path . '/category_top_posts_styles/td_category_top_posts_style_rd_bg_8.php',
                'posts_shown_in_the_loop' => 6,
                'img' => $this->plugin_url . '/images/panel/category-templates/icon-category-top-rd-8.png',
                'text' => 'Red 8',
                'td_block_name' => 'td_block_big_grid_rd_bg_8',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_rd_bg_9',
            array (
                'file' => $this->plugin_path . '/category_top_posts_styles/td_category_top_posts_style_rd_bg_9.php',
                'posts_shown_in_the_loop' => 4,
                'img' => $this->plugin_url . '/images/panel/category-templates/icon-category-top-rd-9.png',
                'text' => 'Red 9',
                'td_block_name' => 'td_block_big_grid_rd_bg_9',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_rd_bg_10',
            array (
                'file' => $this->plugin_path . '/category_top_posts_styles/td_category_top_posts_style_rd_bg_10.php',
                'posts_shown_in_the_loop' => 2,
                'img' => $this->plugin_url . '/images/panel/category-templates/icon-category-top-rd-10.png',
                'text' => 'Red 10',
                'td_block_name' => 'td_block_big_grid_rd_bg_10',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_rd_bg_11',
            array (
                'file' => $this->plugin_path . '/category_top_posts_styles/td_category_top_posts_style_rd_bg_11.php',
                'posts_shown_in_the_loop' => 4,
                'img' => $this->plugin_url . '/images/panel/category-templates/icon-category-top-rd-11.png',
                'text' => 'Red 11',
                'td_block_name' => 'td_block_big_grid_rd_bg_11',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_rd_bg_12',
            array (
                'file' => $this->plugin_path . '/category_top_posts_styles/td_category_top_posts_style_rd_bg_12.php',
                'posts_shown_in_the_loop' => 5,
                'img' => $this->plugin_url . '/images/panel/category-templates/icon-category-top-rd-12.png',
                'text' => 'Red 12',
                'td_block_name' => 'td_block_big_grid_rd_bg_12',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_rd_bg_13',
            array (
                'file' => $this->plugin_path . '/category_top_posts_styles/td_category_top_posts_style_rd_bg_13.php',
                'posts_shown_in_the_loop' => 4,
                'img' => $this->plugin_url . '/images/panel/category-templates/icon-category-top-rd-13.png',
                'text' => 'Red 13',
                'td_block_name' => 'td_block_big_grid_rd_bg_13',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_rd_bg_14',
            array (
                'file' => $this->plugin_path . '/category_top_posts_styles/td_category_top_posts_style_rd_bg_14.php',
                'posts_shown_in_the_loop' => 5,
                'img' => $this->plugin_url . '/images/panel/category-templates/icon-category-top-rd-14.png',
                'text' => 'Red 14',
                'td_block_name' => 'td_block_big_grid_rd_bg_14',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_rd_bg_15',
            array (
                'file' => $this->plugin_path . '/category_top_posts_styles/td_category_top_posts_style_rd_bg_15.php',
                'posts_shown_in_the_loop' => 4,
                'img' => $this->plugin_url . '/images/panel/category-templates/icon-category-top-rd-15.png',
                'text' => 'Red 15',
                'td_block_name' => 'td_block_big_grid_rd_bg_15',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_rd_bg_16',
            array (
                'file' => $this->plugin_path . '/category_top_posts_styles/td_category_top_posts_style_rd_bg_16.php',
                'posts_shown_in_the_loop' => 4,
                'img' => $this->plugin_url . '/images/panel/category-templates/icon-category-top-rd-16.png',
                'text' => 'Red 16',
                'td_block_name' => 'td_block_big_grid_rd_bg_16',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_rd_bg_17',
            array (
                'file' => $this->plugin_path . '/category_top_posts_styles/td_category_top_posts_style_rd_bg_17.php',
                'posts_shown_in_the_loop' => 3,
                'img' => $this->plugin_url . '/images/panel/category-templates/icon-category-top-rd-17.png',
                'text' => 'Red 17',
                'td_block_name' => 'td_block_big_grid_rd_bg_17',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_rd_bg_18',
            array (
                'file' => $this->plugin_path . '/category_top_posts_styles/td_category_top_posts_style_rd_bg_18.php',
                'posts_shown_in_the_loop' => 2,
                'img' => $this->plugin_url . '/images/panel/category-templates/icon-category-top-rd-18.png',
                'text' => 'Red 18',
                'td_block_name' => 'td_block_big_grid_rd_bg_18',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_rd_bg_19',
            array (
                'file' => $this->plugin_path . '/category_top_posts_styles/td_category_top_posts_style_rd_bg_19.php',
                'posts_shown_in_the_loop' => 4,
                'img' => $this->plugin_url . '/images/panel/category-templates/icon-category-top-rd-19.png',
                'text' => 'Red 19',
                'td_block_name' => 'td_block_big_grid_rd_bg_19',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_rd_bg_fl_1',
            array (
                'file' => $this->plugin_path . '/category_top_posts_styles/td_category_top_posts_style_rd_bg_fl_1.php',
                'posts_shown_in_the_loop' => 1,
                'img' => $this->plugin_url . '/images/panel/category-templates/icon-category-top-rd-fl-1.png',
                'text' => 'Red Full 1',
                'td_block_name' => 'td_block_big_grid_rd_bg_fl_1',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_rd_bg_fl_2',
            array (
                'file' => $this->plugin_path . '/category_top_posts_styles/td_category_top_posts_style_rd_bg_fl_2.php',
                'posts_shown_in_the_loop' => 2,
                'img' => $this->plugin_url . '/images/panel/category-templates/icon-category-top-rd-fl-2.png',
                'text' => 'Red Full 2',
                'td_block_name' => 'td_block_big_grid_rd_bg_fl_2',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_rd_bg_fl_3',
            array (
                'file' => $this->plugin_path . '/category_top_posts_styles/td_category_top_posts_style_rd_bg_fl_3.php',
                'posts_shown_in_the_loop' => 3,
                'img' => $this->plugin_url . '/images/panel/category-templates/icon-category-top-rd-fl-3.png',
                'text' => 'Red Full 3',
                'td_block_name' => 'td_block_big_grid_rd_bg_fl_3',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_rd_bg_fl_4',
            array (
                'file' => $this->plugin_path . '/category_top_posts_styles/td_category_top_posts_style_rd_bg_fl_4.php',
                'posts_shown_in_the_loop' => 4,
                'img' => $this->plugin_url . '/images/panel/category-templates/icon-category-top-rd-fl-4.png',
                'text' => 'Red Full 4',
                'td_block_name' => 'td_block_big_grid_rd_bg_fl_4',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_rd_bg_fl_5',
            array (
                'file' => $this->plugin_path . '/category_top_posts_styles/td_category_top_posts_style_rd_bg_fl_5.php',
                'posts_shown_in_the_loop' => 5,
                'img' => $this->plugin_url . '/images/panel/category-templates/icon-category-top-rd-fl-5.png',
                'text' => 'Red Full 5',
                'td_block_name' => 'td_block_big_grid_rd_bg_fl_5',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_rd_bg_fl_6',
            array (
                'file' => $this->plugin_path . '/category_top_posts_styles/td_category_top_posts_style_rd_bg_fl_6.php',
                'posts_shown_in_the_loop' => 4,
                'img' => $this->plugin_url . '/images/panel/category-templates/icon-category-top-rd-fl-6.png',
                'text' => 'Red Full 6',
                'td_block_name' => 'td_block_big_grid_rd_bg_fl_6',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_rd_bg_fl_7',
            array (
                'file' => $this->plugin_path . '/category_top_posts_styles/td_category_top_posts_style_rd_bg_fl_7.php',
                'posts_shown_in_the_loop' => 8,
                'img' => $this->plugin_url . '/images/panel/category-templates/icon-category-top-rd-fl-7.png',
                'text' => 'Red Full 7',
                'td_block_name' => 'td_block_big_grid_rd_bg_fl_7',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_rd_bg_fl_8',
            array (
                'file' => $this->plugin_path . '/category_top_posts_styles/td_category_top_posts_style_rd_bg_fl_8.php',
                'posts_shown_in_the_loop' => 5,
                'img' => $this->plugin_url . '/images/panel/category-templates/icon-category-top-rd-fl-8.png',
                'text' => 'Red Full 8',
                'td_block_name' => 'td_block_big_grid_rd_bg_fl_8',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_rd_bg_fl_9',
            array (
                'file' => $this->plugin_path . '/category_top_posts_styles/td_category_top_posts_style_rd_bg_fl_9.php',
                'posts_shown_in_the_loop' => 4,
                'img' => $this->plugin_url . '/images/panel/category-templates/icon-category-top-rd-fl-9.png',
                'text' => 'Red Full 9',
                'td_block_name' => 'td_block_big_grid_rd_bg_fl_9',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_rd_bg_fl_10',
            array (
                'file' => $this->plugin_path . '/category_top_posts_styles/td_category_top_posts_style_rd_bg_fl_10.php',
                'posts_shown_in_the_loop' => 5,
                'img' => $this->plugin_url . '/images/panel/category-templates/icon-category-top-rd-fl-10.png',
                'text' => 'Red Full 10',
                'td_block_name' => 'td_block_big_grid_rd_bg_fl_10',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );
    }
}
new td_api_plugin_big_grids_red();