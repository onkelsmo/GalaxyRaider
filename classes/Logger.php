<?php
/**
*
* Logger-Klasse - erstellt und bearbeitet die Log-Datei
* Bsp.: 'log-130202.txt'
*
* @author SmO
* @since 01.02.2013
*
**/
class Logger
{
	// Eigenschaften
	private static $file;
	private static $filename;
	private static $timestamp;
	private static $date;
	
	// Konstruktor
	public function __construct()
	{
		self::$timestamp = time();
		self::$date = date("ymd", self::$timestamp);
		self::$filename = "log-".self::$date.".txt";
		
		self::$file = fopen(self::$filename, "a+");	
	}
	
	// Destruktor
	public function __destruct()
	{
		fclose(self::$file);
	}
	
	// Methoden
	/**
	 * log - schreibt den Inhalt von $message in die im Konstruktor erzeugte Datei
	 * 
	 * @param string $message
	 */
	public static function log($message)
	{
		if(self::$file != null)
		{
			self::$date = date("H:i:s",self::$timestamp);
			fwrite(self::$file, self::$date." ".$message."\n");
		}
	}
	
	public static function readLog($timestamp)
	{
		// TODO: Logfile nach Timestamp ausgeben
	} 
}
?>