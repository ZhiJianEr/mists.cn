<?php

class td_module_mx_rd_bl_3 extends td_module {

    function __construct($post) {
        //run the parrent constructor
        parent::__construct($post);
    }

    function render() {
        ob_start();
        ?>

        <div class="<?php echo $this->get_module_classes();?>" <?php echo $this->get_item_scope();?>>
            <div class="td-module-image">
                <?php echo $this->get_image('td_640x400');?>
            </div>

            <div class="td-meta-info-container">
                <?php if (td_util::get_option('tds_category_module_mx_rd_bl_3') == 'yes') { echo $this->get_category(); }?>

                <?php echo $this->get_title();?>

                <div class="td-module-meta-info">
                    <?php echo $this->get_author();?>
                    <?php echo $this->get_date();?>
                </div>
            </div>
        </div>

        <?php return ob_get_clean();
    }
}