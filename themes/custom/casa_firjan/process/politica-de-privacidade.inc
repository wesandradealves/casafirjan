<?php

use Drupal\gm5_interface\Plugin\File\GM5File;
use Drupal\gm5_interface\Plugin\Node\GM5Node;
use Drupal\gm5_interface\Plugin\Node\GM5Webform;
use Drupal\gm5_interface\Plugin\Util\GM5String;
use Drupal\gm5_interface\Plugin\Util\GM5Util;
use Drupal\gm5_interface\Plugin\Views\GM5Views;
use Symfony\Component\HttpFoundation\RedirectResponse;


//Pré processamento da home
function casa_firjan_preprocess_page__politica_de_privacidade(&$variables)
{
  $variables['customPage'] = array();

  systemPaths($variables);

  $nodeObj = \Drupal::request()->attributes->get('node');
  if($nodeObj){
    casa_firjan_process_pagina_basica($variables,$nodeObj);
  }
}
