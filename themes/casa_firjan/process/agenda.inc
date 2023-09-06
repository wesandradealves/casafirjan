<?php

use Drupal\gm5_interface\Plugin\File\GM5File;
use Drupal\gm5_interface\Plugin\Node\GM5Node;
use Drupal\gm5_interface\Plugin\Util\GM5String;
use Drupal\gm5_interface\Plugin\Util\GM5Util;
use Drupal\gm5_interface\Plugin\Views\GM5Views;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Drupal\gm5_interface\Plugin\Node\GM5Webform;
use Drupal\field\Entity\FieldConfig;
use Drupal\taxonomy\Entity\Term;
use Drupal\file\Entity\File;
use Drupal\views\Views;
use Drupal\node\Entity\Node;
use \Drupal\block\Entity\Block;
use Drupal\Core\Menu\MenuTreeParameters;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Menu\MenuLinkTreeInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Cocur\Slugify\Slugify;


//Pré processamento da home
function casa_firjan_preprocess_page__agenda(&$variables)
{
  // Nova Agenda

  $nids = \Drupal::entityQuery('node')->condition('type','agenda')->execute();
  $eventos =  array_reverse(\Drupal\node\Entity\Node::loadMultiple($nids));

  $variables['eventosByTax'] = [];

  $variables['eventos'] = [];
 
  foreach($eventos as $k => $evento) {
    $eventoItem = array();
 
    if($evento->get('field_ciclo_tematico')->entity){
      $eventoItem['cicloLabel'] = $evento->get('field_ciclo_tematico')->entity->toArray()['name'][0]['value'];
      $eventoItem['cicloColor'] = $evento->get('field_ciclo_tematico')->entity->toArray()['field_cor_do_ciclo'][0]['color'];
    }
    
    $timezone = date_default_timezone_get();

    $formatter = \Drupal::service('date.formatter');
    $dates = $evento->get('field_hora_de_inicio')->getValue();

    $date_start = $dates[0]['value'];
    $time = strtotime($date_start.' UTC');
    $start_time = $formatter->format($time, 'custom', 'G:ia', $timezone);    

    $la_time = new \DateTimeZone(date_default_timezone_get());

    $timestamp = strtotime($evento->get('field_hora_de_inicio')->value);
    $data = new DateTime();
    $data->setTimestamp($timestamp);
    $data->setTimezone($la_time); 
    $today = new DateTime();
    $today->setTimezone($la_time); 
    $datetime = $evento->get('field_hora_de_inicio')->value;

    if($today <= $data) {
      if($evento->get('field_categoria_agenda')->entity){
        $eventoItem['field_categoria_agenda'] = $evento->get('field_categoria_agenda')->entity->toArray()['name'][0]['value'];

        if(!array_key_exists($eventoItem['field_categoria_agenda'], $variables['eventosByTax'])) {
          $variables['eventosByTax'][$eventoItem['field_categoria_agenda']] = [];
        }      
      }    
    }

    $evento = $evento->toArray();
 
    $eventoItem['type'] = $evento['type'][0]['target_id'];
    $eventoItem['isActive'] = $today < $data;
    $eventoItem['titulo'] = $evento['title'][0]['value'];
    $eventoItem['texto'] = isset($evento['field_chamada'][0]['value']) && !empty($evento['field_chamada'][0]['value']) ? $evento['field_chamada'][0]['value'] : substr(strip_tags($evento['field_texto'][0]['value']), 0, 200).'...';
    $eventoItem['duracao'] = isset($evento['field_duracao'][0]['value']) && !empty($evento['field_duracao'][0]['value']) ? $evento['field_duracao'][0]['value'] : '';
    $eventoItem['carga'] = isset($evento['field_carga_horaria'][0]['value']) && !empty($evento['field_carga_horaria'][0]['value']) ? $evento['field_carga_horaria'][0]['value'] : '';
    $eventoItem['url'] = isset($evento['field_link_externo'][0]['uri']) && !empty($evento['field_link_externo'][0]['uri']) ? $evento['field_link_externo'][0]['uri'] : GM5Util::getAlias('/node/'.$evento['nid'][0]['value']);
    $eventoItem['target'] = isset($evento['field_link_externo'][0]['uri']) && !empty($evento['field_link_externo'][0]['uri']) ? 'target="_blank"' : '';
    $eventoItem['categoria'] = isset($eventoObj->field_categoria_agenda->entity) && !empty($eventoObj->field_categoria_agenda->entity) ? $eventoObj->field_categoria_agenda->entity->toArray()['name'][0]['value'] : 'Curso';
    $eventoItem['categoriaAlias'] = GM5String::transliteration($eventoItem['categoria']);
 
    $map = [
        "Sun" => "Domingo",
        "Mon" => "Segunda", 
        "Tue" => "Terça", 
        "Wed" => "Quarta", 
        "Thu" => "Quinta", 
        "Fri" => "Sexta", 
        "Sat" => "Sábado", 
    ]; 
 
    $eventoItem['Dia'] = $map[$data->format('D')];
    $eventoItem['Data'] = $data->format('d').' de '.GM5Util::mesBr($data->format('m')).' de '.$data->format('Y');
    $eventoItem['hora'] = $data->format('H');
    $eventoItem['minutos'] = $data->format('i');
    $eventoItem['dateTime'] = $datetime;
    $eventoItem['start_time'] = str_replace(['00'], '', str_replace([':'], 'h', str_replace(['am', 'pm'], '', $start_time)));

    ksort($variables['eventos']);

    if($today <= $data) {
      $variables['eventos'][] = $eventoItem;   
      if($eventoItem['field_categoria_agenda']){
        $variables['eventosByTax'][$eventoItem['field_categoria_agenda']][] = $eventoItem;  
      }          
    }

 
  }  

  // Antiga Agenda

  date_default_timezone_set('UTC');
  date_default_timezone_set('UTC');
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
    
    
    $params = \Drupal::request()->query->all();
    
    $ciclosValidos = array();
    $categoriasValidas = array();

    //lista datas
    $options = new StdClass;
    $dataLista = GM5Views::getViewArg('agenda', 'datas_disponiveis', $options);

    $datas = array();

    foreach($dataLista['items'] as $dataItem){
      $dataItem = $dataItem->_entity->toArray();
      
      //Ciclos válidos
      if(isset($dataItem['field_ciclo_tematico'][0]['target_id']) && !empty($dataItem['field_ciclo_tematico'][0]['target_id'])){
        
        if(!isset($ciclosValidos[$dataItem['field_ciclo_tematico'][0]['target_id']])){
          $ciclosValidos[$dataItem['field_ciclo_tematico'][0]['target_id']] = array();
        }
        
        if(isset($ciclosValidos[$dataItem['field_ciclo_tematico'][0]['target_id']]) && isset($dataItem['field_categoria_agenda'][0]['target_id']) && !empty($dataItem['field_categoria_agenda'][0]['target_id'])){
          $ciclosValidos[$dataItem['field_ciclo_tematico'][0]['target_id']][] = $dataItem['field_categoria_agenda'][0]['target_id'];
        }
      }
      
      //Ciclos válidos
      if(isset($dataItem['field_categoria_agenda'][0]['target_id']) && !empty($dataItem['field_categoria_agenda'][0]['target_id'])){
        
        if(!isset($categoriasValidas[$dataItem['field_categoria_agenda'][0]['target_id']])){
          $categoriasValidas[$dataItem['field_categoria_agenda'][0]['target_id']] = array();
        }
        
        if(isset($categoriasValidas[$dataItem['field_categoria_agenda'][0]['target_id']]) && isset($dataItem['field_ciclo_tematico'][0]['target_id']) && !empty($dataItem['field_ciclo_tematico'][0]['target_id'])){
          $categoriasValidas[$dataItem['field_categoria_agenda'][0]['target_id']][] = $dataItem['field_ciclo_tematico'][0]['target_id'];
        }
      }

      $data = new \DateTime($dataItem['field_hora_de_inicio'][0]['value']);
      $la_time = new \DateTimeZone(date_default_timezone_get());
      $data->setTimezone($la_time);
      $datas[$data->format('Y-m-d')] = $data->format('Y-m-d');
      
    }
    
    if(isset($params['ciclo']) && !empty($params['ciclo'])){
      $categoriasValidas = array();
      foreach($ciclosValidos as $cicloId => $cicloArray){
        if(in_array($cicloId, $params['ciclo'])){
          foreach($cicloArray as $catId){
            $categoriasValidas[$catId] = $catId;
          }
          
        }
      }
    }
    
    if(isset($params['categoria']) && !empty($params['categoria'])){
      foreach($params['categoria'] as $addCat){
        $categoriasValidas[$addCat] = $addCat;
      }
    }
    

    $variables['customPage']['filtros']['datas'] = implode("','",$datas);

    $variables['customPage']['filtros']['currentDay'] = '';
    if(isset($params['data_inicio']) && !empty($params['data_inicio'])){
      $objData = explode(' ',$params['data_inicio']);
      $variables['customPage']['filtros']['currentDay'] = $objData[0];
    }

    //Filtros options
    $options = new StdClass;
    $options->args = isset($params['ciclo']) && !empty($params['ciclo']) ? array(implode('+',$params['ciclo'])) : array('all');
    $filtrosOptions = GM5Views::getViewArg('taxonomia', 'filtro_agenda', $options);

    foreach($filtrosOptions['items'] as $termOption){
      $termOption = $termOption->_entity->toArray();
      $option = array();
      $option['label'] = $termOption['name'][0]['value'];
      $option['tid'] = $termOption['tid'][0]['value'];
      $option['checked'] = isset($params['categoria']) && in_array($termOption['tid'][0]['value'],$params['categoria']) ? ' checked' : '';

      if(isset($categoriasValidas[$termOption['tid'][0]['value']])){
        $variables['customPage']['filtros']['categorias']['itens'][$termOption['tid'][0]['value']] = $option;
      }
      
    }
  
    $options = new StdClass;
    $options->args = isset($params['categoria']) && !empty($params['categoria']) ? array(implode('+',$params['categoria'])) : array('all');
    $filtrosOptions = GM5Views::getViewArg('taxonomia', 'filtro_ciclo', $options);

    foreach($filtrosOptions['items'] as $termOption){
      $termOption = $termOption->_entity->toArray();
      $option = array();
      $option['label'] = $termOption['name'][0]['value'];
      $option['tid'] = $termOption['tid'][0]['value'];
      $option['color'] = $termOption['field_cor_do_ciclo'][0]['color'];
      $option['checked'] = isset($params['ciclo']) && in_array($termOption['tid'][0]['value'],$params['ciclo']) ? ' checked' : '';

      $variables['customPage']['filtros']['ciclos']['itens'][$termOption['tid'][0]['value']] = $option;
    }

    $current_path = \Drupal::service('path.current')->getPath();
    $result = \Drupal::service('path_alias.manager')->getAliasByPath($current_path);
    $variables['customPage']['filtros']['action'] = $result;
    $variables['customPage']['urlCurrent'] = $_SERVER['REQUEST_URI'];

    //Eventos
    $options = new StdClass;
    $options->args = array('all');

    $options->pager = array('autoPager' => TRUE);
    $vieweventos = GM5Views::getViewArg('agenda','filtros',$options);


    foreach($vieweventos['items'] as $k => $evento){
      $eventoObj = $evento->_entity;
      $evento = $evento->_entity->toArray();
      
      $eventoItem = array();
      $eventoItem['type'] = $evento['type'][0]['target_id'];
      $eventoItem['titulo'] = $evento['title'][0]['value'];
      $eventoItem['texto'] = isset($evento['field_chamada'][0]['value']) && !empty($evento['field_chamada'][0]['value']) ? $evento['field_chamada'][0]['value'] : substr(strip_tags($evento['field_texto'][0]['value']), 0, 200).'...';
      $eventoItem['duracao'] = isset($evento['field_duracao'][0]['value']) && !empty($evento['field_duracao'][0]['value']) ? $evento['field_duracao'][0]['value'] : '';
      $eventoItem['carga'] = isset($evento['field_carga_horaria'][0]['value']) && !empty($evento['field_carga_horaria'][0]['value']) ? $evento['field_carga_horaria'][0]['value'] : '';
      $eventoItem['url'] = isset($evento['field_link_externo'][0]['uri']) && !empty($evento['field_link_externo'][0]['uri']) ? $evento['field_link_externo'][0]['uri'] : GM5Util::getAlias('/node/'.$evento['nid'][0]['value']);
      $eventoItem['edit'] = GM5Util::getAlias('/node/'.$evento['nid'][0]['value'].'/edit');
      $eventoItem['target'] = isset($evento['field_link_externo'][0]['uri']) && !empty($evento['field_link_externo'][0]['uri']) ? 'target="_blank"' : '';
      $eventoItem['categoria'] = isset($eventoObj->field_categoria_agenda->entity) && !empty($eventoObj->field_categoria_agenda->entity) ? $eventoObj->field_categoria_agenda->entity->toArray()['name'][0]['value'] : 'Curso';
      $eventoItem['categoriaAlias'] = GM5String::transliteration($eventoItem['categoria']);
      
      if($eventoObj->field_ciclo_tematico->entity){
        $eventoItem['cicloLabel'] = $eventoObj->field_ciclo_tematico->entity->toArray()['name'][0]['value'];
        $eventoItem['cicloColor'] = $eventoObj->field_ciclo_tematico->entity->toArray()['field_cor_do_ciclo'][0]['color'];
      }
      
      $data = new \DateTime($evento['field_hora_de_inicio'][0]['value']);
      $la_time = new \DateTimeZone(date_default_timezone_get());
      $data->setTimezone($la_time);

      $eventoItem['data'] = $data->format('d').' de '.GM5Util::mesBr($data->format('m')).' de '.$data->format('Y');
      $eventoItem['hora'] = $data->format('H') - 3; // Solução para diferenciação no horário
      $eventoItem['minutos'] = $data->format('i');
      $variables['customPage']['conteudo']['eventos']['itens'][$eventoItem['data']][] = $eventoItem;
    }

  

    $variables['customPage']['conteudo']['eventos']['paginacao'] = isset($vieweventos['pager']) && !empty($vieweventos['pager']) ? $vieweventos['pager'] : array();
  }

  systemPaths($variables);
}
