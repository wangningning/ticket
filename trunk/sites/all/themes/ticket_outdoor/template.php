<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */

 /**
  * Implements hook_preprocess_entity()
  */
/* function ticket_outdoor_preprocess_entity(&$vars) {
  if ($vars['entity_type'] == 'bean') {
    switch ($vars['elements']['#bundle']) {
      case 'front_page_advertisement':
	    if (isset($vars['content']['field_link'][0])) {
		  // modify field link value to appear as a button.
		  $field_link_title = $vars['content']['field_link'][0]['#element']['title'];
          $vars['content']['field_link'][0]['#element']['title'] = '<button>' . $field_link_title . '</button>';
		}
		break;
    }    
  } 
} */
 