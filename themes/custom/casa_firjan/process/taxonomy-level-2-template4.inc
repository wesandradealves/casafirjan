<?php

use Drupal\gm5_interface\Plugin\File\GM5File;
use Drupal\gm5_interface\Plugin\Util\GM5Util;
use Drupal\gm5_interface\Plugin\Views\GM5Views;

function array_sort($array, $on, $order=SORT_ASC)
{
      $new_array = array();
      $sortable_array = array();
  
      if (count($array) > 0) {
          foreach ($array as $k => $v) {
              if (is_array($v)) {
                  foreach ($v as $k2 => $v2) {
                      if ($k2 == $on) {
                          $sortable_array[$k] = $v2;
                      }
                  }
              } else {
                  $sortable_array[$k] = $v;
              }
          }
  
          switch ($order) {
              case SORT_ASC:
                  asort($sortable_array);
              break;
              case SORT_DESC:
                  arsort($sortable_array);
              break;
          }
  
          foreach ($sortable_array as $k => $v) {
              $new_array[$k] = $array[$k];
          }
      }
  
      return $new_array;
  }
  
//Pré processamento da home
function casa_firjan_preprocess_page__taxonomy_level_2_template4(&$variables)
{
  $variables['customPage'] = array();
  systemPaths($variables);
  
 
    
  $termObj = \Drupal::request()->attributes->get('taxonomy_term');
  if ($termObj) {
    $term = $termObj->toArray();
    $categoriasNids = array();

    $categoria = $termObj->parent->entity->toArray();

    casa_firjan_process_breadcrumb($variables,$term['tid'][0]['value']);

    //$categoriasNids[] = $categoria['tid'][0]['value'];
    $categoriasNids[] = $term['tid'][0]['value'];


    $variables['customPage']['term']['categoria']['label'] = $categoria['name'][0]['value'];
    $variables['customPage']['term']['categoria']['url'] = $categoria['path'][0]['alias'];

    $params = \Drupal::request()->query->all();

    //Filtros options
    $options = new StdClass;
    $filtrosOptionsCat = GM5Views::getViewArg('taxonomia', 'filtro_cursos', $options);
    $filtrosOptionsTurno = GM5Views::getViewArg('taxonomia', 'filtro_turnos', $options);

    // Categorias
    foreach($filtrosOptionsCat['items'] as $termOption){
      $termOption = $termOption->_entity->toArray();
      $option = array();
      $option['label'] = $termOption['name'][0]['value'];
      $option['tid'] = $termOption['tid'][0]['value'];
      $option['selected'] = isset($params['categoria']) && $params['categoria'] == $termOption['tid'][0]['value'] ? ' selected' : '';

      $variables['customPage']['filtros']['categorias']['itens'][] = $option;
    }
    
    // Turnos
    foreach($filtrosOptionsTurno['items'] as $termOption){
      $termOption = $termOption->_entity->toArray();
      $option = array();
      $option['label'] = $termOption['name'][0]['value'];
      $option['tid'] = $termOption['tid'][0]['value'];
      $option['selected'] = isset($params['turno']) && $params['turno'] == $termOption['tid'][0]['value'] ? ' selected' : '';

      $variables['customPage']['filtros']['turnos']['itens'][] = $option;
    }
    
    // Status
    $variables['customPage']['filtros']['status']['itens'][] = array('label'=>'Cursos abertos', 'value'=>'1', 'selected'=>isset($params['status']) && $params['status'] == '1' ? ' selected' : '');
    $variables['customPage']['filtros']['status']['itens'][] = array('label'=>'Cursos fechados', 'value'=>'0', 'selected'=>isset($params['status']) && $params['status'] == '0' ? ' selected' : '');
    
    $current_path = \Drupal::service('path.current')->getPath();
    $result = \Drupal::service('path_alias.manager')->getAliasByPath($current_path);
    $variables['customPage']['filtros']['action'] = $result;


    //Cursos
    $cursosLista = array();
    $options = new StdClass;
    $options->args = array();
    $options->pager = array('autoPager' => TRUE);
    $viewcursos = GM5Views::getViewArg('cursos','lista',$options);

// var_dump($viewcursos['items']);die;
    $cursosPassados = array();
    $cursosFuturos  = array();
    $cursos = array();
    function date_compare($a, $b)
      {
          $t1 = strtotime($a['date']);
          $t2 = strtotime($b['date']);
          return $t1 - $t2;
      } 
    foreach($viewcursos['items'] as $k => $curso){
      $cursoObj = $curso->_entity;
      $curso = $curso->_entity->toArray();

      $dataTime = strtotime($curso['field_data_da_aula'][0]['value']);

      $cursoItem = array();
      $cursoItem['titulo'] = $curso['title'][0]['value'];
      $cursoItem['status'] = $curso['field_status'][0]['value'] == '1' ? TRUE : FALSE;
      $cursoItem['categoria'] = isset($cursoObj->field_categoria_curso->entity) && !empty($cursoObj->field_categoria_curso->entity) ? $cursoObj->field_categoria_curso->entity->toArray()['name'][0]['value'] : '';
      $cursoItem['cargaHoraria'] = $curso['field_carga_horaria'][0]['value'];
      $cursoItem['dia'] = date('d',$dataTime);
      $cursoItem['mes'] = GM5Util::mesBr(date('m',$dataTime));
      $cursoItem['mesInt'] = date('m',$dataTime);
      $cursoItem['anoInt'] = date('y',$dataTime);
      $cursoItem['url'] = GM5Util::getAlias('/node/'.$curso['nid'][0]['value']);
      $cursoItem['date'] = $curso['field_data_da_aula'][0]['value'];
      $cursoItem['loja'] = $curso['field_loja'][0]['value'];
      if(strtotime(date('d-m-Y',$dataTime)) > strtotime(date('d-m-Y')) && $curso['field_status'][0]['value'] == '1'){
        $cursosFuturos[] = $cursoItem;
      } else {
        $cursosPassados[] = $cursoItem;
      }
      $cursos[] = $cursoItem;
    }
    
    usort($cursosPassados, 'date_compare');
    usort($cursosFuturos, 'date_compare');

    $arrayCursos = array_merge($cursosFuturos, array_reverse($cursosPassados));
    
    $variables['customPage']['conteudo']['cursos']['itens'] = $arrayCursos;

    //Bloco vídeos
    $nidsParaFiltrar = array();
    casa_firjan_process_destaque($variables,$nidsParaFiltrar,$categoriasNids);

    $current_path = \Drupal::service('path.current')->getPath();
    $variables['customPage']['urlAjax'] = \Drupal::service('path_alias.manager')->getAliasByPath($current_path);
    $variables['customPage']['conteudo']['noticias']['paginacao'] = $viewcursos['pager'];
    $variables['customPage']['term']['titulo'] = $term['name'][0]['value'];
    $variables['customPage']['term']['descricao'] = isset($term['field_texto'][0]['value']) && !empty($term['field_texto'][0]['value']) ? nl2br($term['field_texto'][0]['value']) : '';
    $variables['customPage']['term']['subDescricao'] = isset($term['field_sub_texto'][0]['value']) && !empty($term['field_sub_texto'][0]['value']) ? nl2br($term['field_sub_texto'][0]['value']) : '';
 
  }


  systemPaths($variables);
}
