<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
// Fires before the opening content <div> tag. 
add_action( 'fl_before_content', 'hookybeaver_before_content' );
function hookybeaver_before_content() {
    echo '<div class="hb-before-content">' . get_option( 'before_content' ) . '</div>';
}

// Fires after the opening content <div> tag.
add_action( 'fl_content_open', 'hookybeaver_content_open' );
function hookybeaver_content_open() {
    echo '<div class="hb-content-open">' . get_option( 'content_open' ) . '</div>';
}

// Fires before the closing content </div> tag.
add_action( 'fl_content_close', 'hookybeaver_content_close' );
function hookybeaver_content_close() {
    echo '<div class="hb-content-close">' . get_option( 'content_close' ) . '</div>';
}

// Fires at the beginning of the top post meta section.
add_action( 'fl_post_top_meta_open', 'hookybeaver_top_post_meta_open' );
function hookybeaver_top_post_meta_open() {
    echo '<div class="hb-top-post-meta-open">' . get_option( 'top_post_meta_open' ) . '</div>';
}

// Fires at the end of the top post meta section.
add_action( 'fl_post_top_meta_close', 'hookybeaver_top_post_meta_close' );
function hookybeaver_top_post_meta_close() {
    echo '<div class="hb-top-post-meta-close">' . get_option( 'top_post_meta_close' ) . '</div>';
}

// Fires at the beginning of the bottom post meta section.
add_action( 'fl_post_bottom_meta_open', 'hookybeaver_bottom_post_meta_open' );
function hookybeaver_bottom_post_meta_open() {
    echo '<div class="hb-bottom-post-meta-open">' . get_option( 'bottom_post_meta_open' ) . '</div>';
}

// Fires at the end of the bottom post meta section.
add_action( 'fl_post_bottom_meta_close', 'hookybeaver_bottom_post_meta_close' );
function hookybeaver_bottom_post_meta_close() {
    echo '<div class="hb-bottom-post-meta-close">' . get_option( 'bottom_post_meta_close' ) . '</div>';
}

// Fires after the opening fl-comments <div> tag.
add_action( 'fl_comments_open', 'hookybeaver_comments_open' );
function hookybeaver_comments_open() {
    echo '<div class="hb-comments-open">' . get_option( 'comments_open' ) . '</div>';
}

// Fires before the closing fl-comments <div> tag.
add_action( 'fl_comments_close', 'hookybeaver_comments_close' );
function hookybeaver_comments_close() {
    echo '<div class="hb-comments-close">' . get_option( 'comments_close' ) . '</div>';
}

// Fires after the opening fl-sidebar <div> tag.
add_action( 'fl_sidebar_open', 'hookybeaver_sidebar_open' );
function hookybeaver_sidebar_open() {
    echo '<div class="hb-sidebar-open">' . get_option( 'sidebar_open' ) . '</div>';
}

// Fires before the closing fl-sidebar <div> tag.
add_action( 'fl_sidebar_close', 'hookybeaver_sidebar_close' );
function hookybeaver_sidebar_close() {
    echo '<div class="hb-sidebar-close">' . get_option( 'sidebar_close' ) . '</div>';
}

// Fires after the closing content </div> tag.
add_action( 'fl_after_content', 'hookybeaver_after_content' );
function hookybeaver_after_content() {
    echo '<div class="hb-after-content">' . get_option( 'after_content' ) . '</div>';
}

// Fires before the closing fl-page  <div> tag.
add_action( 'fl_page_close', 'hookybeaver_page_close' );
function hookybeaver_page_close() {
    echo '<div class="hb-page-close">' . get_option( 'page_close' ) . '</div>';
}

// Fires before the closing fl-page  <div> tag.
add_action( 'fl_body_close', 'hookybeaver_body_close' );
function hookybeaver_body_close() {
    echo '<div class="hb-body-close">' . get_option( 'body_close' ) . '</div>';
}
