<?php

use Drupal\gm5_interface\Plugin\File\GM5File;
use Drupal\gm5_interface\Plugin\Node\GM5Node;
use Drupal\gm5_interface\Plugin\Node\GM5Webform;
use Drupal\gm5_interface\Plugin\Util\GM5String;
use Drupal\gm5_interface\Plugin\Util\GM5Util;
use Drupal\gm5_interface\Plugin\Views\GM5Views;
use Symfony\Component\HttpFoundation\RedirectResponse;



//Pré processamento da home
function casa_firjan_preprocess_page__fale_conosco(&$variables)
{
  $variables['customPage'] = array();

  $nodeObj = \Drupal::request()->attributes->get('node');
  if($nodeObj){
    $node = $nodeObj->toArray();

    //Formulário de contato
    $method = \Drupal::request()->getMethod();
    $params = \Drupal::request()->request->all();

    $variables['customPage']['queryString'] = \Drupal::request()->query->all();

    //print_r($variables['customPage']['queryString']);


    $current_path = \Drupal::service('path.current')->getPath();
    $result = \Drupal::service('path_alias.manager')->getAliasByPath($current_path);

    $estutrutraContato = GM5Webform::getStucture('fale_conosco');
    $variables['customPage']['faleConosco']['form'] = $estutrutraContato;
    $variables['customPage']['faleConosco']['form']['action'] = $result.'#fale-conosco';

    if(!empty($params) && $params['form_name'] == 'fale_conosco' && $method == 'POST'){
      $response = GM5Webform::processForm($params);
      if(!empty($response['type']) && $response['type'] == 'error'){
        foreach($response['message'] as $field => $message){
          $variables['customPage']['faleConosco']['form']['fields'][$field]['errorMessage'] = $message;
        }
      } elseif (!empty($response['type']) && $response['type'] == 'sucess'){
        $response = new RedirectResponse($result.'?contato=sucess#fale-conosco');
        $response->send();
      }
    }

    $variables['customPage']['conteudo']['texto'] = isset($node['field_texto'][0]['value']) && !empty($node['field_texto'][0]['value']) ? $node['field_texto'][0]['value'] : '';
    $variables['customPage']['faleConosco']['params'] = $_GET;
  }


  systemPaths($variables);
}
