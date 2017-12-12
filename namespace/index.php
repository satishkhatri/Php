<?php
/**
 * Created by PhpStorm.
 * User: Satish Khatri
 * Date: 12/09/2017
 * Time: 01:51 PM
 */

require __DIR__.'/vendor/autoload.php';
use Rych\Random\Random;

echo (new Random())->getRandomInteger(1,6);
