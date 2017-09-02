<?php
class td_smart_list_rd_1 extends td_smart_list {



    protected function render_before_list_wrap() {
        if(td_global::$cur_single_template_sidebar_pos == 'no_sidebar') {
            $td_class_nr_of_columns = ' td-3-columns ';
        } else {
            $td_class_nr_of_columns = ' td-2-columns ';
        }

        $buffy = '';

        //wrapper with id for smart list wrapper type 1
        $buffy .= '<div class="td_smart_list_rd_1' . $td_class_nr_of_columns . '">';

        return $buffy;
    }


    protected function render_list_item($item_array, $current_item_id, $current_item_number, $total_items_number) {
        //print_r($item_array);
        $buffy = '';

        //get the title
        $smart_list_rd_1_title = '';
        if(!empty($item_array['title'])) {
            $smart_list_rd_1_title = $item_array['title'];
        }

        //creating each slide
        $buffy .= '<div class="td-item">';

        //get image info
        $first_img_all_info = td_util::attachment_get_full_info($item_array['first_img_id']);

        //get image link target
        $first_img_link_target = $item_array['first_img_link_target'];

        //image caption
        $first_img_caption = '';
        if(!empty($item_array['first_img_caption'])) {
            $first_img_caption = '<div>' . $item_array['first_img_caption'] . '</div>';
        }

        $first_img_info = wp_get_attachment_image_src($item_array['first_img_id'], 'thumbnail');

        if (!empty($first_img_info[0])) {

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
                    <figure class="td-slide-smart-list-figure td-slide-smart-list-1' . $smart_list_lightbox . '">
                        <a class="td-sml-link-to-image" href="' . $first_img_all_info['src'] . '" data-caption="' . esc_attr($first_img_caption, ENT_QUOTES) . '" ' . $first_img_link_target .' >
                            <img src="' . $first_img_info[0] . '"/>
                        </a>
                    </figure>
                    <figcaption class="td-sml-caption">' . $first_img_caption . '</figcaption>
                </div>
                ';
        }

        //adding description
        if(!empty($item_array['description'])) {
            $buffy .= '<div class="td-number-and-title"><h2 class="td-title-smart"><span class="td-sml-current-item-nr">' . $current_item_number. '</span><span class="td-sml-current-item-title">' . $smart_list_rd_1_title . '</span></h2></div>
                       <span class="td-sml-description">' . $item_array['description'] . '</span>';
        }


        $buffy .= '<div class="clearfix"></div>';
        $buffy .= '</div>';

        return $buffy;
    }


    protected function render_after_list_wrap() {
        $buffy = '';
        $buffy .= '</div>'; // /.td_smart_list_rd_1  wrapper with id

        return $buffy;
    }
}