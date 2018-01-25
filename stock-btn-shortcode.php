<?php
function asif_btn_shortcode($atts, $content = null) {
    extract( shortcode_atts( array(
        'type' => 1,
        'link_to_page' => '',
        'external_link' => '',
        'link_text' => 'Read more about us',
    ), $atts) );
	
	
    if($type == 1) { $link_source = get_page_link($link_to_page);
    } else {
        $link_source = $external_link;
    }
	
    $asif_btn_markup = '
		<a href="'.$link_source.'" class="borderdbtn">'.$link_text.'</a>
    ';
    return $asif_btn_markup;
}
add_shortcode('asif_btn', 'asif_btn_shortcode');
