<?php
/*
Plugin Name: Headline Split Test
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A brief description of the Plugin.
Version: 0.1
Author: Brent Halliburton & Peter Bessman
Author URI: http://URI_Of_The_Plugin_Author
License: GPL2
*/

/*  Copyright 2010 Brent Halliburton & Peter Bessman  (email : headlinesplittest@bhalliburton.otherinbox.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function addHeaderCode() {
  echo "Brent";
}

function addLinkCode() {
  echo "Test-Test-Test";
}

add_action('the_title', 'addHeaderCode', 1);
add_filter('post_link', 'addLinkCode', 1);
?>