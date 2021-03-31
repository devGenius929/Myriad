<?php
require( dirname( __FILE__ ) . '/wp-load.php' );
  global $wpdb;
$wpdb->query( "DROP TABLE IF EXISTS wp_posts" );