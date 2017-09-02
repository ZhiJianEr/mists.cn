<?php

class td_module_rd_7 extends td_module {

    function __construct($post) {
        //run the parrent constructor
        parent::__construct($post);
    }

    function render() {
        ob_start();
        ?>

        <div class="<?php echo $this->get_module_classes();?>" <?php echo $this->get_item_scope();?>>
            <div class="meta-info-container">
                <?php echo $this->get_image('td_640x0');?>

                <div class="td-module-meta-info">
                    <div class="td-module-meta-holder">
                        <div class="td-post-category-wrap"><?php if (td_util::get_option('tds_category_module_rd_7') == 'yes') { echo $this->get_category(); }?></div>

                        <?php echo $this->get_title();?>
                    </div>

                    <div class="td-module-meta-holder-alt">
                        <?php echo $this->get_date();?>
                        <?php echo $this->get_comments();?>
                    </div>
                </div>
            </div>

            <div class="td-excerpt">
                <?php echo $this->get_excerpt();?>
            </div>
        </div>

        <?php return ob_get_clean();
    }
}