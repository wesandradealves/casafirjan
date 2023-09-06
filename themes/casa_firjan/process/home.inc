<?php

use Drupal\gm5_interface\Plugin\File\GM5File;
use Drupal\gm5_interface\Plugin\Node\GM5Node;
use Drupal\gm5_interface\Plugin\Util\GM5String;
use Drupal\gm5_interface\Plugin\Util\GM5Util;
use Drupal\gm5_interface\Plugin\Views\GM5Views;
use Drupal\field\Entity\FieldConfig;


//Pré processamento da home
function casa_firjan_preprocess_page__home(&$variables)
{
  $variables['customPage'] = array();
  systemPaths($variables);

  $nodeObj = \Drupal::request()->attributes->get('node');
  $nidsParaFiltrar = array();


  //banners
  $options = new StdClass;
  $categorias = !empty($categorias) ? implode('+', $categorias) : 'all';
  $nidsParaRemover = !empty($nidsParaFiltrar) ? implode('+', $nidsParaFiltrar) : 'all';

  $options->args = array($nidsParaRemover, $categorias);

  $options->pager = array('autoPager' => TRUE);
  $viewbanners = GM5Views::getViewArg('banner_home', 'lista', $options);


  foreach ($viewbanners['items'] as $idx => $banner) {
    $style = '1920x400';

    $ndObj = $banner->_entity;
    $nd = $banner->_entity->toArray();

    $bannerItem = array();

    //print_r($nd);

    $bannerItem['titulo'] = $nd['title'][0]['value'];
    $bannerItem['texto'] = isset($nd['field_chamada'][0]['value']) && !empty($nd['field_chamada'][0]['value']) ? $nd['field_chamada'][0]['value'] : '';
    $bannerItem['url'] = GM5Util::getAlias('/node/' . $nd['nid'][0]['value'], 'relative');
    $bannerItem['midia']['src'] = GM5File::renderImage($nd['field_imagem'][0]['target_id'], $style);
    $bannerItem['link'] = GM5Util::uriToUrl($nd['field_link'][0]['uri']);
    $bannerItem['link']['label'] = $nd['field_link'][0]['title'];
    $bannerItem['link']['target'] = $bannerItem['link']['type'] == 'internal' ? '_self' : '_blank';

    $variables['customPage']['bannersHome'][] = $bannerItem;
  }

  if ($nodeObj) {
    $node = $nodeObj->toArray();

    $variables['customPage']['destaques'] = array();
    foreach ($nodeObj->field_destaques as $idx => $destaque) {

      if ($idx == 0) {
        $style = '651x333';
      } else {
        $style = '190x190';
      }

      $ndObj = $destaque->entity;
      if($destaque->entity){
        
        
        $nd = $destaque->entity->toArray();
        
        $nidsParaFiltrar[] = $nd['nid'][0]['value'];
  
        $destaqueItem = array();
  
        $destaqueItem['titulo'] = $nd['title'][0]['value'];
        $destaqueItem['url'] = GM5Util::getAlias('/node/' . $nd['nid'][0]['value'], 'relative');
        $destaqueItem['chamada'] = isset($nd['field_chamada']) ? $nd['field_chamada'][0]['value'] : '';
  
        //Imagem ou vídeo
        $tipo = '';
        $midia = '';
        if(isset($nd['field_tipo_de_midia']) && !empty($nd['field_tipo_de_midia']))
        {
          if($nd['field_tipo_de_midia'][0]['value'] == 'video' && isset($nd['field_video'][0]['value']))
          {
            $tipo = 'video';
            $midia = GM5Util::getYoutubeImage(GM5Util::getYoutubeId($nd['field_video'][0]['value']));
            $destaqueItem['midia']['url'] = $nd['field_video'][0]['value'];
          }
          else if($nd['field_tipo_de_midia'][0]['value'] == 'imagem' && isset($nd['field_imagem'][0]['target_id']))
          {
            $tipo = 'imagem';
            $midia = GM5File::renderImage($nd['field_imagem'][0]['target_id'], $style);
          }
        }
        else if(!isset($nd['field_tipo_de_midia']) && isset($nd['field_imagem']) && !empty($nd['field_imagem']))
        {
          // Com imagem de destaque
          $tipo = 'imagem';
          $midia = GM5File::renderImage($nd['field_imagem'][0]['target_id'], $style);
          
        }
        else if(isset($nd['field_thumb']) && !empty($nd['field_thumb']))
        {
          //Com thumb
          $tipo = 'imagem';
          $midia = GM5File::renderImage($nd['field_thumb'][0]['target_id'], $style);
        }
  
       
  
        //Autor e data
        $autor_data = array();
        if (isset($ndObj->field_autor->entity)) {
          $autor = $ndObj->field_autor->entity->toArray();
  
          $autor_data[] = 'Por ' . $autor['title'][0]['value'];
        }
        $autor_data[] = ' em '.date('d/m/Y', $nd['created']['0']['value']);
        $destaqueItem['autor_data'] = implode(' ', $autor_data);
        if(isset($ndObj->field_categoria->entity))
        {
          //Categoria
          $categoria = $ndObj->field_categoria->entity->toArray();
          $destaqueItem['categoria']['label'] = $categoria['name'][0]['value'];
          $destaqueItem['categoria']['url'] = $categoria['path'][0]['alias'];
          
          //Mídia
          $destaqueItem['midia']['src'] = $midia;
          $destaqueItem['midia']['tipo'] = $tipo;
          
          $variables['customPage']['destaques'][] = $destaqueItem; 
        }
        else if ($nd['type'][0]['target_id'] == 'noticia')
        {      
          //Categoria
          $destaqueItem['categoria']['label'] = 'Notícia';
          $destaqueItem['categoria']['url'] = '/noticias';
          
          //Mídia
          if( isset($nd['field_thumb'][0]['target_id']) ) {
            $midia = GM5File::renderImage($nd['field_thumb'][0]['target_id'], $style);
          } else if (!empty($nd['field_imagem'])){
            $midia = GM5File::renderImage($nd['field_imagem'][0]['target_id'], $style);
          } else {
            $field_info = FieldConfig::loadByName('node', 'noticia', 'field_thumb');
            $image_uuid = $field_info->getSetting('default_image')['uuid'];
            $image = Drupal::service('entity.repository')->loadEntityByUuid('file', $image_uuid);
            $target_id = $image->id();
            $midia = GM5File::renderImage($target_id, $style);
          }
      
          $destaqueItem['midia']['src'] = $midia;
          $destaqueItem['midia']['tipo'] = 'imagem';
          
          $variables['customPage']['destaques'][] = $destaqueItem; 
        }
        else if ($nd['type'][0]['target_id'] == 'agenda')
        {
          //Categoria
          $destaqueItem['categoria']['label'] = 'Evento';
          $destaqueItem['categoria']['url'] = '/agenda';
          
          //Mídia
          $destaqueItem['midia']['src'] = !empty($nd['field_imagem']) ? GM5File::renderImage($nd['field_imagem'][0]['target_id'], $style) : \Drupal::request()->getSchemeAndHttpHost().'/themes/casa_firjan/statics/img/thumb-padrao.jpg';
          $destaqueItem['midia']['tipo'] = 'imagem';
          
          $variables['customPage']['destaques'][] = $destaqueItem; 
        }
         else if ($nd['type'][0]['target_id'] == 'curso')
        {
          //Categoria
          $destaqueItem['categoria']['label'] = 'Cursos';
          $destaqueItem['categoria']['url'] = '/lab-educacao/cursos';
          
          //Mídia
          $destaqueItem['midia']['src'] = !empty($nd['field_imagem']) ? GM5File::renderImage($nd['field_imagem'][0]['target_id'], $style) : \Drupal::request()->getSchemeAndHttpHost().'/themes/casa_firjan/statics/img/thumb-padrao.jpg';
          $destaqueItem['midia']['tipo'] = 'imagem';
          
          $variables['customPage']['destaques'][] = $destaqueItem; 
        }
        else
        {
          $destaqueItem['midia']['src'] = !empty($nd['field_imagem']) ? GM5File::renderImage($nd['field_imagem'][0]['target_id'], $style) : \Drupal::request()->getSchemeAndHttpHost().'/themes/casa_firjan/statics/img/thumb-padrao.jpg';
          $destaqueItem['midia']['tipo'] = 'imagem';
          $variables['customPage']['destaques'][] = $destaqueItem;
        }
      
      }
    }
    
    //var_dump($variables['customPage']['destaques']);die;

    //Bloco vídeos
    casa_firjan_process_videos($variables, $nidsParaFiltrar);
    casa_firjan_process_destaque_mini($variables, $nidsParaFiltrar);

    //Agenda
    //Filtros options
    // $options = new StdClass;
    // $filtrosOptions = GM5Views::getViewArg('taxonomia', 'filtro_agenda', $options);

    // foreach($filtrosOptions['items'] as $termOption){
    //   casa_firjan_process_agenda($variables,$termOption->_entity);
    // }
    
    //Eventos
    $options = new StdClass;
    $options->args = array('all');

    $options->pager = array('autoPager' => TRUE);
    $vieweventos = GM5Views::getViewArg('agenda','filtros',$options);
    $groups = array();

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
      $eventoItem['target'] = isset($evento['field_link_externo'][0]['uri']) && !empty($evento['field_link_externo'][0]['uri']) ? 'target="_blank"' : '';
      $eventoItem['categoria'] = isset($eventoObj->field_categoria_agenda->entity) && !empty($eventoObj->field_categoria_agenda->entity) ? $eventoObj->field_categoria_agenda->entity->toArray()['name'][0]['value'] : 'Curso';
      $eventoItem['categoriaAlias'] = GM5String::transliteration($eventoItem['categoria']);
      
      if($eventoObj->field_ciclo_tematico->entity){
        $eventoItem['cicloLabel'] = $eventoObj->field_ciclo_tematico->entity->toArray()['name'][0]['value'];
        $eventoItem['cicloColor'] = $eventoObj->field_ciclo_tematico->entity->toArray()['field_cor_do_ciclo'][0]['color'];
      }
      
      $groups[$eventoItem['categoriaAlias']] = $eventoItem['categoria'];
      
      $data = new \DateTime($evento['field_hora_de_inicio'][0]['value'],new DateTimeZone("UTC"));
      $la_time = new \DateTimeZone(date_default_timezone_get());
      $data->setTimezone($la_time);

      $eventoItem['data'] = $data->format('d').' de '.GM5Util::mesBr($data->format('m')).' de '.$data->format('Y');
      $eventoItem['hora'] = $data->format('H');
      $eventoItem['minutos'] = $data->format('i');
      $variables['customPage']['conteudo']['eventos']['itens'][$eventoItem['data']][] = $eventoItem;
    }
    
    //print_r($variables['customPage']['conteudo']['eventos']['itens']); die;

    $variables['customPage']['conteudo']['eventos']['grupos'] = $groups;
    $variables['customPage']['conteudo']['eventos']['paginacao'] = isset($vieweventos['pager']) && !empty($vieweventos['pager']) ? $vieweventos['pager'] : array();

//print_r($variables['customPage']['conteudo']['eventos']); die;

//print_r($variables['customPage']['destaquesMini']); die;


  }


}
