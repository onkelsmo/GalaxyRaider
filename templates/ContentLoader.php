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
        
        
        var_dump($this->actualEventPositions);
                
        echo "<table class=\"spielfeld\">";
        for ($i = 0; $i <= 4; $i++) {
            echo '<tr>';
            for ($j = 0; $j <= 4; $j++) {
                if ($i == $this->actualRaiderPosition[0] && $j == $this->actualRaiderPosition[1]) {
                    echo "<td>R</td>";
                } else {
                    echo "<td>{$this->map[$i][$j]}</td>";
                }
            }
            echo '</tr>';
        }
        echo "</table>";
    }
    
    /**
     * TODO
     */
    public function updateMap() {
        //
    }
}
