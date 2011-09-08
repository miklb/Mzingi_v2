<?php

class Mzingi2 extends Theme
{
	public function action_add_template_vars($theme)
	{
	//Add Stylesheets
	Stack::add('template_stylesheet', array(Site::get_url( 'theme', '/resest.css' )), 'reset');
	Stack::add('template_stylesheet', array(Site::get_url( 'theme', '/style.css' )), 'theme');
	
	//Add Javascript
	Stack::add ( 'template_header_javascript', 'http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.0.6/modernizr.min.js', 'modernizr' );
	}
}	

?>