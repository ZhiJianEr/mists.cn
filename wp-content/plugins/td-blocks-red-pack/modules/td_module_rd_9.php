<?php

class td_module_rd_9 extends td_module {

    function __construct($post) {
        //run the parrent constructor
        parent::__construct($post);
    }

    function render() {
        ob_start();
        ?>

        <div class="<?php echo $this->get_module_classes();?>" <?php echo $this->get_item_scope();?>>
            <div class="td-module-meta-info td-no-comment td-category-small">
                <?php if (td_util::get_option('tds_category_module_rd_9') == 'yes') { echo $this->get_category(); }?>
                <div></div>
            </div>

            <?php echo $this->get_title();?>

            <div class="td-module-meta-info td-no-comment">
                <?php echo $this->get_date();?>
            </div>
        </div>

        <?php return ob_get_clean();
    }
}