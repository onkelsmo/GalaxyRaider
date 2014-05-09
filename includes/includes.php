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
include 'classes/I_Draw.php';
// Klassen
include 'classes/Logger.php';
include 'classes/Spielfeld.php';
include 'classes/Game.php';
include 'classes/View.php';
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
// TemplateLoader
include 'templates/ContentLoader.php';

/**
 * For Debuggin
 */
include '../freaky_functions/freaky_functions.php';
?>