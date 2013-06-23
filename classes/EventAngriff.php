<?php
/**
*
* EventAngriff - Löst einen Angriff auf das Raumschiff aus 
*
* @author SmO
* @since 01.02.2013
*
**/
class EventAngriff extends Event
{
	// Eigenschaften
	private $schaden;
	
	// Konstruktor
	public function __construct()
	{
		parent::__construct();
		$randomDmg = rand(0,2);
		$this->schaden = $randomDmg;
		
<<<<<<< HEAD
		Logger::log(LOG_EVENT_PROMT . EVENT_ANGRIFF . "mit {$this->schaden} erzeugt");
=======
		Logger::log(LOG_EVENT_PROMT . EVENT_ANGRIFF . " mit {$this->schaden} erzeugt");
>>>>>>> adjust_move_method
	}
	
	// Methoden
	public function  getSchaden()
	{
		return $this->schaden;
	}
	
	// TODO: Berechnung der Hülle am Spieler Raumschiff
}
?>