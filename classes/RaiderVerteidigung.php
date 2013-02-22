<?php
/**
*
* RaiderVerteidigung bezeichnet einen Raider mit hoher Verteidigung
*
* @author SmO
* @since 01.02.2013
*
**/
class RaiderVerteidigung extends Raider
{
	// Konstrucktor
	public function __construct()
	{
		parent::__construct();
		parent::setAngriff(1);
		parent::setVerteidigung(3);
	}
}
?>