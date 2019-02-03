<?php
/**
 * Plugin Name: Wordpress Project Transfer
 * Plugin URI: https://github.com/kotkovdev/wp-transfer.git
 * Description: Moving the site to another environment.
 * Version: 1.0
 * Author: Sergey Kotkov
 * Author URI: https://github.com/kotkovdev
 */

 require(__DIR__ . '/lang/en.php');
 require(__DIR__ . '/classes/Transfer.php');
 require(__DIR__ . '/view/admin.php');

 $transfer = new Transfer();