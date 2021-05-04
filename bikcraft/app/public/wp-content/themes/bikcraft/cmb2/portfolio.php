<?php

add_action('cmb2_admin_init', 'cmb2_fields_portfolio');

function cmb2_fields_portfolio() {
  $cmb = new_cmb2_box([
    'id' => 'portfolio_box',
    'title' => 'Portfólio',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-portfolio.php',
    ],
  ]);

  $quote_portfolio = $cmb->add_field([
    'name' => 'Quote Portfólio',
    'id' => 'quote_portfolio',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'sortable' => true,
      'add_button' => 'Adicionar Quote',
      'remove_button' => 'Remover Quote',
    ],
  ]);

  $cmb->add_group_field($quote_portfolio, [
    'name' => 'Quote',
    'id' => 'quote',
    'type' => 'textarea_small',
  ]);

  $cmb->add_group_field($quote_portfolio, [
    'name' => 'Nome do Cliente',
    'id' => 'nome_quote',
    'type' => 'text',
  ]);

  $item_portfolio = $cmb->add_field([
    'name' => 'Item Portfólio',
    'id' => 'item_portfolio',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'sortable' => true,
      'add_button' => 'Adicionar Portfólio',
      'remove_button' => 'Remover Portfólio',
    ],
  ]);

  $cmb->add_group_field($item_portfolio, [
    'name' => 'Portfolio Imagem Descricao1',
    'id' => 'portfolio_imagem_descricao1',
    'type' => 'text',
  ]);

  $cmb->add_group_field($item_portfolio, [
    'name' => 'Portfolio Imagem1',
    'id' => 'portfolio_imagem1',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb->add_group_field($item_portfolio, [
    'name' => 'Portfolio Imagem Descricao2',
    'id' => 'portfolio_imagem_descricao2',
    'type' => 'text',
  ]);

  $cmb->add_group_field($item_portfolio, [
    'name' => 'Portfolio Imagem2',
    'id' => 'portfolio_imagem2',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb->add_group_field($item_portfolio, [
    'name' => 'Portfolio Imagem3',
    'id' => 'portfolio_imagem3',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb->add_group_field($item_portfolio, [
    'name' => 'Portfolio Imagem Descricao3',
    'id' => 'portfolio_imagem_descricao3',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Chamada Portfólio',
    'id' => 'chamada_portfolio',
    'type' => 'text',
  ]);
}

?>