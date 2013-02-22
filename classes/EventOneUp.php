<?php
/**
*
* EventOneUp erhöht die Hülle um 1
*
* @author SmO
* @since 01.02.2013
*
**/
class EventOneUp extends Event
{
	// Eigenschaften
	private $huelle;
	
	// Konstrucktor
	public function __construct()
	{
		parent::__construct();
		
		Logger::log("Event: EventOneUp erzeugt");
	}
	
	// Methoden
	// TODO: Setzen des Werts fuer die Huelle des Raumschiffs
}
?>