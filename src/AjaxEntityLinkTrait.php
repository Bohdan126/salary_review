<?php

namespace Drupal\ajax_popup;

use Drupal\Component\Serialization\Json;
use Drupal\views\ResultRow;

trait AjaxEntityLinkTrait {

  /**
   * {@inheritdoc}
   */
  public function render(ResultRow $row) {
    $output = parent::render($row);
    $output['#attached']['library'][] = 'core/drupal.dialog.ajax';

    return $output;
  }

  /**
   * {@inheritdoc}
   */
  protected function renderLink(ResultRow $row) {
    $text = parent::renderLink($row);
    $this->options['alter']['query'] = ['modal' => 1];

    return $text;
  }

  /**
   * {@inheritdoc}
   */
  protected function getUrlInfo(ResultRow $row) {
    $url = parent::getUrlInfo($row);
    $url->setOptions([
      'attributes' => [
        'class' => ['use-ajax'],
        'data-dialog-type' => 'modal',
        'data-dialog-options' => Json::encode([
          'width' => 700,
        ]),
      ],
    ]);

    return $url;
  }

}
