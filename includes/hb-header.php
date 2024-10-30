<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Add content after opening <head> tag
add_action( 'fl_head_open', 'hookybeaver_after_head_open' );
function hookybeaver_after_head_open() {
    echo '<div class="hb-after-head-open">' . get_option( 'after_head_open' ) . '</div>';
}

// Beaver Builder’s styles and custom code are loaded after wp_head to ensure they aren’t overridden by plugins you may have installed. Use the fl_head action if you need to load something after Beaver Builder’s styles.
add_action( 'fl_head', 'hookybeaver_after_head' );
function hookybeaver_after_head() {
    echo '<div class="hb-after-head">' . get_option( 'after_head' ) . '</div>';
}

// Fires after the opening <body> tag.
add_action( 'fl_body_open', 'hookybeaver_after_body_open' );
function hookybeaver_after_body_open() {
    echo '<div class="hb-after-body-open">' . get_option( 'after_body_open' ) . '</div>';
}

// Fires after the opening fl-page.
add_action( 'fl_page_open', 'hookybeaver_after_page_open' );
function hookybeaver_after_page_open() {
    echo '<div class="hb-after-page-open">' . get_option( 'after_page_open' ) . '</div>';
}

// Fires before top bar section.
add_action( 'fl_before_top_bar', 'hookybeaver_before_top_bar' );
function hookybeaver_before_top_bar() {
    echo '<div class="hb-before-top-bar">' . get_option( 'before_top_bar' ) . '</div>';
}

// Fires at the beginning of top bar1 <div>.
add_action( 'fl_top_bar_col1_open', 'hookybeaver_top_bar_col1_open' );
function hookybeaver_top_bar_col1_open() {
    echo '<div class="hb-top-bar-col1-open">' . get_option( 'top_bar_col1_open' ) . '</div>';
}

// Fires at the end of the top bar1 <div>.
add_action( 'fl_top_bar_col1_close', 'hookybeaver_top_bar_col1_close' );
function hookybeaver_top_bar_col1_close() {
    echo '<div class="hb-top-bar-col1-close">' . get_option( 'top_bar_col1_close' ) . '</div>';
}

// Fires at the beginning of top bar2 <div>.
add_action( 'fl_top_bar_col2_open', 'hookybeaver_top_bar_col2_open' );
function hookybeaver_top_bar_col2_open() {
    echo '<div class="hb-top-bar-col2-open">' . get_option( 'top_bar_col2_open' ) . '</div>';
}

// Fires at the end of the top bar2 <div>.
add_action( 'fl_top_bar_col2_close', 'hookybeaver_top_bar_col2_close' );
function hookybeaver_top_bar_col2_close() {
    echo '<div class="hb-top-bar-col2-close">' . get_option( 'top_bar_col2_close' ) . '</div>';
}

// Fires after top bar section.
add_action( 'fl_after_top_bar', 'hookybeaver_after_top_bar' );
function hookybeaver_after_top_bar() {
    echo '<div class="hb-after-top-bar">' . get_option( 'after_top_bar' ) . '</div>';
}

// Fires before the opening header <div> tag.
add_action( 'fl_before_header', 'hookybeaver_before_header' );
function hookybeaver_before_header() {
    echo '<div class="hb-before-header">' . get_option( 'before_header' ) . '</div>';
}

// Fires at the beginning of the header content section that is available in the Nav Bottom header layout.
add_action( 'fl_header_content_open', 'hookybeaver_header_content_open' );
function hookybeaver_header_content_open() {
    echo '<div class="hb-header-content-open">' . get_option( 'header_content_open' ) . '</div>';
}

// Fires at the end of the header content section that is available in the Nav Bottom header layout.
add_action( 'fl_header_content_close', 'hookybeaver_header_content_close' );
function hookybeaver_header_content_close() {
    echo '<div class="hb-header-content-close">' . get_option( 'header_content_close' ) . '</div>';
}

// Fires after the closing header <div> tag.
add_action( 'fl_after_header', 'hookybeaver_after_header' );
function hookybeaver_after_header() {
    echo '<div class="hb-after-header">' . get_option( 'after_header' ) . '</div>';
}
