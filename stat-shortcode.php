<?php
function asif_stat_shortcode($atts, $content = null) {
    extract( shortcode_atts( array(
        'number' => '',
        'after_text' => '',
        'desc' => '',
    ), $atts) );
    $asif_stat_markup = '
        
        <div class="asif-stat-box">
            <h1><span>'.$number.'</span>'.$after_text.'</h1>
            '.$desc.'
        </div>
    ';
    return $asif_stat_markup;
}
add_shortcode('asif_stat', 'asif_stat_shortcode');
