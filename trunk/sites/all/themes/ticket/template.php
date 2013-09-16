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

//function ticket_preprocess_html(&$variables) {
//
//}

/**
 * Override or insert variables into the page template for HTML output.
 */
//function ticket_process_html(&$variables) {
//
//}

/**
 * Override or insert variables into the page template.
 */
function ticket_process_page(&$variables) {
  $arg = arg();global $user;
  if (drupal_is_front_page ()) {
  	$variables['aa'] = 'assssssssssssssssssssss';
  }
// 
//  	$variables['bottom_content'] = '
//  			<div class="dividing"></div>
//				<div class="explanation">'.t("EXPLAIN – illustrating connections between professional behaviour and your
//company’s performance.").'<br/><br/>'.t("Log in from this page in order to access the Explain tool. If you have
//troubles logging in, please consult your Explain contact.").'</div>';
//  
////  common_menu_active_trail();
//  
}

/**
 * Implements hook_preprocess_maintenance_page().
 */
//function ticket_preprocess_maintenance_page(&$variables) {
//
//}

/**
 * Override or insert variables into the node template.
 */
//function ticket_preprocess_node(&$variables) {
//  if ($variables['view_mode'] == 'full' && node_is_page($variables['node'])) {
//    $variables['classes_array'][] = 'node-full';
//  }
//}

/**
 * Override or insert variables into the block template.
 */
//function ticket_preprocess_block(&$variables) {
//  // In the header region visually hide block titles.
//  if ($variables['block']->region == 'header') {
//    $variables['title_attributes_array']['class'][] = 'element-invisible';
//  }
//}

/**
 * Implements theme_menu_tree().
 */
//function ticket_menu_tree($variables) {
//  return '<ul class="menu clearfix">' . $variables['tree'] . '</ul>';
//}

/**
 * Implements theme_field__field_type().
 */
//function ticket_field__taxonomy_term_reference($variables) {
//  $output = '';
//
//  // Render the label, if it's not hidden.
//  if (!$variables['label_hidden']) {
//    $output .= '<h3 class="field-label">' . $variables['label'] . ': </h3>';
//  }
//
//  // Render the items.
//  $output .= ($variables['element']['#label_display'] == 'inline') ? '<ul class="links inline">' : '<ul class="links">';
//  foreach ($variables['items'] as $delta => $item) {
//    $output .= '<li class="taxonomy-term-reference-' . $delta . '"' . $variables['item_attributes'][$delta] . '>' . drupal_render($item) . '</li>';
//  }
//  $output .= '</ul>';
//
//  // Render the top-level DIV.
//  $output = '<div class="' . $variables['classes'] . (!in_array('clearfix', $variables['classes_array']) ? ' clearfix' : '') . '">' . $output . '</div>';
//
//  return $output;
//}