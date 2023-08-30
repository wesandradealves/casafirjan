<?php

use Drupal\gm5_interface\Plugin\File\GM5File;
use Drupal\gm5_interface\Plugin\Util\GM5Util;
use Drupal\gm5_interface\Plugin\Views\GM5Views;
use Drupal\paragraphs\Entity\Paragraph;

  
//Pré processamento da home
function casa_firjan_preprocess_page__taxonomy_level_2_template5(&$variables)
{

  $variables['customPage'] = array();
  
  if (\Drupal::request()->attributes->get('taxonomy_term')) {
    $term = \Drupal::request()->attributes->get('taxonomy_term')->toArray();
    

    casa_firjan_process_breadcrumb($variables,$term['tid'][0]['value']);
    
    foreach ( $term['field_links'] as $key => $element ) {
      $pObj   = Paragraph::load($element['target_id']);
      $pArray = $pObj->toArray();
      
      $variables['customPage']['term']['links'][$key]['titulo'] = $pArray['field_titulo'][0]['value'];
      $variables['customPage']['term']['links'][$key]['texto'] = $pArray['field_texto'][0]['value'];
      $variables['customPage']['term']['links'][$key]['link']['url'] = $pObj->get('field_link')->first()->getUrl()->toString();
      $variables['customPage']['term']['links'][$key]['link']['cta'] = !empty($pArray['field_link'][0]['title']) ? $pArray['field_link'][0]['title'] : 'Conheça mais';
      $variables['customPage']['term']['links'][$key]['link']['target'] = substr($pObj->get('field_link')->first()->getUrl()->toString(), 0, 4) == 'http' ? 'target="_blank"' : '';
      $variables['customPage']['term']['links'][$key]['imagem'] = GM5File::renderImage($pArray['field_imagem'][0]['target_id'],'640x450');
    }
   
    
    $variables['customPage']['term']['titulo'] = $term['name'][0]['value'];
    $variables['customPage']['term']['descricao'] = isset($term['field_texto'][0]['value']) && !empty($term['field_texto'][0]['value']) ? nl2br($term['field_texto'][0]['value']) : '';
    $variables['customPage']['term']['subDescricao'] = isset($term['field_sub_texto'][0]['value']) && !empty($term['field_sub_texto'][0]['value']) ? nl2br($term['field_sub_texto'][0]['value']) : '';
 
    
    
  }


  systemPaths($variables);
}
