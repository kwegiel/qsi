<?php
/**
 * @file
 * Contains \Drupal\qsi\Plugin\Block\IconsBlock.
 */

 namespace Drupal\qsi\Plugin\Block; 
 use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Quick Social Icons' block.
 *
 * @Block(
 *  id = "qsi_icons",
 *  admin_label = @Translation("Quick Social Icons"),
 * )
 */
 class IconsBlock extends BlockBase {
    
      /**
       * {@inheritdoc}
       */
      public function build() {
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