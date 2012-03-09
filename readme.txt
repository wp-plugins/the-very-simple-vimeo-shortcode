=== Plugin Name ===
Contributors: yourlocalwebmaster)
Donate link: http://yourlocalwebmaster.com/donate
Tags: vimeo, video, shortcode, vimeo shortcode, simple video plugin
Requires at least: 2.0.2
Tested up to: 3.3.1
Stable tag: 3.3.1 trunk

A very simple shortcode to add your Vimeo videos into your WordPress website!

== Description ==

A very simple shortcode to add your Vimeo videos into your WordPress website! This plugin will enable you to use shortcodes to insert your videos from Vimeo. It also allows height and width attributes for further customization!

== Installation ==

e.g.

1. Upload `plugin-name.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `<?php do_action('plugin_name_hook'); ?>` in your templates

== Frequently Asked Questions ==

= Why aren't my height and width attributes working? =

Perhaps you are not aware, but the attributes "height" and "width" are case sensitive. Please remember to use all lowercase letters when adding attributes.

= Are there any other available attributes? =

I am constantly updating my plugins. Looks for more attributes very soon!

= Why does my video look disproportioned? =

When setting height and width attributes, they should maintain the same aspect ration of the original video..

i.e. height="250" width="400", or 1 : 1.25

== Screenshots ==


== Changelog ==

= 1.0 =
Added height and width attributes

== Upgrade Notice ==

== Arbitrary section ==

**To use the plugin, simply install it, activate it and then call the shortcode within your page or post content.**

*[ylwm_vimeo]VIDEO_ID[/ylwm_vimeo]*

Where  VIDEO_ID is the id of the vimeo video.

To utilize the attributes, add height and with to the shortcode.

*[ylwm_vimeo height="400" width="600"]VIDEO_ID[/ylwm_vimeo]*
