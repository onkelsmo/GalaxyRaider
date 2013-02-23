<?php
/**
*
* Das Spiel 
*
* @author SmO
* @since 03.02.2013
*
**/
class Game
{
	// Konstanten
	const MAX_EVENTS = 2;
	
	// Eigenschaften
	private $logger;
	private $spielfeld;
	private $raider;
	private $event;
	private $numberOfEvents = 0;
	private $eventArray = array();
	private $started = false;
	
	// Konstruktor
	public function __construct()
	{
		// Starten des Loggers
		//$this->logger = new Logger();
		
		// Initialisierung des Spielfelds
		$this->spielfeld = new Spielfeld();
		
		// Initialisierung des Raider
		$this->raider = $this->setter(array("RaiderAngriff", "RaiderVerteidigung", "RaiderDurchschnitt"));
		
		// Initialisierung der Events
		for($i = 0; $i < self::MAX_EVENTS; $i++)
		{
			$this->event = $this->setter(array("EventAngriff", "EventMaxUp", "EventOneUp"));
			$event = $this->event->getPosition(); 
			Logger::log("Eventposition: ".$event[0].",".$event[1]);
			
			$this->eventArray[] = $this->event;
			$this->numberOfEvents++;
			unset($this->event);
		}
	}
	
	// getter
	public function getRaider()
	{
		if($this->started)
		{
			return $this->raider;
		}
	}
	public function getEventArray()
	{
		if($this->started)
		{
			return $this->eventArray;
		}
	}
	public function getNumberOfEvents()
	{
		if($this->started)
		{
			return $this->numberOfEvents;
		}
	}
	
	/**
	 * setter - erzeugt eine neue Instanz einer Klasse
	 * 
	 * @param Array $array - Array mit Namen von Klassen
	 */
	private function setter($array)
	{
		$zufall = rand(0,count($array)-1);
		
		return new $array[$zufall]();
	}

	// Methoden
	/**
	 * start - setzt 'started' auf true
	 */
	public function start()
	{
		$this->started = true;
		Logger::log("_______________________");
		Logger::log("Spiel wurde gestartet.");
	}
}
?>