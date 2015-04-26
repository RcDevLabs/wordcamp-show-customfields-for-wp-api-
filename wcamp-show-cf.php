<?php
/*
Plugin Name: WordCamp Sessions Custom Fields into WP-API
Plugin URI: http://github.com
Description: This plugins hooks into WP-API to show wcpt-session-date, wcpt-session-hour, wcpt-session-minutes and wcpt-session-meridiem
Version: 1.0.0
Author: RCDev
License:           GPL-2.0+
License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
Author URI: http://rcdevlabs.github.io
*/
function json_api_prepare_post( $post_response, $post, $context ) {
  
  $field['date'] = get_post_meta( $post['ID'], 'wcpt-session-date', true );
  $field['hour'] = get_post_meta( $post['ID'], 'wcpt-session-hour', true );
  $field['minutes']= get_post_meta( $post['ID'], 'wcpt-session-minutes', true );
  $field['meridiem'] = get_post_meta( $post['ID'], 'wcpt-session-meridiem', true );
  
  $post_response['session-info'] = $field;

  return $post_response;
}
add_filter( 'json_prepare_post', 'json_api_prepare_post', 10, 3 );