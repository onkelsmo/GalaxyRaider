<?php 
class ContentLoader {
    private static $map = array();
    private static $actualRaiderPosition = array();
    private static $actualEventPositions = array();
    
    public static function setMap(array $map){
        self::$map = $map;
    }
    public static function setActualRaiderPosition(array $raiderPosition){
        self::$actualRaiderPosition = $raiderPosition;
    }
    public static function setActualEventPositions(array $eventPosition){
        self::$actualEventPositions = $eventPosition;
    }
    public static function getInstance(){
	if (self::$instance == null){
            self::$instance = new ContentLoader();
	}
	return self::$instance;
    }
    protected function __construct(){}
    private function __clone(){}
    
    /*
        array(1,1,1,'E',1),
	array(1,0,0,0,1),
	array(1,0,0,0,1),
	array(1,0,0,0,1),
	array(1,'S',1,1,1)
     */
    public static function run(Spielfeld $spielfeld, Raider $raider, array $eventArray) {
        self::setMap($spielfeld->getSize());
        self::setActualRaiderPosition($raider->getPosition());
        
        foreach ($eventArray as $event) {
            self::$actualEventPositions[] = $event->getPosition();
        }
        
        // Setting the positions of events and raider in map array
        foreach (self::$actualEventPositions as $eventPosition) {
            self::$map[$eventPosition[0]][$eventPosition[1]] = 'Ev';
        }
        self::$map[self::$actualRaiderPosition[0]][self::$actualRaiderPosition[1]] = 'R';
               
        echo "<table class=\"spielfeld\">";
        for ($i = 0; $i <= 4; $i++) {
            echo '<tr>';
            for ($j = 0; $j <= 4; $j++) {
                echo "<td>".self::$map[$i][$j]."</td>";
            }
            echo '</tr>';
        }
        echo "</table>";
    }
    
    public function updateMap() {
        
    }
}
