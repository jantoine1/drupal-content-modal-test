<?php

namespace Drupal\drupal_content_modal_test\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * DakotaLogACallController class.
 */
class DrupalContentModalTestController extends ControllerBase {

  /**
   * {@inheritdoc}
   */
  public function test() {
    $build = array(
      '#type' => 'markup',
      '#markup' => '<a class="use-ajax" data-dialog-type="modal" href="/node/add/article">' . t('Create article') . '</a>',
    );
    return $build;
  }

}
