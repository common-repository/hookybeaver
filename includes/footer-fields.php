<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
$fields = array(
  array(
    'uid' => 'footer_open',
    'label' => 'Beginning of Footer wrap',
    'section' => 'footer_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'footer_close',
    'label' => 'End of Footer wrap',
    'section' => 'footer_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'before_footer_widgets',
    'label' => 'Before Footer Widgets',
    'section' => 'footer_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'after_footer_widgets',
    'label' => 'After Footer Widgets',
    'section' => 'footer_section',
    'type' => 'textarea',
  ),    
  array(
    'uid' => 'before_footer',
    'label' => 'Before Footer',
    'section' => 'footer_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'after_footer',
    'label' => 'After Footer',
    'section' => 'footer_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'footer_col1_open',
    'label' => 'Footer Column 1 Start',
    'section' => 'footer_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'footer_col1_open',
    'label' => 'Footer Column 1 Start',
    'section' => 'footer_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'footer_col1_close',
    'label' => 'Footer Column 1 End',
    'section' => 'footer_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'footer_col2_open',
    'label' => 'Footer Column 2 Start',
    'section' => 'footer_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'footer_col2_close',
    'label' => 'Footer Column 2 End',
    'section' => 'footer_section',
    'type' => 'textarea',
  ),  
);
foreach( $fields as $field ){
    add_settings_field( $field['uid'], $field['label'], array( $this, 'field_callback' ), 'footer_section', $field['section'], $field );
      register_setting( 'footer_section', $field['uid'] );
}
