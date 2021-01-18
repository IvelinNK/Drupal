<?php

namespace Drupal\theater\Controller;

class TermsController {

  public function page() {

    $items = array(
      array('name' => 'Article one'),
      array('name' => 'Article two'),
      array('name' => 'Article three'),
      array('name' => 'Article four'),
    );

    return array(
      '#theme' => 'article_list',
      '#items' => $items,
      '#title' => 'Our article list'
    );
  }
}