<?php

/**
 * @file
 * Contains \Drupal\qsi\QuickSocialIcons.
 */

namespace Drupal\qsi\Controller;

use \Drupal\Core\Controller\ControllerBase;

class QuickSocialIcons extends ControllerBase {
  /**
   * Display the markup.
   *
   * @return array
   */
   public function content() {    
     return array(
      '#theme' => 'qsi',        
      '#attached' => array(
        'library' => array(
        'qsi/qsi',
        ),
      ),      
     );
   }
}