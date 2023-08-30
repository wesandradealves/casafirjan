<?php

use Drupal\gm5_interface\Plugin\File\GM5File;


//Pré processamento da home
function casa_firjan_preprocess_page__taxonomy_level_1(&$variables)
{
  $variables['customPage'] = array();
  systemPaths($variables);

  $term = \Drupal::request()->attributes->get('taxonomy_term');
  if ($term) {
    $bundle = $term->bundle();
    $term = $term->toArray();
    $categoriasNids[] = $term['tid'][0]['value'];

    $childrens = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->loadTree($term['vid'][0]['target_id'], $term['tid'][0]['value'], 1, TRUE);

    if($childrens){
      $variables['customPage']['subprogramas'] = array();

      foreach($childrens as $child) {
        $child = $child->toArray();
        $categoriasNids[] = $child['tid'][0]['value'];
        //print_r($child); die;

        $subprogramaTemp = array();
        
        $subprogramaTemp['titulo'] = $child['name'][0]['value'];
        $subprogramaTemp['texto'] = isset($child['field_texto'][0]['value']) && !empty($child['field_texto'][0]['value']) ? nl2br($child['field_texto'][0]['value']) : '';
        $subprogramaTemp['url'] = isset($child['field_link_externo'][0]['uri']) && !empty($child['field_link_externo'][0]['uri']) ? $child['field_link_externo'][0]['uri'] : $child['path'][0]['alias'];
        $subprogramaTemp['target'] = isset($child['field_link_externo'][0]['uri']) && !empty($child['field_link_externo'][0]['uri']) ? 'target="_blank"' : '';

        if(isset($child['field_imagem'][0]['target_id']) && !empty($child['field_imagem'][0]['target_id'])){
          $imagem = GM5File::renderImage($child['field_imagem'][0]['target_id'],'640x450');
        } else {
          $imagem = $variables['customPage']['system']['staticPath'].'img/def_640x450.jpg';
        }
        $subprogramaTemp['imagem'] = $imagem;

        $variables['customPage']['subprogramas'][] = $subprogramaTemp;
      }
    }
    
    $variables['customPage']['term']['bundle'] = $bundle;
    $variables['customPage']['term']['titulo'] = $term['name'][0]['value'];
    $variables['customPage']['term']['tid'] = $term['tid'][0]['value'];
    $variables['customPage']['term']['descricao'] = isset($term['field_descricao'][0]['value']) && !empty($term['field_descricao'][0]['value']) ? trim(strip_tags(nl2br($term['field_descricao'][0]['value']))) : '';
    
    $nidsParaFiltrar = array();
    if($bundle == 'landing_page'){
      casa_firjan_process_destaque_tags($variables,$nidsParaFiltrar,$categoriasNids);
      casa_firjan_process_leia_mais_tags($variables,$nidsParaFiltrar,$categoriasNids);
    } else {
      casa_firjan_process_destaque($variables,$nidsParaFiltrar,$categoriasNids);
      casa_firjan_process_leia_mais($variables,$nidsParaFiltrar,$categoriasNids);
    }
    
  }


  systemPaths($variables);
}
