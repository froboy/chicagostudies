<?php
function cs_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form') {
    $form['search_block_form']['#title'] = t('Search'); // Change the text on the label element
    $form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty
    $form['search_block_form']['#size'] = 40;  // define size of the textfield
    $form['search_block_form']['#default_value'] = t('Search...'); // Set a default value for the textfield
    $form['actions']['submit']['#value'] = t('Search'); // Change the text on the submit button
    $form['actions']['submit'] = array('#type' => 'image_button', '#src' => base_path() . path_to_theme() . '/images/search.png');
  }
}

function cs_preprocess_page(&$variables) {
    if (isset($variables['node']->type)) {
	    $nodetype = $variables['node']->type;
   	    $variables['theme_hook_suggestions'][] = 'page__' . $nodetype;
    }
	$logo = base_path() . path_to_theme() . '/logo.gif';
	drupal_add_js(path_to_theme() . '/scripts/jquery.formdefaults.js');
	drupal_add_js('jQuery(document).ready(function () { jQuery(".form-text").formDefaults(); });', 'inline');
}

?>