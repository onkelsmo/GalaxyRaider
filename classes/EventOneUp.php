<?php
/**
*
* EventOneUp erh�ht die H�lle um 1
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
		
		Logger::log(LOG_EVENT_PROMT . EVENT_ONEUP . " erzeugt");
	}
	
	// Methoden
	// TODO: Setzen des Werts fuer die Huelle des Raumschiffs
}
?>