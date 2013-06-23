<?php
/**
*
* Beschreibt ein Ereignis auf dem Spielfeld
*
* @author SmO
* @since 01.02.2013
*
**/
abstract class Event implements I_Size, I_Position
{
	// Eigenschaften
	protected $arrSize;
	protected $arrPosition;
	
	// Konstruktor
	// TODO: Kann nur erstellt werden, wenn schon ein Spielfeld existiert
	public function __construct()
	{
		$this->arrSize = array(1);
		self::setPosition();
	}
	
	// Methoden
	public static function getSize()
	{
		return $this->arrSize;
	}
	
	public function getPosition()
	{
		return $this->arrPosition;
	}
	
	/**
	 * Struktur des Spielfelds
	 *
	 * 1,1,1,E,1
	 * 1,0,0,0,1
	 * 1,0,0,0,1
	 * 1,0,0,0,1
	 * 1,S,1,1,1
	 *
	 */
	private function setPosition()
	{
		$yCoord = rand(1, 3);
		$xCoord = rand(1, 3);
				
		$this->arrPosition = array($yCoord, $xCoord);
	}
}
?>