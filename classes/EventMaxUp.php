<?php
/**
*
* EventMaxUp setzt die Huelle des Raumschiffs auf Maximum
*
* @author SmO
* @since 01.02.2013
*
**/
class EventMaxUp extends Event
{
	private $huelle;
	
	public function __construct()
	{
		parent::__construct();
		
		Logger::log("Event: EventMaxUp erzeugt");
	}
}
?>