<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Fires after the opening footer wrap <div> tag.
add_action( 'fl_footer_wrap_open', 'hookybeaver_footer_open' );
function hookybeaver_footer_open() {
    echo '<div class="hb-footer-open">' . get_option( 'footer_open' ) . '</div>';
}

// Fires before the closing footer wrap </div> tag.
add_action( 'fl_footer_wrap_close', 'hookybeaver_footer_close' );
function hookybeaver_footer_close() {
    echo '<div class="hb-footer-close">' . get_option( 'footer_close' ) . '</div>';
}

// Fires before the opening footer widgets <div> tag.
add_action( 'fl_before_footer_widgets', 'hookybeaver_before_footer_widgets' );
function hookybeaver_before_footer_widgets() {
    echo '<div class="hb-before-footer-widgets">' . get_option( 'before_footer_widgets' ) . '</div>';
}

// Fires after the closing footer widgets <div> tag.
add_action( 'fl_after_footer_widgets', 'hookybeaver_after_footer_widgets' );
function hookybeaver_after_footer_widgets() {
    echo '<div class="hb-after-footer-widgets">' . get_option( 'after_footer_widgets' ) . '</div>';
}

// Fires before the opening footer <div> tag.
add_action( 'fl_before_footer', 'hookybeaver_before_footer' );
function hookybeaver_before_footer() {
    echo '<div class="hb-before-footer">' . get_option( 'before_footer' ) . '</div>';
}

// Fires after the closing footer </div> tag.
add_action( 'fl_after_footer', 'hookybeaver_after_footer' );
function hookybeaver_after_footer() {
    echo '<div class="hb-after-footer">' . get_option( 'after_footer' ) . '</div>';
}

// Fires at the beginning of footer1.
add_action( 'fl_footer_col1_open', 'hookybeaver_footer_col1_open' );
function hookybeaver_footer_col1_open() {
    echo '<div class="hb-footer-col1-open">' . get_option( 'footer_col1_open' ) . '</div>';
}

// Fires at the end of the footer1.
add_action( 'fl_footer_col1_close', 'hookybeaver_footer_col1_close' );
function hookybeaver_footer_col1_close() {
    echo '<div class="hb-footer-col1-close">' . get_option( 'footer_col1_close' ) . '</div>';
}

// Fires at the beginning of footer2.
add_action( 'fl_footer_col2_open', 'hookybeaver_footer_col2_open' );
function hookybeaver_footer_col2_open() {
    echo '<div class="hb-footer-col2-open">' . get_option( 'footer_col2_open' ) . '</div>';
}

// Fires at the end of the footer2.
add_action( 'fl_footer_col2_close', 'hookybeaver_footer_col2_close' );
function hookybeaver_footer_col2_close() {
    echo '<div class="hb-footer-col2-close">' . get_option( 'footer_col2_close' ) . '</div>';
}

