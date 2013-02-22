<?php
/**
*
* Das Spielfeld
*
* @author SmO
* @since 01.02.2013
*
**/
final class Spielfeld implements I_Size
{	
	// Eigenschaften
	private static $arrSize;
	
	// Konstruktor
	public function __construct()
	{
		/**
		 * the array was build as this map
		 *
		 * 1,1,1,E,1
		 * 1,0,0,0,1
		 * 1,0,0,0,1
		 * 1,0,0,0,1
		 * 1,S,1,1,1
		 * 
		 */
		self::$arrSize = array
		(
			array(1,1,1,'E',1),
			array(1,0,0,0,1),
			array(1,0,0,0,1),
			array(1,0,0,0,1),
			array(1,'S',1,1,1)
		);
		
		Logger::log("_______________________");
		Logger::log("Spiel wird erstellt");
		Logger::log("Spielfeld 5x5 aufgebaut");
	}
	
	// Methoden
	public static function getSize()
	{
		return self::$arrSize;
	}

}
?>