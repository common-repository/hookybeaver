<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
$fields = array(
  array(
    'uid' => 'after_head_open',
    'label' => 'After Opening Head section',
    'section' => 'header_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'after_head',
    'label' => 'After Head section',
    'section' => 'header_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'after_body_open',
    'label' => 'After Opening body section',
    'section' => 'header_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'after_page_open',
    'label' => 'After Opening fl-page tag',
    'section' => 'header_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'before_top_bar',
    'label' => 'Before Top Bar',
    'section' => 'header_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'top_bar_col1_open',
    'label' => 'Top Bar Column 1 Start',
    'section' => 'header_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'top_bar_col1_close',
    'label' => 'Top Bar Column 1 Close',
    'section' => 'header_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'top_bar_col2_open',
    'label' => 'Top Bar Column 2 Start',
    'section' => 'header_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'top_bar_col2_close',
    'label' => 'Top Bar Column 2 Close',
    'section' => 'header_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'after_top_bar',
    'label' => 'After Top Bar',
    'section' => 'header_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'before_header',
    'label' => 'Before Header',
    'section' => 'header_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'header_content_open',
    'label' => 'Header Content Start',
    'supplemental' => '*Only available when using the "Nav Bottom" header layout',
    'section' => 'header_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'header_content_close',
    'label' => 'Header Content End',
    'supplemental' => '*Only available when using the "Nav Bottom" header layout',
    'section' => 'header_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'after_header',
    'label' => 'After Header',
    'section' => 'header_section',
    'type' => 'textarea',
  ),

);
foreach( $fields as $field ){
    add_settings_field( $field['uid'], $field['label'], array( $this, 'field_callback' ), 'header_section', $field['section'], $field );
      register_setting( 'header_section', $field['uid'] );
}
