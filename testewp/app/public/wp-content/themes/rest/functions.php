<?php
#Removendos coisas que não precisa dentro do site
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

//Habilitar Menus
add_theme_support('menus');

function get_field($key, $page_id = 0)
{
    $id = $page_id != 0 ? $page_id : get_the_ID();
    return get_post_meta($id, $key, true);
}

function the_field($key, $page_id = 0)
{
    echo get_field($key, $page_id);
}

#Home
add_action('cmb2_admin_init', 'cmb2_fields_home');
function cmb2_fields_home()
{
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
        'name' => 'Comida 2',
        'id' => 'comida2',
        'type' => 'text',
    ]);
}

#Pratos da semana
add_action('cmb2_admin_init', 'cmb2_fields_pratos');
function cmb2_fields_pratos()
{
    $cmb = new_cmb2_box([
        'id' => 'pratos_box',
        'title' => 'Pratos da semana',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php',
        ],
    ]);

    $pratos = $cmb->add_field([
        'name' => 'Pratos',
        'id' => 'pratos',
        'type' => 'group',
        'repeatable' => True,
        'options' =>[
            'group_title' => 'Prato {#}',
            'add_button' => 'Adicionar Prato',
            'sortable' => True
        ],
    ]);

    $cmb->add_group_field($pratos, [
        'name' => 'Nome',
        'id' => 'nome',
        'type' => 'text',
    ]);

    $cmb->add_group_field($pratos, [
        'name' => 'Descrição',
        'id' => 'descricao',
        'type' => 'text',
    ]);

    $cmb->add_group_field($pratos, [
        'name' => 'Preço',
        'id' => 'preco',
        'type' => 'text',
    ]);

    $pratos2 = $cmb->add_field([
        'name' => 'Pratos 2',
        'id' => 'pratos2',
        'type' => 'group',
        'repeatable' => True,
        'options' =>[
            'group_title' => 'Prato {#}',
            'add_button' => 'Adicionar Prato',
            'sortable' => True
        ],
    ]);

    $cmb->add_group_field($pratos2, [
        'name' => 'Nome',
        'id' => 'nome',
        'type' => 'text',
    ]);

    $cmb->add_group_field($pratos2, [
        'name' => 'Descrição',
        'id' => 'descricao',
        'type' => 'text',
    ]);

    $cmb->add_group_field($pratos2, [
        'name' => 'Preço',
        'id' => 'preco',
        'type' => 'text',
    ]);
}

#Sobre
add_action('cmb2_admin_init', 'cmb2_fields_sobre');
function cmb2_fields_sobre()
{
    $cmb = new_cmb2_box([
        'id' => 'sobre_box',
        'title' => 'Sobre',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-sobre.php',
        ],
    ]);

    $cmb->add_field([
        'name' => 'Foto Rest',
        'id' => 'foto_rest',
        'type' => 'file',
        'option' => [
            'url' => False,
        ],
    ]);

    #Parte história
    $cmb->add_field([
        'name' => 'Titulo história',
        'id' => 'title_historia',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'Texto história',
        'id' => 'text_historia',
        'type' => 'textarea',
    ]);

    #Parte visão
    $cmb->add_field([
        'name' => 'Titulo visão',
        'id' => 'title_visao',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'Texto visão',
        'id' => 'text_visao',
        'type' => 'textarea',
    ]);

    #Parte Valores
    $cmb->add_field([
        'name' => 'Titulo valores',
        'id' => 'title_valores',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'Texto valores',
        'id' => 'text_valores',
        'type' => 'textarea',
    ]);
}

#Contatos
add_action('cmb2_admin_init', 'cmb2_fields_contato');
function cmb2_fields_contato()
{
    $cmb = new_cmb2_box([
        'id' => 'contato_box',
        'title' => 'Contato',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-contato.php',
        ],
    ]);

    $cmb->add_field([
        'name' => 'Endereço',
        'id' => 'endereco',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'Telefone',
        'id' => 'telefone',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'Mapa Rest',
        'id' => 'mapa_rest',
        'type' => 'file',
        'option' => [
            'url' => False,
        ],
    ]);

    $cmb->add_field([
        'name' => 'Link maps',
        'id' => 'link_maps',
        'type' => 'text_url',
    ]);
}

#Informação do contato
add_action('cmb2_admin_init', 'cmb2_fields_infos');
function cmb2_fields_infos()
{
    $cmb = new_cmb2_box([
        'id' => 'info_box',
        'title' => 'Informações Rest',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-contato.php',
        ],
    ]);

    $infos = $cmb->add_field([
        'name' => 'Informações',
        'id' => 'info',
        'type' => 'group',
        'repeatable' => True,
        'options' =>[
            'group_title' => 'Informação {#}',
            'add_button' => 'Adicionar Informação',
            'sortable' => True
        ],
    ]);

    $cmb->add_group_field($infos, [
        'name' => 'Titulo',
        'id' => 'title',
        'type' => 'text',
    ]);

    $cmb->add_group_field($infos, [
        'name' => 'Texto 1',
        'id' => 'text1',
        'type' => 'text',
    ]);
    $cmb->add_group_field($infos, [
        'name' => 'Texto 2',
        'id' => 'text2',
        'type' => 'text',
    ]);

    $cmb->add_group_field($infos, [
        'name' => 'Texto 3',
        'id' => 'text3',
        'type' => 'text',
    ]);
}

#SEO
add_action('cmb2_admin_init', 'cmb2_fields_seo');
function cmb2_fields_SEO()
{
    $cmb = new_cmb2_box([
        'id' => 'seo_box',
        'title' => 'SEO',
        'object_types' => ['page', 'posts'],
    ]);

    $cmb->add_field([
        'name' => 'Titulo SEO',
        'id' => 'title_seo',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'Descrição SEO',
        'id' => 'description_seo',
        'type' => 'textarea_small',
    ]);
}

?>
