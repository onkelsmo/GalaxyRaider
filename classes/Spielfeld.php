<?php
/**
*
* Das Spielfeld
*
* @author SmO
* @since 01.02.2013
*
**/
final class Spielfeld implements I_Size, I_Draw
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
		
		Logger::log(LOG_SEPERATOR_LINE);
		Logger::log(LOG_GAME_CREATED);
		Logger::log(LOG_GAME_BUILD);
	}
	
	// Methoden
	public static function getSize()
	{
		return self::$arrSize;
	}
	
	public function draw()
	{
		View::getContent(get_class($this));
	}

}
?>