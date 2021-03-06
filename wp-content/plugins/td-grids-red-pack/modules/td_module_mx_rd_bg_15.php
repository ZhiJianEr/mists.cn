<?php

class td_module_mx_rd_bg_15 extends td_module {

    function __construct($post) {
        //run the parrent constructor
        parent::__construct($post);
    }

    function render($order_no) {
        ob_start();
        ?>

        <div class="<?php echo $this->get_module_classes(array("td-big-grid-post-$order_no", "td-big-grid-post td-mx-19"));?>">
            <div class="td-module-image">
                <?php echo $this->get_image('td_653x364');?>
            </div>

            <div class="td-meta-info-container">
                <div class="td-meta-align">
                    <div class="td-big-grid-meta">
                        <?php if (td_util::get_option('tds_category_module_mx_rd_bg_15') == 'yes') { echo $this->get_category(); }?>
                        <?php echo $this->get_title();?>
                    </div>

                    <div class="td-module-meta-info">
                        <?php echo $this->get_date();?>
                    </div>
                </div>
            </div>
        </div>

        <?php return ob_get_clean();
    }
}