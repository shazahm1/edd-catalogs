<?php
/*
Author: Nick Haskins
Author URI: http://nickhaskins.com
Plugin Name: EDD Catalog
Plugin URI: http://edd-galleries-pro.nickhaskins.co
Version: 0.1
Description: Displays all products from any site with Easy Digital Downloads installed
*/

class eddCatalogsYo {
	public function __construct(){
		require_once('inc/class.settings-api.php');
		require_once('inc/data.php');
		require_once('inc/news-feed.php');
		require_once('inc/load.php');
	}
}
new eddCatalogsYo;