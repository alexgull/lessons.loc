<?php
class Post{
	public static $variable;
	
	static public function get_var($name){
		
		// @TODO Переделать в однострочное условие
		if( function_exists( 'filter_input' ) )
			$value = filter_input( INPUT_POST, $name );
		
		else
			$value = $_GET [ $name ];
		
		
		return $value;
	}

	static public function has( $name, $stringi ){
		
		return strpos( self::get_var ( $name ), $stringi) !== false;
		
	}

}