<?php
/**
 * @file
 * Contains \Drupal\hello_world\Controller\HelloWorldController.
 */

namespace Drupal\gm5_interface\Controller;

use Drupal\gm5_interface\Plugin\Util\GM5Util;

/**
 * HelloWorldController.
 */
class GM5InterfaceController {
  /**
   * Generates an example page.
   */
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Hello world'),
    );
  }
  
  public function redirect() {
    GM5Util::redirect("/agenda/transmissao-line-pensa-rio-economia-criativa-e-do-entretenimento");
  }

  public function clear_update_fetch_task(){
    $database = \Drupal::database();
    $database
      ->delete('key_value')
      ->condition('collection', 'update_fetch_task')
      ->execute();
  }

  public function count_newsletter(){
    $query = \Drupal::entityQuery('webform_submission')
    ->condition('webform_id', 'newsletter');    
    $result = $query->execute();
    var_dump(count($result));die;
  }

  public function clear_newsletter(){
    $query = \Drupal::entityQuery('webform_submission')
    ->condition('webform_id', 'newsletter');    
    $result = $query->execute();
    //var_dump(count($result));die;
    $count = array();
    foreach ($result as $item) {
      $submission = \Drupal\webform\Entity\WebformSubmission::load($item);
     
      $submission_data = $submission->getData();
      $explodeMail = explode('@', $submission_data['e_mail']);
      if (str_contains($submission_data['e_mail'], '@tenable.com')) {
        //die($item);
        $count[] = $item;
        $submission->delete();
        if(count($count) == '1000'){          
          die(count($count));
        }
        
      }     
       
      
    }
    echo "Encontrados: $count";die;
  }
}
