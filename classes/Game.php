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
		
		// Header schreiben
		View::getHeader();
		
		// Initialisierung des Spielfelds
		$this->spielfeld = new Spielfeld();
		
		// Initialisierung des Raider
		$this->raider = $this->setter(array(RAIDER_ANGRIFF, RAIDER_VERTEIDIGUNG, RAIDER_DURCHSCHNITT));
		
		// Initialisierung der Events
		for($i = 0; $i < MAX_EVENTS; $i++)
		{
			$this->event = $this->setter(array(EVENT_ANGRIFF, EVENT_MAXUP, EVENT_ONEUP));
			$event = $this->event->getPosition(); 
			Logger::log(LOG_EVENT_POSITION.$event[0].",".$event[1]);
			
			$this->eventArray[] = $this->event;
			$this->numberOfEvents++;
			unset($this->event);
		}
		
		// Drawing the elements
		$this->spielfeld->draw($this->raider);
		//$this->raider->draw();
		
		// Footer schreiben
		View::getFooter();
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
	
	// setter
	/**
	 * 
	 * setter creates a new objekt of $array
	 * 
	 * @param Array $array - an array of Strings
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
		Logger::log(LOG_SEPERATOR_LINE);
		Logger::log(LOG_GAME_STARTET);
	}
}
?>