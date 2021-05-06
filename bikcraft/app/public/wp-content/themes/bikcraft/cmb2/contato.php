<?php
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
    'name' => 'Telefone',
    'id' => 'telefone',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Email',
    'id' => 'email',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Endereço 1',
    'id' => 'endereco1',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Endereço 2',
    'id' => 'endereco2',
    'type' => 'text',
  ]);

  $redes_sociais = $cmb->add_field([
    'name' => 'Redes Sociais',
    'id' => 'redes_sociais',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'sortable' => true,
      'add_button' => 'Adicionar Rede',
      'remove_button' => 'Remover Rede',
    ],
  ]);

  $cmb->add_group_field($redes_sociais, [
    'name' => 'Link Social',
    'id' => 'link_social',
    'type' => 'text_url',
  ]);

  $cmb->add_group_field($redes_sociais, [
    'name' => 'Imagem Social',
    'id' => 'imagem_social',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb->add_group_field($redes_sociais, [
    'name' => 'Nome da Rede Social',
    'id' => 'nome_social',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Link Mapa',
    'id' => 'link_mapa',
    'type' => 'text_url',
  ]);

  $cmb->add_field([
    'name' => 'Imagem Mapa',
    'id' => 'imagem_mapa',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb->add_field([
    'name' => 'Texto Mapa',
    'id' => 'texto_mapa',
    'type' => 'text',
  ]);
}

add_action('cmb2_admin_init', 'cmb2_fields_footer');
function cmb2_fields_footer()
{
  $cmb = new_cmb2_box([
    'id' => 'footer_box',
    'title' => 'Footer',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-contato.php',
    ],
  ]);

  $cmb->add_field([
    'name' => 'Background Footer',
    'id' => 'background_footer',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb->add_field([
    'name' => 'Frase Footer',
    'id' => 'frase_footer',
    'type' => 'textarea_small',
  ]);

  $cmb->add_field([
    'name' => 'Autor Footer',
    'id' => 'autor_footer',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Resumo Historia',
    'id' => 'resumo_historia',
    'type' => 'textarea_small',
  ]);
}

?>
