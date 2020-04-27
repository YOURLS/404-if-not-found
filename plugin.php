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

// Display a default 404 not found page
function ozh_404_if_not_found() {
    yourls_status_header(404);
    $notfound = '<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">'
              . '<html><head>'
              . '<title>404 Not Found</title>'
              . '</head><body>'
              . '<h1>Not Found</h1>'
              . '<p>The requested URL was not found on this server.</p>'
              . '</body></html>';
    die($notfound);
}
