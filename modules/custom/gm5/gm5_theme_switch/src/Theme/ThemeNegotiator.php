<?php

namespace Drupal\gm5_theme_switch\Theme;

use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\Theme\ThemeNegotiatorInterface;

class ThemeNegotiator implements ThemeNegotiatorInterface {

    public function applies(RouteMatchInterface $route_match) {

      $current_path = \Drupal::service('path.current')->getPath();
      
      if(substr($current_path,1, 5) == 'user/'){
        return 'adminimal_theme';
      }
      
    }

    public function determineActiveTheme(RouteMatchInterface $route_match) {
        

      $current_path = \Drupal::service('path.current')->getPath();

      if(substr($current_path,1, 5) == 'user/'){
        return 'adminimal_theme';
      } else {
        return 'casa_firjan';
      }
    }

}
