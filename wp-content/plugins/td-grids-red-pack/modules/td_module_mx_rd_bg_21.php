<?php

class td_module_mx_rd_bg_21 extends td_module {

    function __construct($post) {
        //run the parrent constructor
        parent::__construct($post);
    }

    function render($order_no, $position) {
        ob_start();
        ?>

        <div class="<?php echo $this->get_module_classes(array("td-big-grid-post-$order_no", "td-big-grid-post td-mx-15"));?>">
            <?php if($position==1) { ?>
                <div class="td-module-image">
                    <?php echo $this->get_image('td_245x245');?>
                </div>
            <?php } ?>

            <div class="td-item-details-wrap td-category-small">
                <div class="td-item-details">
                    <?php if (td_util::get_option('tds_category_module_mx_rd_bg_21') == 'yes') { echo $this->get_category(); }?>

                    <?php echo $this->get_title();?>

                    <div class="td-module-meta-info">
                        <?php echo $this->get_date();?>
                    </div>

                    <div class="td-excerpt">
                        <?php echo $this->get_excerpt();?>
                    </div>
                </div>
            </div>

            <?php if($position==2) { ?>
                <div class="td-module-image">
                    <?php echo $this->get_image('td_245x245');?>
                </div>
            <?php } ?>
        </div>

        <?php return ob_get_clean();
    }
}