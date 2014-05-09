<?php 
class ContentLoader {
    private $map = array();
    
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
    public function run() {
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
    
    /**
     * TODO
     */
    public function updateMap() {
        //
    }
}
