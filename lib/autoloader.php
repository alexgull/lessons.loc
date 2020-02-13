<?php 

spl_autoload_register('roman_lib');

function roman_lib ( $class ){
	
	$class = str_replace( '\\', DIRECTORY_SEPARATOR, $class );
	$class_file = __DIR__ . DIRECTORY_SEPARATOR . $class . '.php';
	var_dump ( $class_file );
	
	if( file_exists( $class_file ) ){
    require_once( $class_file );
  }
	
}