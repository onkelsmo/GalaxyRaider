<?php 
class ContentLoader {
    private $map = array();
    private $actualRaiderPosition = array();
    private $actualEventPositions = array();
    
    public function __construct(Spielfeld $spielfeld) {
        $this->map = $spielfeld->getSize();
    }
    
    /*
        array(1,1,1,'E',1),
	array(1,0,0,0,1),
	array(1,0,0,0,1),
	array(1,0,0,0,1),
	array(1,'S',1,1,1)
     */
    public function run(Raider $raider, $eventArray) {
        $this->actualRaiderPosition = $raider->getPosition();
        
        foreach ($eventArray as $event) {
            $this->actualEventPositions[] = $event->getPosition();
        }
        
        // Setting the positions of events and raider in map array
        foreach ($this->actualEventPositions as $eventPosition) {
            $this->map[$eventPosition[0]][$eventPosition[1]] = 'Ev';
        }
        $this->map[$this->actualRaiderPosition[0]][$this->actualRaiderPosition[1]] = 'R';
               
        echo "<table class=\"spielfeld\">";
        for ($i = 0; $i <= 4; $i++) {
            echo '<tr>';
            for ($j = 0; $j <= 4; $j++) {
                echo "<td>{$this->map[$i][$j]}</td>";
            }
            echo '</tr>';
        }
        echo "</table>";
    }
}
