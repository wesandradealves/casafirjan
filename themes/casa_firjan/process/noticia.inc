<?php

use Drupal\gm5_interface\Plugin\File\GM5File;
use Drupal\gm5_interface\Plugin\Node\GM5Node;
use Drupal\gm5_interface\Plugin\Util\GM5Util;
use Symfony\Component\HttpFoundation\RedirectResponse;

//Pré processamento da home
function casa_firjan_preprocess_page__noticia(&$variables)
{
  $variables['customPage'] = array();
    
  $nodeObj = \Drupal::request()->attributes->get('node');
  if($nodeObj){
    $node = $nodeObj->toArray();
    
    // Retorna 403 se for despublicado
    if( $node['status'][0]['value'] == 0){
      $current_user_roles = \Drupal::currentUser()->getRoles();
      if (!in_array('administrator', $current_user_roles)) {
        $response = new RedirectResponse('/system/403');
        $response->send();
      }
    }
    
    //Título
    $variables['customPage']['conteudo']['titulo'] = $node['title'][0]['value'];
    $variables['customPage']['conteudo']['chamada'] = $node['field_chamada'][0]['value'];
    $variables['customPage']['conteudo']['edit'] = GM5Util::getAlias('/node/' . $node['nid'][0]['value'] . '/edit' );

    //Autor e data
    $autor_data = array();
    // if(isset($node['field_autor'][0]['target_id']) && !empty($node['field_autor'][0]['target_id'])){
    //   $autor = $nodeObj->field_autor->entity->toArray();

    //   $autor_data[] = 'Por '.$autor['title'][0]['value'];
    // }
    $autor_data[] = date('d/m/Y',$node['created']['0']['value']);

    $variables['customPage']['conteudo']['autor_data'] = implode(' | ',$autor_data);

    //Imagem ou vídeo
    if(isset($node['field_imagem'][0]['target_id'])){
      $tipo = 'imagem';
      $midia = GM5File::renderImage($node['field_imagem'][0]['target_id'],'1087x508');
      $variables['customPage']['conteudo']['midia']['src'] = $midia;
      $variables['customPage']['conteudo']['midia']['legenda'] = isset($node['field_imagem'][0]['title']) && !empty($node['field_imagem'][0]['title']) ? $node['field_imagem'][0]['title'] : '';
    }

    //Texto
    $variables['customPage']['conteudo']['texto'] = $node['field_descricao'][0]['value'];

  }


  systemPaths($variables);
}
