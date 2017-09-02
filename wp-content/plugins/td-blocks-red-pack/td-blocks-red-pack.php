<?php
/*
Plugin Name: ionMag Blocks & Modules - Red Premium Pack
Plugin URI: https://www.wpion.com/?utm_source=ionMag_free&utm_campaign=premium_plugins_uri&utm_medium=wp_admin
Description: 30 Blocks and 20 Modules for the ionMag Theme
Author: WPion
Version: 1.1
Author URI: https://www.wpion.com/?utm_source=ionMag_free&utm_campaign=premium_plugins_uri&utm_medium=wp_admin
*/
class td_api_plugin_red {
    var $plugin_url = '';
    var $plugin_path = '';

    function __construct() {
        $this->plugin_url = plugins_url('', __FILE__); // path used for elements like images, css, etc which are available on end user
        $this->plugin_path = dirname(__FILE__); // used for internal (server side) files

        add_action('td_global_after', array($this, 'hook_td_global_after')); // hook used to add or modify items via Api
        add_action('td_wp_booster_loaded', array($this, 'hook_td_wp_booster_loaded')); // hook used to add the blocks widgets
        add_action('admin_enqueue_scripts', array('td_api_plugin_red', 'td_plugin_wpadmin_css')); // hook used to add custom css for wp-admin area
        add_action('wp_enqueue_scripts', array('td_api_plugin_red', 'td_plugin_frontend_css')); // hook used to add custom css used on frontend area
    }

    static function td_plugin_wpadmin_css() {
        wp_enqueue_style('td-plugin-bl-red-framework', plugins_url('', __FILE__) . '/style-admin.css'); // backend css (admin_enqueue_scripts)
    }

    static function td_plugin_frontend_css() {
        wp_enqueue_style('td-plugin-bl-red-framework', plugins_url('', __FILE__) . '/style.css'); // frontend css (wp_enqueue_scripts)
    }

    function hook_td_global_after()    { //add the api code inside this function





        // Modules list
        td_api_module::add('td_module_rd_1',
            array(
                'file' => $this->plugin_path . '/modules/td_module_rd_1.php',
                'text' => 'Module Red 1',
                'img' => $this->plugin_url . '/images/modules/td_module_rd_1.png',
                'used_on_blocks' => array('Block Red 1'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => true,
                'enabled_on_loops' => true,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_module::add('td_module_rd_2',
            array(
                'file' => $this->plugin_path . '/modules/td_module_rd_2.php',
                'text' => 'Module Red 2',
                'img' => $this->plugin_url . '/images/modules/td_module_rd_2.png',
                'used_on_blocks' => array('Block Red 2'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => true,
                'enabled_on_loops' => true,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_module::add('td_module_rd_3',
            array(
                'file' => $this->plugin_path . '/modules/td_module_rd_3.php',
                'text' => 'Module Red 3',
                'img' => $this->plugin_url . '/images/modules/td_module_rd_3.png',
                'used_on_blocks' => array('Block Red 3'),
                'excerpt_title' => 12,
                'excerpt_content' => '25',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => true,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true 
            )
        );

        td_api_module::add('td_module_rd_4',
            array(
                'file' => $this->plugin_path . '/modules/td_module_rd_4.php',
                'text' => 'Module Red 4',
                'img' => $this->plugin_url . '/images/modules/td_module_rd_4.png',
                'used_on_blocks' => array('Block Red 4'),
                'excerpt_title' => 12,
                'excerpt_content' => '25',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => true,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true 
            )
        );

        td_api_module::add('td_module_rd_5',
            array(
                'file' => $this->plugin_path . '/modules/td_module_rd_5.php',
                'text' => 'Module Red 5',
                'img' => $this->plugin_url . '/images/modules/td_module_rd_5.png',
                'used_on_blocks' => array('Block Red 5'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => true,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true 
            )
        );

        td_api_module::add('td_module_rd_6',
            array(
                'file' => $this->plugin_path . '/modules/td_module_rd_6.php',
                'text' => 'Module Red 6',
                'img' => $this->plugin_url . '/images/modules/td_module_rd_6.png',
                'used_on_blocks' => array('Block Red 6'),
                'excerpt_title' => 12,
                'excerpt_content' => '30',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => true,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true 
            )
        );

        td_api_module::add('td_module_rd_7',
            array(
                'file' => $this->plugin_path . '/modules/td_module_rd_7.php',
                'text' => 'Module Red 7',
                'img' => $this->plugin_url . '/images/modules/td_module_rd_7.png',
                'used_on_blocks' => array('Block Red 7'),
                'excerpt_title' => 12,
                'excerpt_content' => '30',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => true,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true 
            )
        );

        td_api_module::add('td_module_rd_8',
            array(
                'file' => $this->plugin_path . '/modules/td_module_rd_8.php',
                'text' => 'Module Red 8',
                'img' => $this->plugin_url . '/images/modules/td_module_rd_8.png',
                'used_on_blocks' => array('Block Red 8'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => true,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true 
            )
        );

        td_api_module::add('td_module_rd_9',
            array(
                'file' => $this->plugin_path . '/modules/td_module_rd_9.php',
                'text' => 'Module Red 9',
                'img' => $this->plugin_url . '/images/modules/td_module_rd_9.png',
                'used_on_blocks' => array('Block Red 9'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => true,
                'enabled_on_loops' => true,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true 
            )
        );

        td_api_module::add('td_module_rd_10',
            array(
                'file' => $this->plugin_path . '/modules/td_module_rd_10.php',
                'text' => 'Module Red 10',
                'img' => $this->plugin_url . '/images/modules/td_module_rd_10.png',
                'used_on_blocks' => array('Block Red 10'),
                'excerpt_title' => 12,
                'excerpt_content' => '25',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => true,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true 
            )
        );

        td_api_module::add('td_module_rd_11',
            array(
                'file' => $this->plugin_path . '/modules/td_module_rd_11.php',
                'text' => 'Module Red 11',
                'img' => $this->plugin_url . '/images/modules/td_module_rd_11.png',
                'used_on_blocks' => array('Block Red 11'),
                'excerpt_title' => 12,
                'excerpt_content' => '35',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => true,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true 
            )
        );

        td_api_module::add('td_module_rd_12',
            array(
                'file' => $this->plugin_path . '/modules/td_module_rd_12.php',
                'text' => 'Module Red 12',
                'img' => $this->plugin_url . '/images/modules/td_module_rd_12.png',
                'used_on_blocks' => array('Block Red 12'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => true,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true 
            )
        );

        td_api_module::add('td_module_rd_13',
            array(
                'file' => $this->plugin_path . '/modules/td_module_rd_13.php',
                'text' => 'Module Red 13',
                'img' => $this->plugin_url . '/images/modules/td_module_rd_13.png',
                'used_on_blocks' => array('Block Red 13'),
                'excerpt_title' => 12,
                'excerpt_content' => '25',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => true,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_module::add('td_module_rd_14',
            array(
                'file' => $this->plugin_path . '/modules/td_module_rd_14.php',
                'text' => 'Module Red 14',
                'img' => $this->plugin_url . '/images/modules/td_module_rd_14.png',
                'used_on_blocks' => array('Block Red 14'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => true,
                'enabled_on_loops' => true,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true
            )
        );

        td_api_module::add('td_module_rd_15',
            array(
                'file' => $this->plugin_path . '/modules/td_module_rd_15.php',
                'text' => 'Module Red 15',
                'img' => $this->plugin_url . '/images/modules/td_module_rd_15.png',
                'used_on_blocks' => array('Block Red 15'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => true,
                'enabled_on_loops' => true,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true 
            )
        );

        td_api_module::add('td_module_rd_16',
            array(
                'file' => $this->plugin_path . '/modules/td_module_rd_16.php',
                'text' => 'Module Red 16',
                'img' => $this->plugin_url . '/images/modules/td_module_rd_16.png',
                'used_on_blocks' => array('Block Red 16'),
                'excerpt_title' => 12,
                'excerpt_content' => '25',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => true,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true 
            )
        );

        td_api_module::add('td_module_rd_17',
            array(
                'file' => $this->plugin_path . '/modules/td_module_rd_17.php',
                'text' => 'Module Red 17',
                'img' => $this->plugin_url . '/images/modules/td_module_rd_17.png',
                'used_on_blocks' => array('Block Red 17'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => true,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true 
            )
        );

        td_api_module::add('td_module_rd_18',
            array(
                'file' => $this->plugin_path . '/modules/td_module_rd_18.php',
                'text' => 'Module Red 18',
                'img' => $this->plugin_url . '/images/modules/td_module_rd_18.png',
                'used_on_blocks' => array('Block Red 18'),
                'excerpt_title' => 12,
                'excerpt_content' => '25',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => true,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true 
            )
        );

        td_api_module::add('td_module_rd_19',
            array(
                'file' => $this->plugin_path . '/modules/td_module_rd_19.php',
                'text' => 'Module Red 19',
                'img' => $this->plugin_url . '/images/modules/td_module_rd_19.png',
                'used_on_blocks' => array('Block Red 19'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => true,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true 
            )
        );

        td_api_module::add('td_module_rd_20',
            array(
                'file' => $this->plugin_path . '/modules/td_module_rd_20.php',
                'text' => 'Module rd_20',
                'img' => $this->plugin_url . '/images/modules/td_module_rd_20.png',
                'used_on_blocks' => array('Block Red 20'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => true,
                'enabled_on_loops' => true,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true 
            )
        );

        td_api_module::add('td_module_mx_rd_bl_1',
            array(
                'file' => $this->plugin_path . '/modules/td_module_mx_rd_bl_1.php',
                'text' => 'Module BL MX Red 1',
                'img' => $this->plugin_url . '/images/modules/td_module_mx_rd_bl_1.png',
                'used_on_blocks' => array('Block Red 23', 'Block Red 26', 'Block Red 29', 'Block Red 30'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true 
            )
        );

        td_api_module::add('td_module_mx_rd_bl_2',
            array(
                'file' => $this->plugin_path . '/modules/td_module_mx_rd_bl_2.php',
                'text' => 'Module BL MX Red 2',
                'img' => $this->plugin_url . '/images/modules/td_module_mx_rd_bl_2.png',
                'used_on_blocks' => array('Block Red 27'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true 
            )
        );

        td_api_module::add('td_module_mx_rd_bl_3',
            array(
                'file' => $this->plugin_path . '/modules/td_module_mx_rd_bl_3.php',
                'text' => 'Module BL MX Red 3',
                'img' => $this->plugin_url . '/images/modules/td_module_mx_rd_bl_3.png',
                'used_on_blocks' => array('Block Red 29', 'Block Red 30'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '', // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
                'premium' => true 
            )
        );



        // add module typography/fonts customization options in the theme panel
        td_global::$typography_settings_list['Modules and Blocks - Article Title'] = array_merge( td_global::$typography_settings_list['Modules and Blocks - Article Title'] ,
            array (
                'td_module_rd_1' =>  array(
                    'text' => 'Module Red 1',
                    'type' => 'default',
                ),
                'td_module_rd_2' =>  array(
                    'text' => 'Module Red 2',
                    'type' => 'default',
                ),
                'td_module_rd_3' =>  array(
                    'text' => 'Module Red 3',
                    'type' => 'default',
                ),
                'td_module_rd_4' =>  array(
                    'text' => 'Module Red 4',
                    'type' => 'default',
                ),
                'td_module_rd_5' =>  array(
                    'text' => 'Module Red 5',
                    'type' => 'default',
                ),
                'td_module_rd_6' =>  array(
                    'text' => 'Module Red 6',
                    'type' => 'default',
                ),
                'td_module_rd_7' =>  array(
                    'text' => 'Module Red 7',
                    'type' => 'default',
                ),
                'td_module_rd_8' =>  array(
                    'text' => 'Module Red 8',
                    'type' => 'default',
                ),
                'td_module_rd_9' =>  array(
                    'text' => 'Module Red 9',
                    'type' => 'default',
                ),
                'td_module_rd_10' =>  array(
                    'text' => 'Module Red 10',
                    'type' => 'default',
                ),
                'td_module_rd_11' =>  array(
                    'text' => 'Module Red 11',
                    'type' => 'default',
                ),
                'td_module_rd_12' =>  array(
                    'text' => 'Module Red 12',
                    'type' => 'default',
                ),
                'td_module_rd_13' =>  array(
                    'text' => 'Module Red 13',
                    'type' => 'default',
                ),
                'td_module_rd_14' =>  array(
                    'text' => 'Module Red 14',
                    'type' => 'default',
                ),
                'td_module_rd_15' =>  array(
                    'text' => 'Module Red 15',
                    'type' => 'default',
                ),
                'td_module_rd_16' =>  array(
                    'text' => 'Module Red 16',
                    'type' => 'default',
                ),
                'td_module_rd_17' =>  array(
                    'text' => 'Module Red 17',
                    'type' => 'default',
                ),
                'td_module_rd_18' =>  array(
                    'text' => 'Module Red 18',
                    'type' => 'default',
                ),
                'td_module_rd_19' =>  array(
                    'text' => 'Module Red 19',
                    'type' => 'default',
                ),
                'td_module_rd_20' =>  array(
                    'text' => 'Module Red 20',
                    'type' => 'default',
                )

            )
        );


        // the @ variables in the css generator are loaded from the main theme for now...
        // we should be able to load @variables from here too
        td_api_css_generator::add('td-blocks-red-pack', '
        <style>
            /* @td_module_rd_1 */
            .td-theme-wrap .td_module_rd_1 .entry-title {
                @td_module_rd_1
            }
            
            /* @td_module_rd_2 */
            .td-theme-wrap .td_module_rd_2 .entry-title {
                @td_module_rd_2
            }
            
            /* @td_module_rd_3 */
            .td-theme-wrap .td_module_rd_3 .entry-title {
                @td_module_rd_3
            }
            
            /* @td_module_rd_4 */
            .td-theme-wrap .td_module_rd_4 .entry-title {
                @td_module_rd_4
            }
            
            /* @td_module_rd_5 */
            .td-theme-wrap .td_module_rd_5 .entry-title {
                @td_module_rd_5
            }
            
            /* @td_module_rd_6 */
            .td-theme-wrap .td_module_rd_6 .entry-title {
                @td_module_rd_6
            }
            
            /* @td_module_rd_7 */
            .td-theme-wrap .td_module_rd_7 .entry-title {
                @td_module_rd_7
            }
            
            /* @td_module_rd_8 */
            .td-theme-wrap .td_module_rd_8 .entry-title {
                @td_module_rd_8
            }
            
            /* @td_module_rd_9 */
            .td-theme-wrap .td_module_rd_9 .entry-title {
                @td_module_rd_9
            }
            
            /* @td_module_rd_10 */
            .td-theme-wrap .td_module_rd_10 .entry-title {
                @td_module_rd_10
            }
            
            /* @td_module_rd_11 */
            .td-theme-wrap .td_module_rd_11 .entry-title {
                @td_module_rd_11
            }
            
            /* @td_module_rd_12 */
            .td-theme-wrap .td_module_rd_12 .entry-title {
                @td_module_rd_12
            }
            
            /* @td_module_rd_13 */
            .td-theme-wrap .td_module_rd_13 .entry-title {
                @td_module_rd_13
            }
            
            /* @td_module_rd_14 */
            .td-theme-wrap .td_module_rd_14 .entry-title {
                @td_module_rd_14
            }
            
            /* @td_module_rd_15 */
            .td-theme-wrap .td_module_rd_15 .entry-title {
                @td_module_rd_15
            }
            
            /* @td_module_rd_16 */
            .td-theme-wrap .td_module_rd_16 .entry-title {
                @td_module_rd_16
            }
            
            /* @td_module_rd_17 */
            .td-theme-wrap .td_module_rd_17 .entry-title {
                @td_module_rd_17
            }
            
            /* @td_module_rd_18 */
            .td-theme-wrap .td_module_rd_18 .entry-title {
                @td_module_rd_18
            }
            
            /* @td_module_rd_19 */
            .td-theme-wrap .td_module_rd_19 .entry-title {
                @td_module_rd_19
            }
            
            /* @td_module_rd_20 */
            .td-theme-wrap .td_module_rd_20 .entry-title {
                @td_module_rd_20
            }
            
            
        </style>
        ');




        // Thumbs
        td_api_thumb::update('td_640x400',
            array(
                'name' => 'td_640x400',
                'width' => 640,
                'height' => 400,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    '<span style="color:#f1a1a1;">Block Red 29 &middot; 30</span>'
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
                    '<span style="color:#f1a1a1;">Module Red 5 &middot; 6 &middot; 7 &middot; 8</span>', '<span style="color:#f1a1a1;">Block Red 5 &middot; 6 &middot; 7 &middot; 8</span>'
                ),
                'no_image_path' => $this->plugin_url,
            )
        );

        td_api_thumb::update('td_300x220',
            array(
                'name' => 'td_300x220',
                'width' => 300,
                'height' => 220,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    '<span style="color:#f1a1a1;">Module Red 1 &middot; 4</span>', '<span style="color:#f1a1a1;">Block Red 1 &middot; 4 &middot; 23 &middot; 26 &middot; 29 &middot; 30</span>'
                ),
                'no_image_path' => $this->plugin_url,
            )
        );

        td_api_thumb::update('td_100x70',
            array(
                'name' => 'td_100x70',
                'width' => 100,
                'height' => 70,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    '<span style="color:#f1a1a1;">Module Red 20</span>', '<span style="color:#f1a1a1;">Block Red 20</span>'
                ),
                'no_image_path' => $this->plugin_url,
            )
        );

        td_api_thumb::update('td_197x197',
            array(
                'name' => 'td_197x197',
                'width' => 197,
                'height' => 197,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    '<span style="color:#f1a1a1;">Module Red 10 &middot; 15</span>', '<span style="color:#f1a1a1;">Block Red 10 &middot; 15</span>'
                ),
                'no_image_path' => $this->plugin_url,
            )
        );

        td_api_thumb::update('td_214x285',
            array(
                'name' => 'td_214x285',
                'width' => 214,
                'height' => 285,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    '<span style="color:#f1a1a1;">Module Red 11 &middot; 14</span>', '<span style="color:#f1a1a1;">Block Red 11 &middot; 14</span>'
                ),
                'no_image_path' => $this->plugin_url,
            )
        );

        td_api_thumb::update('td_300x150',
            array(
                'name' => 'td_300x150',
                'width' => 300,
                'height' => 150,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    '<span style="color:#f1a1a1;">Module Red 2 &middot; 3</span>', '<span style="color:#f1a1a1;">Block Red 2 &middot; 3 &middot; 24</span>'
                ),
                'no_image_path' => $this->plugin_url,
            )
        );

        td_api_thumb::update('td_300x444',
            array(
                'name' => 'td_300x444',
                'width' => 300,
                'height' => 444,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    '<span style="color:#f1a1a1;">Module Red 12 &middot; 13</span>', '<span style="color:#f1a1a1;">Block Red 12 &middot; 13 &middot; 25 &middot; 27</span>'
                ),
                'no_image_path' => $this->plugin_url,
            )
        );

        td_api_thumb::update('td_330x254',
            array(
                'name' => 'td_330x254',
                'width' => 330,
                'height' => 254,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    '<span style="color:#f1a1a1;">Module Red 16 &middot; 17 &middot; 18 &middot; 19</span>', '<span style="color:#f1a1a1;">Block Red 16 &middot; 17 &middot; 18 &middot; 19</span>'
                ),
                'no_image_path' => $this->plugin_url,
            )
        );

        // Blocks list
        td_api_block::add('td_block_rd_1',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block Red 1',
                "base" => 'td_block_rd_1',
                "class" => 'td_block_rd_1',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_rd_1',
                'file' => $this->plugin_path . '/shortcodes/td_block_rd_1.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),
                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),
                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_rd_2',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block Red 2',
                "base" => 'td_block_rd_2',
                "class" => 'td_block_rd_2',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_rd_2',
                'file' => $this->plugin_path . '/shortcodes/td_block_rd_2.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),
                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),
                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_rd_3',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block Red 3',
                "base" => 'td_block_rd_3',
                "class" => 'td_block_rd_3',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_rd_3',
                'file' => $this->plugin_path . '/shortcodes/td_block_rd_3.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),
                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),
                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_rd_4',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block Red 4',
                "base" => 'td_block_rd_4',
                "class" => 'td_block_rd_4',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_rd_4',
                'file' => $this->plugin_path . '/shortcodes/td_block_rd_4.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),
                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),
                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_rd_5',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block Red 5',
                "base" => 'td_block_rd_5',
                "class" => 'td_block_rd_5',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_rd_5',
                'file' => $this->plugin_path . '/shortcodes/td_block_rd_5.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),
                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),
                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_rd_6',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block Red 6',
                "base" => 'td_block_rd_6',
                "class" => 'td_block_rd_6',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_rd_6',
                'file' => $this->plugin_path . '/shortcodes/td_block_rd_6.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),
                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),
                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_rd_7',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block Red 7',
                "base" => 'td_block_rd_7',
                "class" => 'td_block_rd_7',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_rd_7',
                'file' => $this->plugin_path . '/shortcodes/td_block_rd_7.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),
                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),
                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_rd_8',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block Red 8',
                "base" => 'td_block_rd_8',
                "class" => 'td_block_rd_8',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_rd_8',
                'file' => $this->plugin_path . '/shortcodes/td_block_rd_8.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),
                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),
                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_rd_9',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block Red 9',
                "base" => 'td_block_rd_9',
                "class" => 'td_block_rd_9',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_rd_9',
                'file' => $this->plugin_path . '/shortcodes/td_block_rd_9.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),
                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),
                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_rd_10',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block Red 10',
                "base" => 'td_block_rd_10',
                "class" => 'td_block_rd_10',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_rd_10',
                'file' => $this->plugin_path . '/shortcodes/td_block_rd_10.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),
                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),
                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_rd_11',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block Red 11',
                "base" => 'td_block_rd_11',
                "class" => 'td_block_rd_11',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_rd_11',
                'file' => $this->plugin_path . '/shortcodes/td_block_rd_11.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),
                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),
                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_rd_12',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block Red 12',
                "base" => 'td_block_rd_12',
                "class" => 'td_block_rd_12',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_rd_12',
                'file' => $this->plugin_path . '/shortcodes/td_block_rd_12.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),
                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),
                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_rd_13',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block Red 13',
                "base" => 'td_block_rd_13',
                "class" => 'td_block_rd_13',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_rd_13',
                'file' => $this->plugin_path . '/shortcodes/td_block_rd_13.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),
                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),
                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_rd_14',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block Red 14',
                "base" => 'td_block_rd_14',
                "class" => 'td_block_rd_14',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_rd_14',
                'file' => $this->plugin_path . '/shortcodes/td_block_rd_14.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),
                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),
                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_rd_15',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block Red 15',
                "base" => 'td_block_rd_15',
                "class" => 'td_block_rd_15',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_rd_15',
                'file' => $this->plugin_path . '/shortcodes/td_block_rd_15.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),
                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),
                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_rd_16',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block Red 16',
                "base" => 'td_block_rd_16',
                "class" => 'td_block_rd_16',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_rd_16',
                'file' => $this->plugin_path . '/shortcodes/td_block_rd_16.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),
                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),
                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_rd_17',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block Red 17',
                "base" => 'td_block_rd_17',
                "class" => 'td_block_rd_17',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_rd_17',
                'file' => $this->plugin_path . '/shortcodes/td_block_rd_17.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),
                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),
                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_rd_18',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block Red 18',
                "base" => 'td_block_rd_18',
                "class" => 'td_block_rd_18',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_rd_18',
                'file' => $this->plugin_path . '/shortcodes/td_block_rd_18.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),
                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),
                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_rd_19',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block Red 19',
                "base" => 'td_block_rd_19',
                "class" => 'td_block_rd_19',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_rd_19',
                'file' => $this->plugin_path . '/shortcodes/td_block_rd_19.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),
                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),
                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_rd_20',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block Red 20',
                "base" => 'td_block_rd_20',
                "class" => 'td_block_rd_20',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_rd_20',
                'file' => $this->plugin_path . '/shortcodes/td_block_rd_20.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),
                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),
                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_rd_21',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block Red 21',
                "base" => 'td_block_rd_21',
                "class" => 'td_block_rd_21',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_rd_21',
                'file' => $this->plugin_path . '/shortcodes/td_block_rd_21.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),
                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),
                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_rd_22',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block Red 22',
                "base" => 'td_block_rd_22',
                "class" => 'td_block_rd_22',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_rd_22',
                'file' => $this->plugin_path . '/shortcodes/td_block_rd_22.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),
                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),
                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_rd_23',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block Red 23',
                "base" => 'td_block_rd_23',
                "class" => 'td_block_rd_23',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_rd_23',
                'file' => $this->plugin_path . '/shortcodes/td_block_rd_23.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),
                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),
                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_rd_24',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block Red 24',
                "base" => 'td_block_rd_24',
                "class" => 'td_block_rd_24',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_rd_24',
                'file' => $this->plugin_path . '/shortcodes/td_block_rd_24.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),
                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),
                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_rd_25',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block Red 25',
                "base" => 'td_block_rd_25',
                "class" => 'td_block_rd_25',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_rd_25',
                'file' => $this->plugin_path . '/shortcodes/td_block_rd_25.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),
                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),
                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_rd_26',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block Red 26',
                "base" => 'td_block_rd_26',
                "class" => 'td_block_rd_26',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_rd_26',
                'file' => $this->plugin_path . '/shortcodes/td_block_rd_26.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),
                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),
                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_rd_27',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block Red 27',
                "base" => 'td_block_rd_27',
                "class" => 'td_block_rd_27',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_rd_27',
                'file' => $this->plugin_path . '/shortcodes/td_block_rd_27.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),
                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),
                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_rd_28',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block Red 28',
                "base" => 'td_block_rd_28',
                "class" => 'td_block_rd_28',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_rd_28',
                'file' => $this->plugin_path . '/shortcodes/td_block_rd_28.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),
                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),
                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_rd_29',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block Red 29',
                "base" => 'td_block_rd_29',
                "class" => 'td_block_rd_29',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_rd_29',
                'file' => $this->plugin_path . '/shortcodes/td_block_rd_29.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),
                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),
                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_rd_30',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block Red 30',
                "base" => 'td_block_rd_30',
                "class" => 'td_block_rd_30',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_rd_30',
                'file' => $this->plugin_path . '/shortcodes/td_block_rd_30.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),
                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),
                    td_config::get_map_block_pagination_array()
                )
            )
        );
    }

    function hook_td_wp_booster_loaded() {
        include_once('widgets/td_block_widgets.php'); // widgets
    }
}
new td_api_plugin_red();