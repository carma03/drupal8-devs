<?php

/**
 * @file FormSamplesController.php
 * @author Carlos Puello <carlospuello03@gmail.com>
 */

 namespace Drupal\form_samples\Controller;

 use Drupal\Core\Controller\ControllerBase;

/**
 * Class FormSamplesController
 *
 * @package Drupal\form_samples\Controller
 */
 class FormSamplesController extends ControllerBase{

  /**
   * {@inheritDoc}
   */
  public function content() {
    $markup = 'foo bar';

    return [
      '#type' => 'markup',
      '#markup' => $markup,
    ];
  }
 }
