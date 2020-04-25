<?php
/*
Plugin Name: 404 if not found
Plugin URI: https://github.com/YOURLS/404-if-not-found/
Description: Send a 404 (instead of a 302) when short URL is not found
Version: 1.0
Author: Ozh
Author URI: https://yourls.org/
*/

// No direct call
if( !defined( 'YOURLS_ABSPATH' ) ) die();

yourls_add_action('redirect_keyword_not_found', 'ozh_404_if_not_found');
function ozh_404_if_not_found() {
    yourls_redirect( YOURLS_SITE, 404 );
    die();
}
