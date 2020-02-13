<?php
class Server{
	public static $variable;
	
	static public function get_var($name){
		
		// @TODO Переделать в однострочное условие
		? ( function_exists( 'filter_input' ) ) $value = filter_input( INPUT_SERVER, $name ) : {$value = $_GET [ $name ]; return $value;}
		
	}

	static public function has( $name, $stringi ){
		
		return strpos( self::get_var ( $name ), $stringi) !== false;
		
	}

}