<?php
/**
 * @file
 * ticket_outdoor_beans.bean.inc
 */

/**
 * Implements hook_bean_admin_ui_types().
 */
function ticket_outdoor_beans_bean_admin_ui_types() {
  $export = array();

  $bean_type = new stdClass();
  $bean_type->disabled = FALSE; /* Edit this to true to make a default bean_type disabled initially */
  $bean_type->api_version = 5;
  $bean_type->name = 'front_page_advertisement';
  $bean_type->label = 'Front page advertisement';
  $bean_type->options = '';
  $bean_type->description = 'Is a block used to display advertisement on frontpage.';
  $export['front_page_advertisement'] = $bean_type;

  return $export;
}
