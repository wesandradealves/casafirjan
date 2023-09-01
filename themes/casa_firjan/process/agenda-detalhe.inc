<?php

use Drupal\gm5_interface\Plugin\File\GM5File;
use Drupal\gm5_interface\Plugin\Node\GM5Node;
use Drupal\gm5_interface\Plugin\Util\GM5Util;
use Drupal\gm5_interface\Plugin\Views\GM5Views;
use Drupal\gm5_interface\Plugin\Util\GM5String;


//Pré processamento da home
function casa_firjan_preprocess_page__agenda_detalhe(&$variables)
{
  $variables['customPage'] = array();

  $nodeObj = \Drupal::request()->attributes->get('node');
  if($nodeObj){
    $node = $nodeObj->toArray();

    $cursoItem = array();
    $variables['customPage']['conteudo']['titulo'] = $node['title'][0]['value'];
    $variables['customPage']['conteudo']['categoria'] = $nodeObj->field_categoria_agenda->entity->toArray()['name'][0]['value'];
    $variables['customPage']['conteudo']['texto'] = $node['field_descricao'][0]['value'];

    $timezone = date_default_timezone_get();

    $formatter = \Drupal::service('date.formatter');
    $dates = $nodeObj->get('field_hora_de_inicio')->getValue();    
    $date_start = $dates[0]['value'];
    $time = strtotime($date_start.' UTC');
    $start_time = $formatter->format($time, 'custom', 'G:ia', $timezone);  
    
    $variables['customPage']['conteudo']['start_time'] = str_replace(['00'], '', str_replace([':'], 'h', str_replace(['am', 'pm'], '', $start_time)));

    $variables['customPage']['conteudo']['horario'] = $node['field_horario_livre'][0]['value'];

    $variables['customPage']['conteudo']['preco'] = $node['field_preco_livre'][0]['value'];
    $variables['customPage']['conteudo']['formUrl'] = isset($node['field_link_do_formulario'][0]['uri']) ? $node['field_link_do_formulario'][0]['uri'] : '';
    $variables['customPage']['conteudo']['codigoga'] = isset($node['field_campanha_ga'][0]['value']) ? $node['field_campanha_ga'][0]['value'] : '';
    $variables['customPage']['conteudo']['status'] = $node['status'][0]['value'];
    $variables['customPage']['conteudo']['edit'] = GM5Util::getAlias('/node/' . $node['nid'][0]['value'] . '/edit' );

    $variables['customPage']['conteudo']['textoLinkForm'] = isset($node['field_texto_do_link_2'][0]['value']) ? $node['field_texto_do_link_2'][0]['value'] : 'Inscreva-se';
    $variables['customPage']['conteudo']['textoLinkIngresso'] = isset($node['field_texto_do_link'][0]['value']) ? $node['field_texto_do_link'][0]['value'] : 'Comprar Ingresso';

//die($node['field_campanha_ga'][0]['value']);
    if(isset($node['field_comprar_ingresso'][0]['value'])){
      $variables['customPage']['conteudo']['ingresso'] = $node['field_comprar_ingresso'][0]['value'];
    }
    $variables['customPage']['conteudo']['imagem']['src'] = isset($node['field_imagem'][0]['target_id']) ? GM5File::renderImage($node['field_imagem'][0]['target_id'],'875x457') : '';
    $variables['customPage']['conteudo']['imagem']['legenda'] = isset($node['field_imagem'][0]['title']) && !empty($node['field_imagem'][0]['title']) ? $node['field_imagem'][0]['title'] : '';

    $data = new \DateTime($node['field_hora_de_inicio'][0]['value']);
    $la_time = new \DateTimeZone(date_default_timezone_get());
    $data->setTimezone($la_time);

    $variables['customPage']['conteudo']['data'] = $data->format('d').' de '.GM5Util::mesBr($data->format('m')).' de '.$data->format('Y');

    //Eventos
    $options = new StdClass;
    $options->args = array($node['nid'][0]['value']);

    $options->pager = array('autoPager' => TRUE);
    $vieweventos = GM5Views::getViewArg('agenda','outros',$options);


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
      
      $data = new \DateTime($evento['field_hora_de_inicio'][0]['value']);
      $la_time = new \DateTimeZone(date_default_timezone_get());
      $data->setTimezone($la_time);

      $eventoItem['data'] = $data->format('d').' de '.GM5Util::mesBr($data->format('m')).' de '.$data->format('Y');
      $eventoItem['hora'] = $data->format('H') - 3; // Solução para diferenciação no horário
      $eventoItem['minutos'] = $data->format('i');
      $variables['customPage']['conteudo']['eventos']['itens'][$eventoItem['data']][] = $eventoItem;
    }


  }

  systemPaths($variables);
  
}
