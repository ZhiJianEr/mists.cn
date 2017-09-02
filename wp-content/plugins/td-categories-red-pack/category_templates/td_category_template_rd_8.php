<?php
class td_category_template_rd_8 extends td_category_template {

    function render() {
        ?>

        <!-- subcategory -->
        <div class="td-category-header td-container-wrap">
            <div class="td-container">
                <div class="td-pb-row">
                    <div class="td-pb-span12">
                        <div class="td-category-crumb-filter">
                            <?php echo parent::get_breadcrumbs(); ?>
                            <?php echo parent::get_pull_down(); ?>
                        </div>

                        <h1 itemprop="name" class="entry-title td-page-title">
                            <div class="td-category-bg-title">
                                <?php echo parent::get_title(); ?>
                            </div>

                            <?php echo parent::get_title(); ?>
                        </h1>

                        <?php echo parent::get_sibling_categories(array(
                            'show_background_color' => true
                        ));
                        ?>

                        <?php echo parent::get_description(); ?>
                    </div>
                </div>
            </div>
        </div>

        <?php
    }
}
