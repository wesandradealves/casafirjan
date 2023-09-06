<?php

use Drupal\gm5_interface\Plugin\File\GM5File;
use Drupal\gm5_interface\Plugin\Node\GM5Node;
use Drupal\gm5_interface\Plugin\Util\GM5String;
use Drupal\gm5_interface\Plugin\Util\GM5Util;
use Drupal\gm5_interface\Plugin\Views\GM5Views;


//Pré processamento da home
function casa_firjan_preprocess_page__noticias(&$variables)
{
  $variables['customPage'] = array();

  $nodeObj = \Drupal::request()->attributes->get('node');

  // $nids = \Drupal::entityQuery('node')->condition('type','noticia')->execute();
  // $nodes =  \Drupal\node\Entity\Node::loadMultiple($nids);  
  
  if($nodeObj){
    
    $node = $nodeObj->toArray();

    //Notícias
    $options = new StdClass;
    $options->args = array();

    $options->pager = array('autoPager' => TRUE);
    $viewNoticias = GM5Views::getViewArg('noticias','lista',$options);

    foreach($viewNoticias['items'] as $k => $noticia){
      $noticia = $noticia->_entity->toArray();

      $noticiaItem = array();
      $noticiaItem['titulo'] = $noticia['title'][0]['value'];
      $noticiaItem['texto'] = $noticia['field_chamada'][0]['value'];
      $noticiaItem['data'] = date('d/m/Y',$noticia['created']['0']['value']);
      $noticiaItem['imagem']['src'] = GM5File::renderImage($noticia['field_imagem'][0]['target_id'],'380x220');
      $noticiaItem['url'] = GM5Util::getAlias('/node/'.$noticia['nid'][0]['value']);
      $noticiaItem['edit'] = GM5Util::getAlias('/node/'.$noticia['nid'][0]['value'].'/edit');
      
      
      $variables['customPage']['conteudo']['noticias']['itens'][] = $noticiaItem;

    }

    //Notícias destaque
    $options = new StdClass;
    $options->args = array();

    $options->pager = array('autoPager' => TRUE);
    $viewdestaquessDestaques = GM5Views::getViewArg('noticias','destaques',$options);


    foreach($viewdestaquessDestaques['items'] as $k => $destaques){
      $destaquesObj = $destaques->_entity;
      $destaques = $destaques->_entity->toArray();

      $destaquesItem = array();
      $destaquesItem['index'] = $k + 1;
      $destaquesItem['titulo'] = $destaques['title'][0]['value'];

      //Autor e data
      $autor_data = array();
      // if(isset($destaques['field_autor'][0]['target_id']) && !empty($destaques['field_autor'][0]['target_id'])){
      //   $autor = $destaquesObj->field_autor->entity->toArray();

      //   $autor_data[] = 'Por '.$autor['title'][0]['value'];
      // }

      $destaquesItem['autor_data'] = implode(' | ',$autor_data);

      $destaquesItem['url'] = GM5Util::getAlias('/node/'.$destaques['nid'][0]['value']);
      $variables['customPage']['conteudo']['destaques']['itens'][] = $destaquesItem;
    }


    $variables['customPage']['conteudo']['noticias']['paginacao'] = $viewNoticias['pager'];
  }


  systemPaths($variables);
}
