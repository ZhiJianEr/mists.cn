<?php

class td_module_rd_15 extends td_module {

    function __construct($post) {
        //run the parrent constructor
        parent::__construct($post);
    }

    function render() {
        ob_start();
        ?>

        <div class="<?php echo $this->get_module_classes();?>" <?php echo $this->get_item_scope();?>>
            <div class="td-module-image">
                <?php echo $this->get_image('td_197x197');?>
                <div class="td-post-category-wrap"><?php if (td_util::get_option('tds_category_module_rd_15') == 'yes') { echo $this->get_category(); }?></div>
            </div>

            <?php echo $this->get_title();?>
        </div>

        <?php return ob_get_clean();
    }
}