<?php

use Drupal\gm5_interface\Plugin\File\GM5File;
use Drupal\gm5_interface\Plugin\Node\GM5Node;
use Drupal\gm5_interface\Plugin\Util\GM5Util;


//Pré processamento da home
function casa_firjan_preprocess_page__para_lideres_detalhe(&$variables)
{
  $variables['customPage'] = array();

  $nodeObj = \Drupal::request()->attributes->get('node');
  if($nodeObj){
    $node = $nodeObj->toArray();

    $tag = $nodeObj->field_tag->entity->toArray();

    $variables['customPage']['conteudo']['breadcrumb'][0]['label'] = $tag['name'][0]['value'];
    $variables['customPage']['conteudo']['breadcrumb'][0]['url'] = '/para-lideres';
    $variables['customPage']['conteudo']['breadcrumb'][1]['label'] = $node['title'][0]['value'];
    $variables['customPage']['conteudo']['breadcrumb'][1]['url'] = GM5Util::getAlias('/node/' . $node['nid'][0]['value'], 'relative');

    //Tópicos
    $variables['customPage']['conteudo']['topicos'] = array();
    if(isset($node['field_topico']) && !empty($node['field_topico'])){
      $topicos = array();

      foreach($node['field_topico'] as $topico){
        $topicos[] = $topico['value'];
      }

      $variables['customPage']['conteudo']['topicos'] = $topicos;
    }

    //print_r($variables['customPage']['conteudo']['topicos']);  die;

  }


  systemPaths($variables);
}
