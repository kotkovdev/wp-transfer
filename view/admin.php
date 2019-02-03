<?php
    add_action('admin_menu', 'wp_transfer_admin_menu');
    
    function wp_transfer_admin_menu() {
	    add_options_page(WP_TRANSFER_MENU_TITLE, WP_TRANSFER_MENU_TITLE , 'manage_options', 'wp-transfer', 'wp_transfer_admin_page');
    }

    function wp_transfer_admin_page() {
        require_once(__DIR__ . '/form.php');
    }
?>
