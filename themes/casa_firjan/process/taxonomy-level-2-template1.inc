<?php

use Drupal\gm5_interface\Plugin\File\GM5File;


//Pré processamento da home
function casa_firjan_preprocess_page__taxonomy_level_2_template1(&$variables)
{
  $variables['customPage'] = array();
  systemPaths($variables);

  $termObj = \Drupal::request()->attributes->get('taxonomy_term');
  if ($termObj) {
    $term = $termObj->toArray();
    $categoriasNids = array();

    casa_firjan_process_breadcrumb($variables,$term['tid'][0]['value']);

    $categoria = $termObj->parent->entity->toArray();

    //$categoriasNids[] = $categoria['tid'][0]['value'];
    $categoriasNids[] = $term['tid'][0]['value'];

    $variables['customPage']['term']['categoria']['label'] = $categoria['name'][0]['value'];
    $variables['customPage']['term']['categoria']['url'] = $categoria['path'][0]['alias'];

    $variables['customPage']['term']['titulo'] = $term['name'][0]['value'];
    $variables['customPage']['term']['tid'] = $term['tid'][0]['value'];
    $variables['customPage']['term']['descricao'] = isset($term['field_descricao'][0]['value']) && !empty($term['field_descricao'][0]['value']) ? trim(strip_tags(nl2br($term['field_descricao'][0]['value']))) : '';
    

    $childrens = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->loadTree($term['vid'][0]['target_id'], $term['tid'][0]['value'], 3, TRUE);


    //Bloco vídeos
    $nidsParaFiltrar = array();
    casa_firjan_process_destaque($variables,$nidsParaFiltrar,$categoriasNids);
    casa_firjan_process_videos($variables, $nidsParaFiltrar,$categoriasNids);
    casa_firjan_process_leia_mais($variables, $nidsParaFiltrar,$categoriasNids);

    $variables['customPage']['term']['titulo'] = $term['name'][0]['value'];
    $variables['customPage']['term']['descricao'] = isset($term['field_texto'][0]['value']) && !empty($term['field_texto'][0]['value']) ? nl2br($term['field_texto'][0]['value']) : '';
  }


  systemPaths($variables);
}
