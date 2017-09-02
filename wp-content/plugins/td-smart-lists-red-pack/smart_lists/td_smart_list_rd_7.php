<?php


class td_smart_list_rd_7 extends td_smart_list {

    protected $use_pagination = true; // set this to true to use pagination on this template


    protected function render_before_list_wrap() {
        if(td_global::$cur_single_template_sidebar_pos == 'no_sidebar') {
            $td_class_nr_of_columns = ' td-3-columns ';
        } else {
            $td_class_nr_of_columns = ' td-2-columns ';
        }

        $buffy = '';

        //wrapper with id for smart list wrapper type red 7
        $buffy .= '<div class="td_smart_list_rd_7' . $td_class_nr_of_columns . '">';

        return $buffy;
    }


    protected function render_list_item($item_array, $current_item_id, $current_item_number, $total_items_number) {
        //print_r($item_array);
        $buffy = '';

        // render the pagination
        $buffy .= $this->callback_render_drop_down_pagination();

        // ad smart list
        $tds_smart_list_title = td_util::get_option('tds_smart_list_rd_7_title'); // ad title
        $buffy .= td_global_blocks::get_instance('td_block_ad_box')->render(array('spot_id' => 'smart_list_rd_7', 'spot_title' => $tds_smart_list_title));

        //creating each slide
        $buffy .= '<div class="td-item">';
        $buffy .= '<div class="td-number-and-title"><h2 class="td-title-smart"><span class="td-sml-current-item-title">' . $item_array['title'] . '</span></h2></div>';

        //adding description
        if(!empty($item_array['description'])) {
            $buffy .= '<span class="td-sml-description">' . $item_array['description'] . '</span>';
        }

        $buffy .= '</div>';

        // render the pagination
        $buffy .= $this->callback_render_drop_down_pagination();



        return $buffy;
    }



    protected function render_after_list_wrap() {
        $buffy = '';
        $buffy .= '</div>'; // /.td_smart_list_rd_7  wrapper with id

        return $buffy;
    }

}