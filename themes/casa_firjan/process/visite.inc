<?php

use Drupal\gm5_interface\Plugin\File\GM5File;
use Drupal\gm5_interface\Plugin\Node\GM5Node;
use Drupal\gm5_interface\Plugin\Node\GM5Webform;
use Drupal\gm5_interface\Plugin\Util\GM5String;
use Drupal\gm5_interface\Plugin\Util\GM5Util;
use Drupal\gm5_interface\Plugin\Views\GM5Views;
use Symfony\Component\HttpFoundation\RedirectResponse;


//Pré processamento da home
function casa_firjan_preprocess_page__visite(&$variables)
{
  $variables['customPage'] = array();

  $nodeObj = \Drupal::request()->attributes->get('node');
  if($nodeObj){
    $node = $nodeObj->toArray();
    $variables['customPage']['conteudo']['titulo'] = $node['title'][0]['value'];
    $variables['customPage']['conteudo']['aba1']['embed'] = $node['field_embed_do_maps'][0]['value'];
    $variables['customPage']['conteudo']['aba1']['texto'] = $node['field_texto_como_chegar'][0]['value'];
    $variables['customPage']['conteudo']['aba1']['habilitar'] = $node['field_habilitar_como_chegar'][0]['value'];
    $variables['customPage']['conteudo']['aba1']['label'] = $node['field_label_1'][0]['value'];

    $variables['customPage']['conteudo']['aba2']['texto'] = $node['field_texto_agende_visita'][0]['value'];
    $variables['customPage']['conteudo']['aba2']['texto2'] = $node['field_texto_agende_visita_2'][0]['value'];
    $variables['customPage']['conteudo']['aba2']['habilitar'] = $node['field_habilitar_agende_visita'][0]['value'];
    $variables['customPage']['conteudo']['aba2']['label'] = $node['field_label_2'][0]['value'];

    $variables['customPage']['conteudo']['aba3']['texto'] = $node['field_texto_horarios_ingressos'][0]['value'];
    $variables['customPage']['conteudo']['aba3']['habilitar'] = $node['field_habilitar_horarios_ingress'][0]['value'];
    $variables['customPage']['conteudo']['aba3']['label'] = $node['field_label_3'][0]['value'];

    $variables['customPage']['conteudo']['aba4']['texto'] = $node['field_texto_politica_visitacao'][0]['value'];
    $variables['customPage']['conteudo']['aba4']['habilitar'] = $node['field_habilitar_politica_visitac'][0]['value'];
    $variables['customPage']['conteudo']['aba4']['label'] = $node['field_label_4'][0]['value'];

    $variables['customPage']['conteudo']['aba5']['texto'] = $node['field_texto_servicos'][0]['value'];
    $variables['customPage']['conteudo']['aba5']['habilitar'] = $node['field_habilitar_servicos'][0]['value'];
    $variables['customPage']['conteudo']['aba5']['label'] = $node['field_label_5'][0]['value'];

    $variables['customPage']['conteudo']['aba6']['texto'] = $node['field_texto_acessibilidade'][0]['value'];
    $variables['customPage']['conteudo']['aba6']['habilitar'] = $node['field_habilitar_acessibilidade'][0]['value'];
    $variables['customPage']['conteudo']['aba6']['label'] = $node['field_label_6'][0]['value'];



    // var_dump(count($node['field_opcoes_de_agendamento']));die;
    if(count($node['field_opcoes_de_agendamento']) == 1){
      $variables['customPage']['conteudo']['aba2']['opcoes']['col'] = 'col-sm-12';
    } else if(count($node['field_opcoes_de_agendamento']) == 2){
      $variables['customPage']['conteudo']['aba2']['opcoes']['col'] = 'col-sm-12 col-md-6';
    } else if(count($node['field_opcoes_de_agendamento']) == 3){
      $variables['customPage']['conteudo']['aba2']['opcoes']['col'] = 'col-sm-12 col-md-6 col-lg-4';
    } else if(count($node['field_opcoes_de_agendamento']) >= 4 ){
      $variables['customPage']['conteudo']['aba2']['opcoes']['col'] = 'col-sm-12 col-md-6 col-lg-6 col-xl-3';
    }
    
    foreach ($node['field_opcoes_de_agendamento'] as $opcoes) {
      $variables['customPage']['conteudo']['aba2']['opcoes']['values'][] = $opcoes['value'];
    }
  }


  systemPaths($variables);
}
