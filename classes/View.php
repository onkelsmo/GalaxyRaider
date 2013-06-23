<?php
/**
*
* Klasse zum Anzeigen von Header, Footer und Content
*
* @author SmO
* @since 23.06.2013
*
**/
class View
{
	/**
	 * getHeader - echoes the header template
	 */
	static function getHeader()
	{
		echo file_get_contents("templates/header.php");
	}
	
	/**
	 * getFooter - echoes the footer template
	 */
	static function getFooter()
	{
		echo file_get_contents("templates/footer.php");
	}
	
	/**
	 * getContent - echoes the content i.e. 'spielfeld', 'raider', 'event'
	 * 
	 * @param String $content
	 */
	static function getContent($content)
	{
		$content = strtolower($content);
		echo file_get_contents("templates/" . $content . ".php");
	}
}

?>