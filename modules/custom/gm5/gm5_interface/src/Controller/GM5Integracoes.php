<?php
/**
 * @file
 * Contains \Drupal\hello_world\Controller\HelloWorldController.
 */

namespace Drupal\gm5_interface\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;
use Drupal\taxonomy\Entity\Term;
use Drupal\gm5_interface\Plugin\Shopify\GM5Shopify;
use \Drupal\Core\Config;
use Drupal\gm5_interface\Plugin\Views\GM5Views;


class GM5Integracoes extends ControllerBase
{
  public function despublicaAgenda()
  {
	//lista datas
	$options = new \StdClass;
	$dataLista = GM5Views::getViewArg('agenda', 'old', $options);

	$nids = [];
	foreach($dataLista['items'] as $dataItem){
	  $teste =  $dataItem->_entity->toArray();
	  $nids [] = $teste['nid'][0]['value'];
	  $node = $dataItem->_entity;
	  $node->setPublished(FALSE);
	  $node->save();
	  

	}
	if(!empty($nids)){
	  \Drupal::logger('despublica_agenda')->notice('Conteúdos despublicados: '.implode(', ',$nids));
	}
	print_r('Conteúdos despublicados: '.implode(', ',$nids)); die;
  }
  
  public function publicaAgenda()
  {
	//lista datas
	$options = new \StdClass;
	$dataLista = GM5Views::getViewArg('agenda', 'next', $options);

	$nids = [];
	foreach($dataLista['items'] as $dataItem){
	 
	  $node = $dataItem->_entity;
	  $nodeArray = $dataItem->_entity->toArray();
	//   var_dump($nodeArray);die;
	  $nids [] = $nodeArray['nid'][0]['value'];	
	  $node->setPublished(TRUE);
	  $node->save();
	  

	}
	if(!empty($nids)){
	  \Drupal::logger('publica_agenda')->notice('Conteúdos publicados: '.implode(', ',$nids));
	}
	print_r('Conteúdos publicados: '.implode(', ',$nids)); die;
  }

  public function updateCursos()
  {
		// pega as trilhas do Lumis e atualiza na agenda
		// $jsonTrilhas = file_get_contents('https://firjan.com.br/lumis/api/rest/FIRJAN.Corporativo.IEL.Consultoria.Trilhas/lumgetdata/lstEventoCorporativoPortalFirjan.json?lumReturnFields=*');
		// $dataTrilhas = json_decode($jsonTrilhas);
		// $trilhasToAgenda = $dataTrilhas->rows;
		// $this->processCursos($trilhasToAgenda, 'agenda', 'trilhas');		
		
		// pega os cursos de educação executiva do Lumis e atualiza na agenda
		// $jsonCursos = file_get_contents('https://firjan.com.br/lumis/api/rest/FIRJAN.Corporativo.Curso/lumgetdata/lstEventoCorporativoPortalFirjan.json?lumReturnFields=*');
		// $dataCursos = json_decode($jsonCursos);
		// $cursosToAgenda = $dataCursos->rows;
		// $this->processCursos($cursosToAgenda, 'agenda', 'curso');

		// pega os conteúdos siy do Lumis e atualiza na agenda
		// $jsonSiY = file_get_contents('https://firjan.com.br/lumis/api/rest/FIRJAN.Corporativo.IEL.SIY/lumgetdata/lstEventoCorporativoPortalFirjan.json?lumReturnFields=*');
		// $dataSiY = json_decode($jsonSiY);
		// $SiYToAgenda = $dataSiY->rows;
		// $this->processCursos($SiYToAgenda, 'agenda', 'siy');
		
		// pega os cursos do shopify
		$cursos = array_merge(GM5Shopify::getCursosSenai(), GM5Shopify::getCursosIEL());				
		$this->processCursos($cursos, 'curso');
		
		\Drupal::logger('update_cursos')->notice('Cursos atualizados.');
		die("Concluído!");
  }
  
  // Processa os cursos
  public function processCursos($cursos, $type, $cat = NULL)
  {
  	
		//Campo de ID no Drupal
		$fieldIdDrupal = $type == 'curso' ? 'field_id_shopify' : 'field_id_lumis';
		
		//Query Nodes Cursos/Agenda
		$ids = \Drupal::entityQuery('node')->condition('type', $type)->execute();
		$nodes = Node::loadMultiple($ids);
		
		//Array de Id Products
		$idsProductCurso = array();
		$idsProductDrupal = array();
		foreach($nodes as $no)
		{
		  if(!empty($no->get($fieldIdDrupal)->getValue()))
		  {
			$idsProductDrupal[] = $no->get($fieldIdDrupal)->getValue()[0]['value'];
		  }
		}
		
		// Atualiza e cria os cursos/agenda
		foreach($cursos as $curso)
		{
		  //Campo de ID no REST
		  $fieldIdCurso = $type == 'curso' ? $curso['product_id'] : $curso->contentId;
	   
		  //Cria Array de ids do curso usado mais abaixo
		  $idsProductCurso[] = $fieldIdCurso;
		  
		  // Atualiza o node existente
		  if(in_array($fieldIdCurso, $idsProductDrupal))
		  {
			
			$nid            = $this->nidProduct($fieldIdCurso, $type);
			$changeNode     = Node::load($nid)->get("changed")->getValue()[0]['value'];
			$changeCurso    = $type == 'curso' ? date('U', strtotime($curso['update'])) : date('U', strtotime($curso->lastModifiedDate->year.'-'.$curso->lastModifiedDate->month.'-'.$curso->lastModifiedDate->dayOfMonth.'T'.$curso->lastModifiedDate->hours.':'.$curso->lastModifiedDate->minutes.':'.$curso->lastModifiedDate->seconds));
		  
			if($changeNode < $changeCurso)
			{
				$this->setNode('update', $type, $curso, $nid, $cat);
			}
			
		  }
		  else // Cria o conteúdo se não existir
		  {  
			  $this->setNode('create', $type, $curso,  $nid, $cat);
		  }
		}
		
		// Deleta os cursos obsoletos
		if($type == 'curso'){
			$diff = array_diff($idsProductDrupal, $idsProductCurso);
			$nidsDiff = array();
			foreach($diff as $nid)
			{
			  $nidsDiff[] = $this->nidProduct($nid, $type);
			}
			$storage_handler = \Drupal::entityTypeManager()->getStorage("node");
			$entities = $storage_handler->loadMultiple($nidsDiff);
			$storage_handler->delete($entities);
		}

  }
  
  // Função para Atualizar e Criar os nodes do tipo Curso/Agenda
  public function setNode($op, $type, $data, $nid = NULL, $cat)
  {
		// if($op == 'create')
		// {
		//   $node = Node::create(['type' => $type]);
		// } 
		// else if($op == 'update')
		// {
		//   $node = Node::load($nid);
		// }
		
		// // Campos para o tipo de conteúdo CURSO
		// if( $type == 'curso')
		// {
		  
		//   // Título
		//   $node->set('title', $data['title']);
		  
		//   // ID do Produto no Shopify
		//   $node->set('field_id_shopify', $data['product_id']);
		  
		//   // Preço
		//   if(!empty($data['price']) || isset($data['price'])){
		// 	$node->set('field_preco', $data['price']);
		//   }
		  
		//   // Texto
		//   if(!empty($data['body']) || isset($data['body'])){
		// 	$node->set('field_texto', $data['body']);
		//   }
		  
		//   // Data da aula
		//   if(!empty($data['data']) || isset($data['data'])){
		// 	$node->set('field_data_da_aula', date('Y-m-d', strtotime($data['data'])));
		//   }
		  
		//   // Carga de aula
		//   if(!empty($data['carga']) || isset($data['carga'])){
		// 	$node->set('field_carga_horaria', $data['carga']);
		//   }
		  
		//   // Se exibe no Protal Firjan
		//   if(!empty($data['portal']) || isset($data['portal'])){
		// 	$node->set('field_exibir_no_portal_da_firjan', $data['portal'] == 'sim' ? TRUE : FALSE);
		//   }
		  
		//   // Categoria
		//   if(!empty($data['categoria']) || isset($data['categoria'])){
		// 	$tid = $this->provideTerm($data['categoria'], 'categorias_de_cursos');
		// 	$node->set('field_categoria_curso', ['target_id' => $tid]);
		//   }
		  
		//   // Turno
		//   if(!empty($data['turno']) || isset($data['turno'])){
		// 	$tid = $this->provideTerm($data['turno'], 'categorias_de_cursos', FALSE);
			
		// 	$node->set('field_turno', ['target_id' => $tid]);
		//   }

		//   // Loja
		//   if(!empty($data['loja']) || isset($data['loja'])){			
		// 	$node->set('field_loja', $data['loja']);
		//   }

		//   // Subprograma
		//   if(!empty($data['loja']) || isset($data['loja'])){
		// 	  if($data['loja'] == 'iel'){
		// 		$tid = $this->provideTerm('Educação Executiva', 'categorias');
		// 	  } else {
		// 		$tid = $this->provideTerm('Educação Profissional', 'categorias');
		// 	  }			
		// 	$node->set('field_programa_subprograma', ['target_id' => $tid]);
		//   }
		  
		//   // Status
		//   if(!empty($data['status']) || isset($data['status'])){
		// 	$node->set('field_status', $data['status'] == 'aberto' ? TRUE : FALSE);
		//   }
		  
		//   // Data de Modificação no Shopify
		//   if(!empty($data['update']) || isset($data['update'])){
		// 	$node->set('changed', date('U', strtotime($data['update'])));
		//   }
		  
		//   //Publica ou Despublica de acordo com os campos obrigatórios vazios
		//   if(empty($node->get("field_turno")->getValue()) || empty($node->get("field_data_da_aula")->getValue()) || empty($node->get("field_carga_horaria")->getValue()) || empty($node->get("field_categoria_curso")->getValue())){
		// 	$node->setPublished(false);
		// 	if($op == 'update'){
		// 	  \Drupal::logger('update_cursos')->notice('Curso despublicado: '.$node->id());
		// 	}
		//   } else {
		// 	$node->setPublished(true);
		//   }
		  
		// }
		// else // Campos para o tipo de conteúdo AGENDA
		// {
		// 	$node->set('title', $data->Titulo);
		
		// 	// ID do Conteúdo no Lumis
		// 	$node->set('field_id_lumis', $data->contentId);
		
		// 	//Data e hora do curso
		// 	if(isset($data->DtInicio) && !empty($data->DtInicio)){
		// 		$node->set('field_hora_de_inicio', $data->DtInicio->year.'-'.$data->DtInicio->month.'-'.$data->DtInicio->dayOfMonth.'T03:00:00');
		// 	}

		// 	//Duração
		// 	if(isset($data->Classificacao) && !empty($data->Classificacao)){
		// 		$node->set('field_duracao', explode(",",$data->Classificacao)[1]);
		// 	}
			
		// 	//Chamada
		// 	if(isset($data->TituloExibicao) && !empty($data->TituloExibicao)){
		// 		$node->set('field_chamada', $data->TituloExibicao);
		// 	}			
			
		// 	//Link externo do curso
		// 	if(isset($data->lumDetailsLink) && !empty($data->lumDetailsLink)){
		// 		$node->set('field_link_externo', $data->lumDetailsLink);
		// 	}
			
		// 	// Data da última alteração
		// 	if(isset($data->lastModifiedDate) && !empty($data->lastModifiedDate)){
		// 		$node->set('changed', date('U', strtotime($data->lastModifiedDate->year.'-'.$data->lastModifiedDate->month.'-'.$data->lastModifiedDate->dayOfMonth.'T'.$data->lastModifiedDate->hours.':'.$data->lastModifiedDate->minutes.':'.$data->lastModifiedDate->seconds)));
		// 	}
			
		// 	//Campos obrigatórios
		// 	if(isset($data->IntroducaoAux) && !empty($data->IntroducaoAux)){
		// 		$node->set('field_descricao', $data->IntroducaoAux);
		// 	}
		// 	if(isset($data->Horario) && !empty($data->Horario)){
		// 		$node->set('field_horario_livre', $data->Horario);
		// 	}
		// 	if(isset($data->Ingresso) && !empty($data->Ingresso)){
		// 		$node->set('field_preco_livre', $data->Ingresso);
		// 	}
		  
		// 	if($cat == 'curso')
		// 	{
		// 		// Categoria CURSO
		// 		$tid = $this->provideTerm('Educação Executiva', 'categorias_de_agenda');
		// 		$node->set('field_categoria_agenda', ['target_id' => $tid]);
	  		
		// 	} elseif ($cat == 'siy')
		// 	{
		// 		// Categoria SIY
		// 		$tid = $this->provideTerm('Search Inside Yourself (SIY)', 'categorias_de_agenda');
		// 		$node->set('field_categoria_agenda', ['target_id' => $tid]);

		// 	} else 
		// 	{
		// 		// Categoria TRILHAS
		// 		$tid = $this->provideTerm('Trilha on-line', 'categorias_de_agenda');
		// 		$node->set('field_categoria_agenda', ['target_id' => $tid]);
			 
		// 	}
			
		// 	// Se a data do evento foi maior ativa o conteúdo
		// 	date_default_timezone_set('UTC');
		// 	$dataAgenda = $data->DtInicio->dayOfMonth.'-'.$data->DtInicio->month.'-'.$data->DtInicio->year;			
		// 	if($dataAgenda >= date("d-m-Y")){
		// 		$node->set('field_status', $data['status'] == 'aberto' ? TRUE : FALSE);
		// 		$node->setPublished(true);
		// 	} 			
		  
		// }
		
		// $node->save();
  }
  
  //Retorna node do ID do Produto
  public function nidProduct($id, $type)
  {
	$fieldIdDrupal = $type == 'curso' ? 'field_id_shopify' : 'field_id_lumis';
	$nid = \Drupal::entityQuery('node')
		   ->condition('type', $type)
		   ->condition($fieldIdDrupal, $id, 'CONTAINS')
		   ->execute();
	return reset($nid);
  }
  
  public function provideTerm($name, $vid, $createCat = TRUE)
  {
	$term = \Drupal::entityTypeManager()
	  ->getStorage('taxonomy_term')
	  ->loadByProperties(['name' => $name, 'vid' => $vid]);
	  
	//Verifica se existe e retorna, se não cria e retorna
	if($createCat == TRUE){
	  if(empty($term))
	  {
		$new_term = Term::create([
		  'name' => $name,
		  'vid' => $vid,
		]);
		$new_term->save();
		return $new_term->id();
	  }
	  else
	  {
		return key($term);
	  } 
	} else {
	  return key($term);
	}
	
	  
  }
  
  
}