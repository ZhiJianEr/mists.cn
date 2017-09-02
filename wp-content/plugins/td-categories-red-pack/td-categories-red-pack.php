<?php
/*
Plugin Name: ionMag Category Templates - Red Premium Pack
Plugin URI: https://www.wpion.com/?utm_source=ionMag_free&utm_campaign=premium_plugins_uri&utm_medium=wp_admin
Description: 8 Category Templates for the ionMag Theme
Author: WPion
Version: 1.1
Author URI: https://www.wpion.com/?utm_source=ionMag_free&utm_campaign=premium_plugins_uri&utm_medium=wp_admin
*/
class td_api_plugin_categories_red {
    var $plugin_url = '';
    var $plugin_path = '';

    function __construct() {
        $this->plugin_url = plugins_url('', __FILE__); // path used for elements like images, css, etc which are available on end user
        $this->plugin_path = dirname(__FILE__); // used for internal (server side) files

        add_action('td_global_after', array($this, 'hook_td_global_after')); // hook used to add or modify items via Api
        add_action('admin_enqueue_scripts', array('td_api_plugin_categories_red', 'td_plugin_wpadmin_css')); // hook used to add custom css for wp-admin area
        add_action('wp_enqueue_scripts', array('td_api_plugin_categories_red', 'td_plugin_frontend_css')); // hook used to add custom css used on frontend area
    }

    static function td_plugin_wpadmin_css() {
        wp_enqueue_style('td-plugin-categories-red-framework', plugins_url('', __FILE__) . '/style-admin.css'); // backend css (admin_enqueue_scripts)
    }

    static function td_plugin_frontend_css() {
        wp_enqueue_style('td-plugin-categories-red-framework', plugins_url('', __FILE__) . '/style.css'); // frontend css (wp_enqueue_scripts)
    }

    function hook_td_global_after()    { //add the api code inside this function

        /**
         * category templates
         */
        td_api_category_template::add('td_category_template_rd_1',
            array (
                'file' => $this->plugin_path . '/category_templates/td_category_template_rd_1.php',
                'img' => $this->plugin_url . '/images/panel/category_templates/icon-category-rd-1.png',
                'text' => 'Red 1',
                'premium' => true
            )
        );

        td_api_category_template::add('td_category_template_rd_2',
            array (
                'file' => $this->plugin_path . '/category_templates/td_category_template_rd_2.php',
                'img' => $this->plugin_url . '/images/panel/category_templates/icon-category-rd-2.png',
                'text' => 'Red 2',
                'premium' => true
            )
        );

        td_api_category_template::add('td_category_template_rd_3',
            array (
                'file' => $this->plugin_path . '/category_templates/td_category_template_rd_3.php',
                'img' => $this->plugin_url . '/images/panel/category_templates/icon-category-rd-3.png',
                'text' => 'Red 3',
                'premium' => true
            )
        );

        td_api_category_template::add('td_category_template_rd_4',
            array (
                'file' => $this->plugin_path . '/category_templates/td_category_template_rd_4.php',
                'img' => $this->plugin_url . '/images/panel/category_templates/icon-category-rd-4.png',
                'text' => 'Red 4',
                'premium' => true
            )
        );

        td_api_category_template::add('td_category_template_rd_5',
            array (
                'file' => $this->plugin_path . '/category_templates/td_category_template_rd_5.php',
                'img' => $this->plugin_url . '/images/panel/category_templates/icon-category-rd-5.png',
                'text' => 'Red 5',
                'premium' => true
            )
        );

        td_api_category_template::add('td_category_template_rd_6',
            array (
                'file' => $this->plugin_path . '/category_templates/td_category_template_rd_6.php',
                'img' => $this->plugin_url . '/images/panel/category_templates/icon-category-rd-6.png',
                'text' => 'Red 6',
                'premium' => true
            )
        );

        td_api_category_template::add('td_category_template_rd_7',
            array (
                'file' => $this->plugin_path . '/category_templates/td_category_template_rd_7.php',
                'img' => $this->plugin_url . '/images/panel/category_templates/icon-category-rd-7.png',
                'text' => 'Red 7',
                'premium' => true
            )
        );

        td_api_category_template::add('td_category_template_rd_8',
            array (
                'file' => $this->plugin_path . '/category_templates/td_category_template_rd_8.php',
                'img' => $this->plugin_url . '/images/panel/category_templates/icon-category-rd-8.png',
                'text' => 'Red 8',
                'premium' => true
            )
        );

    }
}
new td_api_plugin_categories_red();