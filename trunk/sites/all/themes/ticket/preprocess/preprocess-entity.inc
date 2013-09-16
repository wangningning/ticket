<?php
/**
  * Implements hook_preprocess_entity()
  */
function ticket_outdoor_alpha_preprocess_entity(&$vars) {
  if ($vars['entity_type'] == 'bean') {
    switch ($vars['elements']['#bundle']) {
      case 'front_page_advertisement':
	    // modify field link so it will appear as a button rather than a plain link.
				if (isset($vars['content']['field_link'][0])) {
				  $field_link_title = $vars['content']['field_link'][0]['#element']['title'];
		          $vars['content']['field_link'][0]['#element']['title'] = '<button>' . $field_link_title . '</button>';
				}
				break;
    }
  } 
}