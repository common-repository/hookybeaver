<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
/**
 * Plugin Name: HookyBeaver Beaver Builder Theme Hooks Customizer
 * Plugin URI: https://madcowweb.com/
 * Description: WYSIWYG Editor for Beaver Builder Theme Hooks
 * Author: Jason Robie
 * Author URI: https://madcowweb.com/about-mad-cow-web-design/
 * Version: 1.0.0
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 */

class HookyBeaver_Plugin {

  public function __construct() {
    // Hook into the admin menu
    add_action( 'admin_menu', array( $this, 'create_plugin_settings_page' ) );

      // Add Settings and Fields
    add_action( 'admin_init', array( $this, 'setup_sections' ) );
    add_action( 'admin_init', array( $this, 'setup_single_page_fields' ) );
    add_action( 'admin_init', array( $this, 'setup_header_fields' ) );
    add_action( 'admin_init', array( $this, 'setup_footer_fields' ) );
    add_action( 'admin_enqueue_scripts', 'hookybeaver_styles' );
    add_action( 'wp_enqueue_scripts', 'hookybeaver_styles' );
      function hookybeaver_styles() {
        wp_register_style( 'hookybeaver_styles',  plugin_dir_url( __FILE__ ) . 'css/style.css' );
        wp_enqueue_style( 'hookybeaver_styles' );
    }

      include_once( plugin_dir_path( __FILE__ ) . 'includes/hb-page.php' );
      include_once( plugin_dir_path( __FILE__ ) . 'includes/hb-header.php' );
      include_once( plugin_dir_path( __FILE__ ) . 'includes/hb-footer.php' );
  }

  public function create_plugin_settings_page() {
    // Add the menu item and page
    $page_title = 'HookyBeaver Settings Page';
    $menu_title = 'HookyBeaver Settings';
    $capability = 'manage_options';
    $slug = 'hookybeaver_settings_page';
    $callback = array( $this, 'hookybeaver_plugin_settings_page_content' );

    add_submenu_page( 'themes.php', $page_title, $menu_title, $capability, $slug, $callback );
  }

  public function hookybeaver_plugin_settings_page_content( $active_tab = '' ) {?>
    <div class="wrap">
      <h2>HookyBeaver Beaver Builder Theme Hooks Customization</h2><?php
         if( isset( $_GET['settings-updated'] ) && $_GET['settings-updated'] ){
           $this->admin_notice(); 
         } ?>
      <?php if( isset( $_GET[ 'tab' ] ) ) {
        $active_tab = $_GET[ 'tab' ];
      } else if( $active_tab == 'header_options' ) {
        $active_tab = 'header_options';
      } else if( $active_tab == 'footer_options' ) {
        $active_tab = 'footer_options';        
      } else {
        $active_tab = 'single_page_options';
      } ?>
    
      <h2 class="nav-tab-wrapper">
        <a href="?page=hookybeaver_settings_page&tab=single_page_options" class="nav-tab <?php echo $active_tab == 'single_page_options' ? 'nav-tab-active' : ''; ?>"><?php _e( 'Single Page/Post Options', 'hookybeaver' ); ?></a>
        <a href="?page=hookybeaver_settings_page&tab=header_options" class="nav-tab <?php echo $active_tab == 'header_options' ? 'nav-tab-active' : ''; ?>"><?php _e( 'Header Options', 'hookybeaver' ); ?></a>
        <a href="?page=hookybeaver_settings_page&tab=footer_options" class="nav-tab <?php echo $active_tab == 'footer_options' ? 'nav-tab-active' : ''; ?>"><?php _e( 'Footer Options', 'hookybeaver' ); ?></a>        
      </h2>
    
      <form method="post" action="options.php">
        <?php
          if( $active_tab == 'single_page_options' ) {
            settings_fields( 'single_page_section' );
            do_settings_sections( 'single_page_section' );
          } elseif( $active_tab == 'header_options' ) {
            settings_fields( 'header_section' );
            do_settings_sections( 'header_section' );
          } elseif( $active_tab == 'footer_options' ) {
            settings_fields( 'footer_section' );
            do_settings_sections( 'footer_section' );
          }  
          submit_button();
        ?>
      </form>
    </div> <?php }
    
  public function admin_notice() { ?>
      <div class="notice notice-success is-dismissible">
          <p>Hooray! Your settings have been updated!</p>
      </div><?php
  }

  public function setup_sections() {
      add_settings_section( 'single_page_section', '', array( $this, 'single_page_callback' ) , 'single_page_section' );
      add_settings_section( 'header_section', '', array( $this, 'header_callback' ), 'header_section' );
      add_settings_section( 'footer_section', '', array( $this, 'footer_callback' ), 'footer_section' );
  }
  public function single_page_callback() { ?>
        <h1>Page/Post Customization</h1>
        <h2 class="hookybeaver">Titles match editable sections below</h2>
        <?php echo '<img class="hb-image"src="' . plugins_url( 'images/page.png', __FILE__ ) . '" > ';
      }
  public function header_callback() { ?>       
        <h1>Header Customization</h1>
        <h2 class="hookybeaver">Titles match editable sections below</h2>
        <?php echo '<img class="hb-image" src="' . plugins_url( 'images/header.png', __FILE__ ) . '" > ';
       }
   public function footer_callback() { ?>       
        <h1>Footer Customization</h1>
        <h2 class="hookybeaver">Titles match editable sections below</h2>
        <?php echo '<img class="hb-image" src="' . plugins_url( 'images/footer.png', __FILE__ ) . '" > ';
       }      

  public function setup_single_page_fields() {
    include ( plugin_dir_path( __FILE__ ) . 'includes/single-page-fields.php' );
  }
  public function setup_header_fields() {
    include ( plugin_dir_path( __FILE__ ) . 'includes/header-fields.php' );
  }
  public function setup_footer_fields() {
    include ( plugin_dir_path( __FILE__ ) . 'includes/footer-fields.php' );
  }  

  public function field_callback( $arguments ) {
    $value = get_option( $arguments['uid'] );
    if( ! $value ) {
        $value = $arguments['default'];
    }
    switch( $arguments['type'] ){
        case 'text':
        case 'textarea':
            printf( '<textarea name="%1$s" id="%1$s" placeholder="%2$s" rows="3" cols="50">%3$s</textarea>', $arguments['uid'], $arguments['placeholder'], $value );
            break;
    }
    if( $helper = $arguments['helper'] ){
        printf( '<span class="helper"> %s</span>', $helper );
    }
    if( $supplemental = $arguments['supplemental'] ){
        printf( '<p class="description">%s</p>', $supplemental );
    }
  }
}
new HookyBeaver_Plugin();
