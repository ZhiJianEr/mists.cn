<!--
Header style premium 6
-->

<div class="td-header-wrap td-header-logo-inmenu td-header-style-pr-6">
    <div class="td-header-bg td-container-wrap <?php echo td_util::get_option('td_full_header_background'); ?>"></div>
    <div class="td-header-top-menu td-container-wrap <?php echo td_util::get_option('td_full_top_bar'); ?>">
        <div class="td-container td-header-row">
            <?php td_api_top_bar_template::_helper_show_top_bar() ?>
        </div>
    </div>

    <div class="td-header-menu-wrap-full td-container-wrap <?php echo td_util::get_option('td_full_menu'); ?>">
        <?php
            $menuSocialClass = '';
            if(td_util::get_option('td_social_networks_menu_show') == 'show')
                $menuSocialClass = 'td-header-menu-social-show';
            $menuSearchClass = '';
            if(!td_util::get_option('tds_search_placement') == '')
                $menuSearchClass = 'td-header-menu-no-search';
        ?>

        <div class="td-header-menu-wrap <?php echo $menuSocialClass . ' ' . $menuSearchClass ?>">
            <div class="td-container td-header-row td-header-main-menu">
                <div class="td-header-sp-logo">
                    <?php locate_template('parts/header/logo-h1.php', true);?>
                </div>

                <?php require_once('header-menu-pr-1.php');?>
            </div>
        </div>
    </div>

    <div class="td-header-logo-wrap td-container-wrap <?php echo td_util::get_option('td_full_header'); ?>">
        <div class="td-container td-header-row">
            <div class="td-header-sp-recs">
                <?php locate_template('parts/header/ads.php', true); ?>
            </div>
        </div>
    </div>
</div>