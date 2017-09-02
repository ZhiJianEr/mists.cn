<?php


class td_smart_list_rd_4 extends td_smart_list {

    protected $use_pagination = true; // set this to true to use rela pagination on this template


    protected function render_before_list_wrap() {
        if(td_global::$cur_single_template_sidebar_pos == 'no_sidebar') {
            $td_class_nr_of_columns = ' td-3-columns ';
        } else {
            $td_class_nr_of_columns = ' td-2-columns ';
        }

        $buffy = '';

        //wrapper with id for smart list wrapper type red 4
        $buffy .= '<div class="td_smart_list_rd_4' . $td_class_nr_of_columns . '">';

        return $buffy;
    }


    protected function render_list_item($item_array, $current_item_id, $current_item_number, $total_items_number) {
        //print_r($item_array);
        $buffy = '';

        //get the title
        $smart_list_rd_4_title = '';
        if(!empty($item_array['title'])) {
            $smart_list_rd_4_title = $item_array['title'];
        }

        // render the pagination
        $buffy .= $this->callback_render_pagination();

        //creating each slide
        $buffy .= '<div class="td-item">';
        $buffy .= '<div class="td-number-and-title"><h2 class="td-title-smart"><span class="td-sml-current-item-nr">' . $current_item_number. '</span><span class="td-sml-current-item-title">' . $smart_list_rd_4_title . '</span></h2></div>';

        //get image info
        $first_img_all_info = td_util::attachment_get_full_info($item_array['first_img_id']);

        //get image link target
        $first_img_link_target = $item_array['first_img_link_target'];

        //image caption
        $first_img_caption = '';
        if(!empty($item_array['first_img_caption'])) {
            $first_img_caption = '<div>' . $item_array['first_img_caption'] . '</div>';
        }


        //image type and width - used to retrieve retina image
        $image_type = 'td_640x0';
        $image_width = '640';

        if(td_global::$cur_single_template_sidebar_pos == 'no_sidebar') {
            $first_img_info = wp_get_attachment_image_src($item_array['first_img_id'], 'td_980x0');
            //change image type and width - used to retrieve retina image
            $image_type = 'td_980x0';
            $image_width = '980';
        } else {
            $first_img_info = wp_get_attachment_image_src($item_array['first_img_id'], 'td_640x0');
        }
        if (!empty($first_img_info[0])) {

            //retina image
            $srcset_sizes = td_util::get_srcset_sizes($item_array['first_img_id'], $image_type, $image_width, $first_img_info[0]);

            // class used by magnific popup
            $smart_list_lightbox = " td-lightbox-enabled";

            // if a custom link is set use it
            if (!empty($item_array['first_img_link']) && $first_img_all_info['src'] != $item_array['first_img_link']) {
                $first_img_all_info['src'] = $item_array['first_img_link'];

                // remove the magnific popup class for custom links
                $smart_list_lightbox = "";
            }

            $buffy .= '
                <div class="td-sml-figure">
                    <figure class="td-slide-smart-list-figure td-slide-smart-list-rd-4' . $smart_list_lightbox . '">
                        <a class="td-sml-link-to-image" href="' . $first_img_all_info['src'] . '" data-caption="' . esc_attr($first_img_caption, ENT_QUOTES) . '" ' . $first_img_link_target . ' >
                            <img src="' . $first_img_info[0] . '"' . $srcset_sizes . '/>
                        </a>
                    </figure>
                    <figcaption class="td-sml-caption">' . $first_img_caption . '</figcaption>
                </div>
                ';

        }

        // ad smart list
        $tds_smart_list_title = td_util::get_option('tds_smart_list_rd_4_title'); // ad title
        $buffy .= td_global_blocks::get_instance('td_block_ad_box')->render(array('spot_id' => 'smart_list_rd_4', 'spot_title' => $tds_smart_list_title));

        //adding description
        if(!empty($item_array['description'])) {
            $buffy .= '<span class="td-sml-description">' . $item_array['description'] . '</span>';
        }

        $buffy .= '<div class="clearfix"></div>';
        $buffy .= '</div>';

        return $buffy;
    }



    protected function render_after_list_wrap() {
        $buffy = '';
        $buffy .= '</div>'; // /.td_smart_list_rd_4  wrapper with id

        return $buffy;
    }
}