<?php

/**
 * @file
 * Contains \Drupal\auto_entitylabel\Controller\AutoEntityLabelController.
 */

namespace Drupal\auto_entitylabel\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Routing\RouteMatchInterface;

/**
 * Class AutoEntityLabelController.
 *
 * @package Drupal\auto_entitylabel\Controller
 */
class AutoEntityLabelController extends ControllerBase {
  /**
   * @param \Drupal\Core\Routing\RouteMatchInterface $route_match
   * @return array
   */
  public function entityLabelConfiguration(RouteMatchInterface $route_match) {
    return [
        '#type' => 'markup',
        '#markup' => $this->t("Implement method: entityLabelConfiguration with parameter(s): ")
    ];
  }

}
