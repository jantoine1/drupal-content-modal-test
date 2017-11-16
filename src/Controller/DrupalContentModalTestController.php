<?php

namespace Drupal\test\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * DakotaLogACallController class.
 */
class TestController extends ControllerBase {

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
