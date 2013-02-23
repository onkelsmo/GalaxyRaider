<?php
/**
*
* Einstiegspunkt
*
* @author SmO
* @since 01.02.2013
*
**/
include 'includes/includes.php';

/**
 * Struktur des Spielfelds
 *
 * 1,1,1,E,1
 * 1,0,0,0,1
 * 1,0,0,0,1
 * 1,0,0,0,1
 * 1,S,1,1,1
 *
 */
$game = new Game();
$game->start();


$theRaider = $game->getRaider();
$theRaider->move(3,1);


dump($game);
?>