<?php

/*
	Plugin Name: Attachment Atrophy
	Description: WordPress plugin to retroactively replace all existing attachment links with links to image URLs
	Author: Jacob Ward
	Version: 1.0.0
	Author URI: http://www.jacobward.co.uk
	Plugin URI: http://www.jacobward.co.uk

*/

    global $wpdb;
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

    function wpb_imagelink_setup() {
    	$image_set = get_option('image_default_link_type');

    	if ($image_set !== 'none') {
    		update_option('image_default_link_type', 'none');
    	}
    }

    add_action('admin_init', 'wpb_imagelink_setup', 10);

?>
