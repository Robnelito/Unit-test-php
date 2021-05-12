<?php
require_once("Car.php");
require_once("Mechanic.php");
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * Une voiture possede 4 pneus, 4 portes et un moteur.  
     */
    public function testACarHasAMethodToKnowIfItIsBroken()
    {
        // $a = "Hahaha";
        // $this->assertEquals("Hehehe", $a);
        $Hyundai = new Car(9);
        $Toyta = new Car(2);

        $this->assertFalse($Hyundai->isBroken());
        $this->assertTrue($Toyta->isBroken());
    }

    public function testFixWhatIsBroken()
    {
        $Hyundai = new Car(1);
        $BoayKely = new Mechanic();

        $anomalies = $BoayKely->getAnomalies($Hyundai);
        $this->assertNotEmpty($anomalies);

        // foreach ($anomalies as $anomalie) {
        //     $BoayKely->fix($Hyundai, $anomalie);
        // }
        $BoayKely->fix($Hyundai, $anomalies);

        $fixedAnomalies = $BoayKely->getAnomalies($Hyundai);
        $this->assertEmpty($fixedAnomalies);
        $this->assertFalse($Hyundai->isBroken());
    }
}
?>