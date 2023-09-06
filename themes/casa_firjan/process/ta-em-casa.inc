<?php

use Drupal\gm5_interface\Plugin\File\GM5File;
use Drupal\gm5_interface\Plugin\Node\GM5Node;
use Drupal\gm5_interface\Plugin\Node\GM5Webform;
use Drupal\gm5_interface\Plugin\Util\GM5String;
use Drupal\gm5_interface\Plugin\Util\GM5Util;
use Drupal\gm5_interface\Plugin\Views\GM5Views;
use Symfony\Component\HttpFoundation\RedirectResponse;


//Pré processamento da home
function casa_firjan_preprocess_page__ta_em_casa(&$variables)
{
  $variables['customPage'] = array();

  $nodeObj = \Drupal::request()->attributes->get('node');
  if($nodeObj){
    //Formulário de contato
    $method = \Drupal::request()->getMethod();
    $params = \Drupal::request()->request->all();

    $variables['customPage']['queryString'] = \Drupal::request()->query->all();


    $current_path = \Drupal::service('path.current')->getPath();
    $result = \Drupal::service('path_alias.manager')->getAliasByPath($current_path);

    $estutrutraContato = GM5Webform::getStucture('cadastro');
    $variables['customPage']['cadastro']['form'] = $estutrutraContato;
    $variables['customPage']['cadastro']['form']['action'] = $result.'#cadastro';

    if(!empty($params) && $params['form_name'] == 'cadastro' && $method == 'POST'){
      /*
      if(isset($params['dependente']) && !empty($params['dependente'])){

        $dependenteTxt = '';
        foreach($params['dependente'] as $k => $dependente){
          $dependenteTxt .= "DEPENDENTE ".($k+1)." \n";
          isset($dependente['nome']) && !empty($dependente['nome']) ? $dependenteTxt .= "Nome: ".$dependente['nome']."\n" : '';
          isset($dependente['nome']) && !empty($dependente['cpf']) ? $dependenteTxt .= "CPF: ".$dependente['cpf']."\n" : '';
          isset($dependente['nome']) && !empty($dependente['genero']) ? $dependenteTxt .= "Gênero: ".$dependente['genero']."\n" : '';
          isset($dependente['nome']) && !empty($dependente['nome']) ? $dependenteTxt .= "Grau de parentesco: ".$dependente['grau']."\n" : '';
          $dependenteTxt .= "\n\n";
        }

        $params['dependentes'] = $dependenteTxt;
      }
      */

      $response = GM5Webform::processForm($params);

      if(!empty($response['type']) && $response['type'] == 'error'){
        $variables['customPage']['cadastro']['form']['message'] = $response['type'];
        foreach($response['message'] as $field => $message){
          $variables['customPage']['cadastro']['form']['fields'][$field]['errorMessage'] = $message;
        }
      } elseif (!empty($response['type']) && $response['type'] == 'sucess'){
        $response = new RedirectResponse($result.'?cadastro=sucess#cadastro');
        $response->send();
      }
    }

    casa_firjan_process_pagina_basica($variables,$nodeObj);

  }


  systemPaths($variables);
}
