<?php
/*
Plugin Name: Simple Vimeo Shortcode
Plugin URI: http://www.yourlocalwebmaster.com/plugins/very-simple-vimeo-shortcode-plugin
Description: A very simple shortcode to add your vimeo videos into your wordpress site! Website are affordable @ <a href="http://www.yourlocalwebmaster.com">www.YourLocalWebmaster.com</a>
Version: 1.5
Author: Grant Kimball
Author URI: http://www.YourLocalWebmaster.com/
License: GPL2
*/
?>
<?php
/*  Copyright 2012  Grant Kimball  (email : webmaster@yourlocalwebmaster.com)

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
?>
<?php


function your_local_webmaster_vimeo_handler( $atts, $content=null, $code="" ) {
		if($atts['width']){
		$width = $atts['width'];
		}
else{
$width = "400";
}
		if($atts['height']){
		$height = $atts['height'];
		}
else{
$height = "225";
}

            $list = '<iframe src="http://player.vimeo.com/video/'.$content.'" width="'.$width.'" height="'.$height.'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
           return $list;
}

add_shortcode( 'ylwm_vimeo', 'your_local_webmaster_vimeo_handler' );

