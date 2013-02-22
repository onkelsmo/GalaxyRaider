<?php
/**
*
* Includiert alle Dateien
*
* @author SmO
* @since 01.02.2013
*
**/

// Interfaces
include 'classes/I_Size.php';
include 'classes/I_Position.php';
// Klassen
include 'classes/Logger.php';
include 'classes/Spielfeld.php';
include 'classes/Game.php';
// Raider
include 'classes/Raider.php';
include 'classes/RaiderAngriff.php';
include 'classes/RaiderVerteidigung.php';
include 'classes/RaiderDurchschnitt.php';
// Events
include 'classes/Event.php';
include 'classes/EventAngriff.php';
include 'classes/EventOneUp.php';
include 'classes/EventMaxUp.php';

/**
 * For Debuggin
 */
include '../freaky_functions/freaky_functions.php';
?>