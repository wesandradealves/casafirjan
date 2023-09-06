<?php

use Drupal\gm5_interface\Plugin\File\GM5File;
use Drupal\gm5_interface\Plugin\Node\GM5Node;
use Drupal\gm5_interface\Plugin\Util\GM5Util;
use Symfony\Component\HttpFoundation\RedirectResponse;


//Pré processamento da home
function casa_firjan_preprocess_page__curso(&$variables)
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

    $dataTime = strtotime($node['field_data_da_aula'][0]['value']);

    $lojas = array();
    // $lojas['iel']['url'] = 'loja-online-firjan-iel.myshopify.com';
    // $lojas['iel']['token'] = 'a3d8dafe16e3e226834e638cfe6212f5';
    $lojas['senai']['url'] = 'cursos-senai-ead.myshopify.com';
    $lojas['senai']['token'] = 'f5fadc5eb4a8d830e579ca5c6a52d4c7';

    $variables['customPage']['conteudo']['titulo'] = $node['title'][0]['value'];
    $variables['customPage']['conteudo']['categoria'] = $nodeObj->field_categoria_curso->entity->toArray()['name'][0]['value'];
    $variables['customPage']['conteudo']['cargaHoraria'] = $node['field_carga_horaria'][0]['value'];
    $variables['customPage']['conteudo']['texto'] = $node['field_texto'][0]['value'];
    $variables['customPage']['conteudo']['preco'] = !empty($node['field_preco'][0]['value']) && $node['field_preco'][0]['value'] > 0 ? 'R$ '.number_format($node['field_preco'][0]['value'], 2, ',', '.') : 'Gratuito';
    $variables['customPage']['conteudo']['precoFB'] = !empty($node['field_preco'][0]['value']) && $node['field_preco'][0]['value'] > 0 ? number_format($node['field_preco'][0]['value'], 2, '.', '.') : '0';
    $variables['customPage']['conteudo']['linkCompra'] = $node['field_link_para_compra'][0]['value'];
    $variables['customPage']['conteudo']['data'] = date('d/m',$dataTime);
    $variables['customPage']['conteudo']['dia'] = date('d',$dataTime);
    $variables['customPage']['conteudo']['mes'] = GM5Util::mesBr(date('m',$dataTime));
    $variables['customPage']['conteudo']['url'] = GM5Util::getAlias('/node/'.$node['nid'][0]['value']);
    $variables['customPage']['conteudo']['idProduct'] = $node['field_id_shopify'][0]['value'];
    $variables['customPage']['conteudo']['loja'] = $lojas[$node['field_loja'][0]['value']];
    $variables['customPage']['conteudo']['nomeLoja'] = $node['field_loja'][0]['value'];
    $variables['customPage']['conteudo']['status'] = $node['field_status'][0]['value'] == '1' ? TRUE : FALSE;
    $variables['customPage']['conteudo']['edit'] = GM5Util::getAlias('/node/' . $node['nid'][0]['value'] . '/edit' );


  }


  systemPaths($variables);
}
