<?php

namespace Drupal\ajax_popup\Plugin\views\field;

use Drupal\ajax_popup\AjaxEntityLinkTrait;
use Drupal\views\Plugin\views\field\EntityLinkDelete;

/**
 * @ingroup views_field_handlers
 *
 * @ViewsField("ajax_entity_link_delete")
 */
class AjaxEntityLinkDelete extends EntityLinkDelete {

  use AjaxEntityLinkTrait;

}
