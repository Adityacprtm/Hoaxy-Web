<?php

/**
 * register blocks widgets
 */
function tdsp_load_widgets() {
    $td_block_widgets = array(
        'td_block_1',
        'td_block_2',
        'td_block_3',
        'td_block_4',
        'td_block_5',
        'td_block_6',
        'td_block_7',
        'td_block_8',
        'td_block_9',
        'td_block_10',
        'td_block_11',
        'td_block_12',
        'td_block_13',
        'td_block_14',
        'td_block_15',
        'td_block_16',
        'td_block_17',
        'td_block_18',
        'td_block_19',
        'td_block_20',
        'td_block_21',
        'td_block_22',
        'td_block_23',
        'td_block_24',
        'td_block_25',
    );

    foreach ( $td_block_widgets as $td_block_key ) {
        $td_block_widget = new td_block_widget( $td_block_key );
        register_widget( $td_block_widget );
    }
}

add_action('widgets_init', 'tdsp_load_widgets');
