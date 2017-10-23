<?php

/**
 * @file FormSamplesController.php
 * @author Carlos Puello <carlospuello03@gmail.com>
 */

 namespace Drupal\form_samples\Controller;

/**
 * Class FormSamplesController
 *
 * @package Drupal\form_samples\Controller
 */
 class FormSamplesController {

  public function settings() {
    $item = [];
    $item['#markup'] = 'foo bar';
    return $item;
  }
 }
