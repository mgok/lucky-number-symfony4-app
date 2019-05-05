<?php
/**
 * Created by PhpStorm.
 * User: mehmetgok
 * Date: 5.05.2019
 * Time: 18:27
 */
use PHPUnit\Framework\TestCase;
use App\Controller\LuckyController;

class LuckyControllerTest extends TestCase {
    public function testNumberInRange(){
        $randNum = new LuckyController();
        $randNumI = $randNum->getRandomNumber(1,10);
        echo "The lucky number is " . $randNumI . "\n";
        echo "It should between 1 and 10 (included)";
        $this->assertEquals(true,($randNumI>=1 and $randNumI<=10)?true:false);
    }
}