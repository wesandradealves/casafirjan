<?php

use Drupal\gm5_interface\Plugin\File\GM5File;
use Drupal\gm5_interface\Plugin\Util\GM5Util;
use Drupal\gm5_interface\Plugin\Views\GM5Views;


//Pré processamento da home
function casa_firjan_preprocess_page__para_lideres(&$variables)
{
  $variables['customPage'] = array();
  systemPaths($variables);

  //$termObj = \Drupal::request()->attributes->get('taxonomy_term');

    //$term = $termObj->toArray();
    $categoriasNids = array();
    //$categoriasNids[] = $term['tid'][0]['value'];

    //Bloco vídeos
    $nidsParaFiltrar = array();
    $display = '4itens';

    $options = array();

  $nodeObj = \Drupal::request()->attributes->get('node');
  $node = $nodeObj->toArray();

  $variables['customPage']['titulo'] = $node['title'][0]['value'];
  $variables['customPage']['texto'] = $node['field_texto'][0]['value'];


    $options->pager = array('autoPager' => TRUE);
    $viewprodutos = GM5Views::getViewArg('para_lideres', 'lista', $options);
    foreach ($viewprodutos['items'] as $k => $produto) {
      $produtoObj = $produto->_entity;
      $produto = $produto->_entity->toArray();

      $tag = $produtoObj->field_tag->entity->toArray();

      $nidsParaFiltrar[] = $produto['nid'][0]['value'];

      $produtoItem = array();
      $produtoItem['titulo'] = str_replace('_', '_<br>', $produto['title']['0']['value']);
      $produtoItem['imagem'] = GM5File::renderImage($produto['field_thumb'][0]['target_id'], '450x450');
      $produtoItem['url'] = GM5Util::getAlias('/node/' . $produto['nid'][0]['value'], 'relative');

      $produtoItem['tag']['titulo'] = $tag['name'][0]['value'];
      $produtoItem['tag']['background'] = $tag['field_cor_do_background'][0]['color'];
      $produtoItem['tag']['fontColor'] = $tag['field_cor_do_texto'][0]['color'];

      $variables['customPage']['produtosLista'][] = $produtoItem;

      //print_r($produtoItem); die;
    }

  $variables['customPage']['produtos']['grid'] = 'col-md-6 col-lg-3';
  $variables['customPage']['produtos']['mainClass'] = 'itens';

    //casa_firjan_process_produtos($variables,array($term['tid'][0]['value']),$display);
    //casa_firjan_process_destaque($variables,$nidsParaFiltrar,$categoriasNids);

    $variables['customPage']['term']['titulo'] = $term['name'][0]['value'];
    $variables['customPage']['term']['descricao'] = isset($term['field_texto'][0]['value']) && !empty($term['field_texto'][0]['value']) ? nl2br($term['field_texto'][0]['value']) : '';


  systemPaths($variables);

}
