<?php
class td_block_rd_19 extends td_block {
    function render($atts, $content = null) {
        parent::render($atts); // sets the live atts, $this->atts, $this->block_uid, $this->td_query (it runs the query)

        if (empty($td_column_number)) {
            $td_column_number = td_global::vc_get_column_number(); // get the column width of the block from the page builder API
        }

        $buffy = ''; //output buffer

        $buffy .= '<div class="' . $this->get_block_classes() . ' td-column-' . $td_column_number . ' td_block_padding td_column_2_padding" ' . $this->get_block_html_atts() . '>';

        //get the block js
        $buffy .= $this->get_block_css();

        //get the js for this block
        $buffy .= $this->get_block_js();

        // block title wrap
        $buffy .= '<div class="td-block-title-wrap">';
        $buffy .= $this->get_block_title(); //get the block title
        $buffy .= $this->get_pull_down_filter(); //get the sub category filter for this block
        $buffy .= '</div>';

        $buffy .= '<div id=' . $this->block_uid . ' class="td_block_inner">';
        $buffy .= $this->inner($this->td_query->posts);  //inner content of the block
        $buffy .= '</div>';

        //get the ajax pagination for this block
        $buffy .= $this->get_block_pagination();

        $buffy .= td_util::get_block_lock();

        $buffy .= '</div> <!-- ./block -->';
        return $buffy;
    }

    function inner($posts, $td_column_number = '') {
        $buffy = '';

        $td_block_layout = new td_block_layout();
        if (empty($td_column_number)) {
            $td_column_number = td_global::vc_get_column_number(); // get the column width of the block from the page builder API
        }

        $td_post_count = 1; // the number of posts rendered

        if (!empty($posts)) {
            foreach ($posts as $post) {
                $td_module_rd_19 = new td_module_rd_19($post);
                $td_module_2 = new td_module_2($post);

                switch ($td_column_number) {

                    case '1': //one column layout
                        $buffy .= $td_module_2->render();
                        break;

                    case '2': //two column layout
                        $buffy .= $td_module_rd_19->render();
                        break;

                    case '3': //three column layout
                        $buffy .= $td_block_layout->open_row();
                        $buffy .= $td_block_layout->open6();
                        $buffy .= $td_module_rd_19->render();
                        $buffy .= $td_block_layout->close6();

                        if ($td_post_count == 2) {
                            $buffy .= $td_block_layout->close_row();
                            $td_post_count = 0;
                        }
                        break;
                }

                $td_post_count++;
            }
        }
        $buffy .= $td_block_layout->close_all_tags();
        return $buffy;
    }
}