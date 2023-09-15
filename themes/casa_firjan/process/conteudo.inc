<?php



use Drupal\gm5_interface\Plugin\File\GM5File;

use Drupal\gm5_interface\Plugin\Node\GM5Node;

use Drupal\gm5_interface\Plugin\Util\GM5Util;

use Symfony\Component\HttpFoundation\RedirectResponse;

use Drupal\taxonomy\Entity\Term;



//Pré processamento da home

function casa_firjan_preprocess_page__conteudo(&$variables)

{

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



    //Categoria

    if(isset($node['field_categoria'][0]['target_id']) && !empty($node['field_categoria'][0]['target_id'])){

      if($nodeObj->field_categoria->entity){

        $categoria = $nodeObj->field_categoria->entity->toArray();

        

        $variables['customPage']['conteudo']['categoria']['label'] = $categoria['name'][0]['value'];

        $variables['customPage']['conteudo']['categoria']['url'] = $categoria['path'][0]['alias'];

  

        casa_firjan_process_breadcrumb($variables,$node['field_categoria'][0]['target_id'],false);

      }

      



      

    }



    //Título

    $variables['customPage']['conteudo']['titulo'] = $node['title'][0]['value'];

    $variables['customPage']['conteudo']['chamada'] = $node['field_chamada'][0]['value'];

    $variables['customPage']['conteudo']['edit'] = GM5Util::getAlias('/node/' . $node['nid'][0]['value'] . '/edit' );



    //Autor e data

    $autor_data = array();

    if(isset($node['field_autor'][0]['target_id']) && !empty($node['field_autor'][0]['target_id'])){

      if($nodeObj->field_autor->entity) {

        $autor = $nodeObj->field_autor->entity->toArray();



        $autor_data[] = 'Por '.$autor['title'][0]['value'];

      }

    }

    $autor_data[] = ' em '.date('d/m/Y',$node['created']['0']['value']);



    $variables['customPage']['conteudo']['autor_data'] = implode(' | ',$autor_data);



    //Imagem ou vídeo

    $tipo = '';

    $midia = '';

    $variables['customPage']['conteudo']['midia']['legenda'] = isset($node['field_imagem'][0]['title']) && !empty($node['field_imagem'][0]['title']) ? $node['field_imagem'][0]['title'] : '';

    if(isset($node['field_imagem'][0]['target_id'])){

      $tipo = 'imagem';

      $midia = GM5File::renderImage($node['field_imagem'][0]['target_id'],'1087x508');

      $variables['customPage']['conteudo']['midia']['legenda'] = isset($node['field_imagem'][0]['title']) && !empty($node['field_imagem'][0]['title']) ? $node['field_imagem'][0]['title'] : '';

    } else if($node['field_video'][0]['value']){

      $tipo = 'video';

      $midia = GM5Util::getYoutubeId($node['field_video'][0]['value']);

      //print_r($node['field_video'][0]['value']); die;

    }

    $variables['customPage']['conteudo']['midia']['src'] = $midia;

    $variables['customPage']['conteudo']['midia']['tipo'] = $tipo;



    //Tópicos

    $variables['customPage']['conteudo']['topicos'] = array();



    if(isset($node['field_tags']) && !empty($node['field_tags'])){

      $tags = array();

      

      foreach ($node['field_tags'] as $tid) {

        $term = Term::load($tid['target_id']);

        if($term) {
          $term = $term->toArray();



          $tags[] = array(
  
            'name' => $term['name'][0]['value'],
  
            'path' => $term['path'][0]['alias']
  
          );
        }

      }



      $variables['customPage']['conteudo']['tags'] = $tags;

    }



    if(isset($node['field_topicos']) && !empty($node['field_topicos'])){

      $topicos = array();

      $fieldTopicos = $nodeObj->get('field_topicos');

      foreach ($fieldTopicos->referencedEntities() as $topico) {

        $topico = $topico->toArray();

        $topicos[] = $topico['name'][0]['value'];

      }

      $variables['customPage']['conteudo']['topicos'] = $topicos;

    }



    $nidsParaFiltrar = [$node['nid'][0]['value']];

    $categoriasNids = [$node['field_categoria'][0]['target_id']];



    casa_firjan_process_destaque($variables,$nidsParaFiltrar,$categoriasNids);



    //Texto

    $variables['customPage']['conteudo']['texto'] = $node['field_texto'][0]['value'];



  }

  systemPaths($variables);

}

