
<?php
// Template red 5
//get the global sidebar position from td_single_template_vars.php

locate_template('includes/wp_booster/td_single_template_vars.php', true);

get_header();

global $loop_sidebar_position, $td_sidebar_position, $post;

$td_mod_single = new td_module_single($post);

?>
    <div class="td-main-content-wrap td-container-wrap">

        <div class="td-container">
            <article id="post-<?php echo $td_mod_single->post->ID;?>" class="<?php echo join(' ', get_post_class('td-post-template-rd-5'));?>" <?php echo $td_mod_single->get_item_scope();?>>
                <div class="td-pb-row">
                    <div class="td-pb-span12">
                        <div class="td-post-header">
                            <div class="td-crumb-container"><?php echo td_page_generator::get_single_breadcrumbs($td_mod_single->title); ?></div>

                            <div class="td-post-header-holder">
                                <?php echo $td_mod_single->get_image('td_980x0'); ?>

                                <header class="td-post-title">
                                    <?php echo $td_mod_single->get_category(); ?>
                                    <?php echo $td_mod_single->get_title();?>

                                    <?php if (!empty($td_mod_single->td_post_theme_settings['td_subtitle'])) { ?>
                                        <p class="td-post-sub-title"><?php echo $td_mod_single->td_post_theme_settings['td_subtitle'];?></p>
                                    <?php } ?>


                                    <div class="td-module-meta-info">
                                        <?php echo $td_mod_single->get_author();?>
                                        <?php echo $td_mod_single->get_date(false);?>
                                        <?php echo $td_mod_single->get_comments();?>
                                        <div class="td-post-views-wrap">
                                            <?php echo $td_mod_single->get_views();?>
                                            <?php if (td_util::get_option('tds_p_show_views') != 'hide') {?>
                                                <span class="td-post-views-text"><?php echo __td('views', TD_THEME_NAME);?></span>
                                            <?php }?>
                                        </div>
                                    </div>
                                </header>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.td-pb-row -->

                <div class="td-pb-row">
                    <?php

                    //the default template
                    switch ($loop_sidebar_position) {
                        default:
                            ?>
                            <div class="td-pb-span8 td-main-content" role="main">
                                <div class="td-ss-main-content">
                                    <?php
                                    require_once('loop-single-rd-5.php');
                                    comments_template('', true);
                                    ?>
                                </div>
                            </div>
                            <div class="td-pb-span4 td-main-sidebar" role="complementary">
                                <div class="td-ss-main-sidebar">
                                    <?php get_sidebar(); ?>
                                </div>
                            </div>
                            <?php
                            break;

                        case 'sidebar_left':
                            ?>
                            <div class="td-pb-span8 td-main-content <?php echo $td_sidebar_position; ?>-content" role="main">
                                <div class="td-ss-main-content">
                                    <?php
                                    require_once('loop-single-rd-5.php');
                                    comments_template('', true);
                                    ?>
                                </div>
                            </div>
                            <div class="td-pb-span4 td-main-sidebar" role="complementary">
                                <div class="td-ss-main-sidebar">
                                    <?php get_sidebar(); ?>
                                </div>
                            </div>
                            <?php
                            break;

                        case 'no_sidebar':
                            ?>
                            <div class="td-pb-span12 td-main-content" role="main">
                                <div class="td-ss-main-content">
                                    <?php
                                    require_once('loop-single-rd-5.php');
                                    comments_template('', true);
                                    ?>
                                </div>
                            </div>
                            <?php
                            break;

                    }
                    ?>
                </div> <!-- /.td-pb-row -->
            </article> <!-- /.post -->
        </div> <!-- /.td-container -->
    </div> <!-- /.td-main-content-wrap -->

<?php

get_footer();