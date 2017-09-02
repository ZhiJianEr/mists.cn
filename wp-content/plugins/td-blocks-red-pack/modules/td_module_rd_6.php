<?php

class td_module_rd_6 extends td_module {

    function __construct($post) {
        //run the parrent constructor
        parent::__construct($post);
    }

    function render() {
        ob_start();
        ?>

        <div class="<?php echo $this->get_module_classes();?>" <?php echo $this->get_item_scope();?>>
            <?php echo $this->get_title();?>

            <div class="td-module-meta-info">
                <?php echo $this->get_author();?>
                <?php echo $this->get_date();?>
                <?php echo $this->get_comments();?>
            </div>

            <div class="td-module-image">
                <?php echo $this->get_image('td_640x0');?>
                <div class="td-post-category-wrap"><?php if (td_util::get_option('tds_category_module_rd_6') == 'yes') { echo $this->get_category(); }?></div>
            </div>

            <div class="td-excerpt">
                <?php echo $this->get_excerpt();?>
            </div>

            <a href="<?php echo $this->href;?>" class="td-read-more"><?php echo __td('Read more', TD_THEME_NAME);?><i class="td-icon-font td-icon-menu-down"></i></a>
        </div>

        <?php return ob_get_clean();
    }
}