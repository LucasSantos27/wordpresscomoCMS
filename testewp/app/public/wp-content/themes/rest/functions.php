<?php

function get_field($key, $page_id = 0){
    $id = $page_id != 0 ? $page_id : get_the_ID();
    return get_post_meta($id, $key, true);
}

function the_field($key, $page_id = 0){
    echo get_field($key, $page_id);
}


add_action('cmb2_admin_init', 'cmb2_fields_home');

function cmb2_fields_home(){
    $cmb = new_cmb2_box([
        'id' => 'home_box',
        'title' => 'Home',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php',
        ],
    ]);

    $cmb->add_field([
        'name' => 'Comida',
        'id' => 'comida',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'Descrição',
        'id' => 'desc',
        'type' => 'textarea',
    ]);
}
