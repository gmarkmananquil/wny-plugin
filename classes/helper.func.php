<?php
/**
 *
 *
 */

class wnyHelper{
	
	
	public static function servicesList($hideEmpty = false){
		$services = get_terms(PRAC_TAX_SERVICE, array( "hide_empty" => $hideEmpty));
		//There might be some data filtering here in the future... you never know so lets save it to variable
		//TODO: We might add filter hook here
		return $services;
	}
	
	public static function conditionsList($hideEmpty = false){
		$conditions = get_terms(PRAC_TAX_CONDITION, array( "hide_empty" => $hideEmpty));
		return $conditions;
	}
	
	public static function languagesList($hideEmpty = false){
		$languages = get_terms(PRAC_TAX_LANGUAGE, array( "hide_empty" => $hideEmpty));
		return $languages;
	}
	
	public static function groupsList($hideEmpty = false){
		$groups = get_terms(PRAC_TAX_CLIENT_AGE_GROUP, array( "hide_empty" => $hideEmpty));
		return $groups;
	}
	
	public static function sizesList($hideEmpty = false){
		$sizes = get_terms(PRAC_TAX_CLIENT_GROUP_SIZE, array( "hide_empty" => $hideEmpty));
		return $sizes;
	}
	
	
}