<?php
/**
 * Created by PhpStorm.
 * User: mehmetgok
 * Date: 5.05.2019
 * Time: 16:00
 */

// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
    public function getLuckyNumberHtml()
    {
        $num = $this->getRandomNumber(0,100);
        return new Response(
            '<html><body>Lucky number: '.$num.'</body></html>'
        );
    }

    public function getRandomNumber($min,$max){
        $number = random_int($min, $max);
        return $number;
    }
}