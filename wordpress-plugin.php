<?php
/*
Plugin Name: jqueryform-71faf0
Plugin URI: https://jqueryform.com/help/jqueryform-wordpress-plugin.php
Description: [jqueryform-71faf0] or [jqueryform-71faf0 width="100%" height="760px"] shortcode to load the form. Form created date: 2021-04-01 10:08:59 PST
Version: 1.0
Date: 2020-05-02
Author: jqueryform.com
Author URI: https://jqueryform.com
License: GPL
*/

add_shortcode( 'jqueryform-71faf0', 'jqueryform_71faf0' );

function jqueryform_71faf0( $params = array() )
{

	// default folder name is empty, only load form.html from current plugin folder
	$params   = shortcode_atts( array( 'width' => '100%', 'height' => '760px'), $params ); 
	$width    = trim($params['width'] );
	$height   = trim($params['height']);

	$dir      = dirname(__FILE__);
	$form     = $dir . '/form.html' ;
	$lib      = $dir . '/form.lib.php' ;
	$formUrl  = plugins_url('',__FILE__) . '/form.html' ;
	$adminUrl = plugins_url('',__FILE__) . '/admin.php' ;


	if( file_exists($lib) && file_exists($form) ){
		$html="

<iframe 
  src='{$formUrl}' 
  style='min-width:280px;width:{$width};height:{$height};border:none;'
  frameborder='none' 
  allowTransparency='true'>
</iframe>

<!-- Form Admin URL : {$adminUrl} -->

";
		return $html;
	};

	return "\n<!-- JQueryForm jqueryform-71faf0 Not Found -->\n" ;
}
?>