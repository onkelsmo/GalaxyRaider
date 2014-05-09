<?php
/**
*
* RaiderDurchschnitt bezeichnet einen Raider mit mittelmaeßiger Angriff und Verteidigung
*
* @author SmO
* @since 01.02.2013
*
**/
class RaiderDurchschnitt extends Raider
{
	// Konstrucktor
	public function __construct()
	{
		parent::__construct();
		parent::setAngriff(2);
		parent::setVerteidigung(2);
	}
}
?>