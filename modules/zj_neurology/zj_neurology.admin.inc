<?php

function zj_neurology_config($form, &$form_state) {
  $vocabulary = taxonomy_vocabulary_machine_name_load('sections');
  $terms = taxonomy_term_load_multiple(array(), array('vid' => $vocabulary->vid));

  $form['templates'] = array(
    '#title' => '网站栏目文章列表展示方式',
    '#type' => 'fieldset',
    '#tree' => true,
  );

  foreach ($terms as $term) {
    $form['templates'][$term->tid] = array(
      '#title' => $term->name,
      '#type' => 'select',
      '#options' => array('default' => 'Default', 'list' => 'General List', 'list_gallery' => 'Gallery List'),
      '#default_value' => zj_neurology_variable_get('term_template_' . $term->tid, 'default'),
    );
  }

  $form['op']['save'] = array(
    '#type' => 'submit',
    '#value' => t('Save'),
  );

  return $form;
}

function zj_neurology_config_validate($form, &$form_state) {

}

function zj_neurology_config_submit($form, &$form_state) {
  $templates = $form_state['values']['templates'];
  foreach ($templates as $tid => $template) {
    zj_neurology_variable_set('term_template_' . $tid, $template);
  }

  drupal_set_message('Saved');
}
