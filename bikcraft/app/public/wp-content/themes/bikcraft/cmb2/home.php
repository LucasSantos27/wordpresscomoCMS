<?php

add_action('cmb2_admin_init', 'cmb2_fields_home');
function cmb2_fields_home() {
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
    'name' => 'Titulo Introdução',
    'id' => 'titulo_introducao',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Quote Introdução',
    'id' => 'quote_introducao',
    'type' => 'textarea_small',
  ]);

  $cmb->add_field([
    'name' => 'Citação Introdução',
    'id' => 'citacao_introducao',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Background Home',
    'id' => 'background_home',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb->add_field([
    'name' => 'Chamada Produtos',
    'id' => 'chamada_produtos',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Chamada Portfólio',
    'id' => 'chamada_portifolio',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Chamada Sobre',
    'id' => 'chamada_sobre',
    'type' => 'text',
  ]);

}
