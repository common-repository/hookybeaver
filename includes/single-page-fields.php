<?php 
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
$fields = array(
  array(
    'uid' => 'before_content',
    'label' => 'Before Page Content',
    'section' => 'single_page_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'content_open',
    'label' => 'Page Content Start',
    'section' => 'single_page_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'content_close',
    'label' => 'Page Content Close',
    'section' => 'single_page_section',
    'type' => 'textarea',
  ),  
  array(
    'uid' => 'top_post_meta_open',
    'label' => 'Top Post Meta Start',
    'supplemental' => '*This will show everywhere the post meta is displayed',
    'section' => 'single_page_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'top_post_meta_close',
    'label' => 'Top Post Meta End',
    'supplemental' => '*This will show everywhere the post meta is displayed',
    'section' => 'single_page_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'bottom_post_meta_open',
    'label' => 'Bottom Post Meta Start',
    'supplemental' => '*This will show everywhere the post meta is displayed',
    'section' => 'single_page_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'bottom_post_meta_close',
    'label' => 'Bottom Post Meta End',
    'supplemental' => '*This will show everywhere the post meta is displayed',
    'section' => 'single_page_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'comments_open',
    'label' => 'Comments Start',
    'section' => 'single_page_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'comments_close',
    'label' => 'Comments End',
    'section' => 'single_page_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'sidebar_open',
    'label' => 'Sidebar Start',
    'section' => 'single_page_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'sidebar_close',
    'label' => 'Sidebar End',
    'section' => 'single_page_section',
    'type' => 'textarea',
  ), 
  array(
    'uid' => 'after_content',
    'label' => 'After Content',
    'section' => 'single_page_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'page_close',
    'label' => 'After Page',
    'section' => 'single_page_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'body_close',
    'label' => 'After Body',
    'section' => 'single_page_section',
    'type' => 'textarea',
  ),    
);
foreach( $fields as $field ){
    add_settings_field( $field['uid'], $field['label'], array( $this, 'field_callback' ), 'single_page_section', $field['section'], $field );
      register_setting( 'single_page_section', $field['uid'] );
}
