<?php

use Drupal\gm5_interface\Plugin\File\GM5File;
use Drupal\gm5_interface\Plugin\Node\GM5Node;
use Drupal\gm5_interface\Plugin\Node\GM5Webform;
use Drupal\gm5_interface\Plugin\Util\GM5String;
use Drupal\gm5_interface\Plugin\Util\GM5Util;
use Drupal\gm5_interface\Plugin\Views\GM5Views;
use Symfony\Component\HttpFoundation\RedirectResponse;


//Pré processamento da home
function casa_firjan_preprocess_page__sobre_nos(&$variables)
{
  $variables['customPage'] = array();

  systemPaths($variables);

  $nodeObj = \Drupal::request()->attributes->get('node');
  if($nodeObj){
    casa_firjan_process_pagina_basica($variables,$nodeObj);
  }

  $tree = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->loadTree('categorias', 0, 1, TRUE);

  foreach ($tree as $term) {
    $term = $term->toArray();

    $programaTemp = array();

    $programaTemp['titulo'] = $term['name'][0]['value'];
    $programaTemp['url'] = $term['path'][0]['alias'];
    
    if(isset($term['field_imagem'][0]['target_id']) && !empty($term['field_imagem'][0]['target_id'])){
      $imagem = GM5File::renderImage($term['field_imagem'][0]['target_id'],'450x450');
    } else {
      $imagem = $variables['customPage']['system']['staticPath'].'img/def_640x450.jpg';
    }
    $programaTemp['imagem'] = $imagem;

    $variables['customPage']['programas'][] = $programaTemp;
  }
}
