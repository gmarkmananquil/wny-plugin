<?php
/**
 *
 *
 */


class wnyDAOBuilder{
	
	public static function create( $objName, $object ){
	
		switch ($objName){
			case "user" :
				if( $object instanceof wnyUser) return new userDAO($object);
				else throw new Exception( "Invalid object!" );
				break;
				
				
				
		}
	
	}
	
}

