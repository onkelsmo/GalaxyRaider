<?php
/**
*
* Raider - beschreibt das Spielerraumschiff
*
* @author SmO
* @since 01.02.2013
*
**/
abstract class Raider implements I_Size, I_Position, I_Draw
{
	// Eigenschaften
	protected $arrSize;
	protected $arrPosition;
	protected $huelle;
	
	protected $angriff;
	protected $verteidigung;
	
	// Konstrucktor
	public function __construct()
	{
		$this->arrSize = array(1);
		$this->huelle = 5;
		
		Logger::log(get_class($this)." wurde erstellt.");
		Logger::log(LOG_RAIDER_SET);
		
		self::setPosition(4,1);
	}
	
	// Getter und Setter
	public static function getSize()
	{
		return $this->arrSize;
	}
	
	public function getPosition()
	{
		return $this->arrPosition;
	}
	
	public function getHuelle()
	{
		return $this->huelle;
	}
	
	public function getAngriff()
	{
		return $this->angriff;
	}
	
	public function getVerteidigung()
	{
		return $this->verteidigung;
	}
	
	protected function setAngriff($attak)
	{
		$this->angriff = $attak;
	}
	
	protected function setVerteidigung($def)
	{
		$this->verteidigung = $def;
	}
	
	/**
	 * setPosition - Setzt die aktuelle Position des Raiders
	 * 
	 * @param int $xCoord
	 * @param int $yCoord
	 */
	protected function setPosition($xCoord, $yCoord)
	{
		$this->arrPosition = array($xCoord, $yCoord);
		
		Logger::log(LOG_RAIDER_PROMT . LOG_RAIDER_NEW_POSITION . " {$this->arrPosition[0]},{$this->arrPosition[1]}");
	}
	
	/**
	 * move - bewegt den Raider zu einer Koordinate
	 * 
	 * @param int $xCoord
	 * @param int $yCoord
	 */
	public function move($xCoord, $yCoord)
	{
		$ziel = Spielfeld::getSize();
		$zielContent = $ziel[$xCoord][$yCoord];
				
		switch($zielContent)
		{
			case '0': 
				// TODO: case 'ist auf dem Feld ein Event?'
				self::setPosition($xCoord, $yCoord);
				break;
			case '1':
				// here is a wall
				Logger::log(LOG_RAIDER_PROMT . LOG_RAIDER_NOWAY);
				break;
			case 'E':
				self::setPosition(4, 1);
				break;
			case 'S':
				// here is the start
				Logger::log(LOG_RAIDER_PROMT . LOG_RAIDER_NOWAY);
				break;
			default:
				break;
		}
	}
	
	public function draw()
	{
			
	}
}
?>