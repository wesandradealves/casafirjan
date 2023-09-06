<?php

use Drupal\gm5_interface\Plugin\File\GM5File;


//Pré processamento da home
function casa_firjan_preprocess_page__taxonomy_level_1_template3(&$variables)
{
  $variables['customPage'] = array();
  systemPaths($variables);

  $termObj = \Drupal::request()->attributes->get('taxonomy_term');
  if ($termObj) {

    $term = $termObj->toArray();
    $categoriasNids = array();
    $categoriasNids[] = $term['tid'][0]['value'];

    //Bloco vídeos
    $nidsParaFiltrar = array();
    $display = '4itens';
    casa_firjan_process_produtos($variables,array($term['tid'][0]['value']),$display);
    casa_firjan_process_destaque($variables,$nidsParaFiltrar,$categoriasNids);
    casa_firjan_process_leia_mais($variables, $nidsParaFiltrar,$categoriasNids);


    $variables['customPage']['term']['titulo'] = $term['name'][0]['value'];
    $variables['customPage']['term']['descricao'] = isset($term['field_texto'][0]['value']) && !empty($term['field_texto'][0]['value']) ? nl2br($term['field_texto'][0]['value']) : '';
  }

  systemPaths($variables);
}
