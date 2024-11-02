<?php
/*
Plugin Name: Clean URLs for Tweet Images
Plugin URI: http://webblerock.com/
Version: v1.0
Author: <a href="http://webblerock.com">Webblerock</a>
Description: This plugin uses the post title in the URL for your tweet images posts instead of the default random hexadecimal identifier.  Tweet Images plugin required.
*/

/*  Copyright 2011 Webblerock

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

*/


if (!class_exists("wr_ti_clean_urls")) {
    class wr_ti_clean_urls {
		function cleanURL($post_data) {
					$post_data['post_name'] = $post_data['post_title'];
					return $post_data;

        }
   
    }
 
}

if (class_exists("wr_ti_clean_urls")) {
    $wr_ti_clean_url = new wr_ti_clean_urls();
}

if (isset($wr_ti_clean_url)) {
   
    add_filter('wpti_insert_post_data', array(&$wr_ti_clean_url, 'cleanURL'), 1);
    
}

?>