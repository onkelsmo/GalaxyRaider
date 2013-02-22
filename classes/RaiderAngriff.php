<?php
/**
*
* RaiderAngriff bezeichnet einen Raider mit hoher Angrifskraft
*
* @author SmO
* @since 01.02.2013
*
**/
class RaiderAngriff extends Raider
{
	// Konstrucktor
	public function __construct()
	{
		parent::__construct();
		parent::setAngriff(3);
		parent::setVerteidigung(1);
	}
	
}
?>