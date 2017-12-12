<?php
/**
 * Created by PhpStorm.
 * User: Satish Khatri
 * Date: 03/09/2017
 * Time: 11:31 AM
 */
$car = array(
    array('name'=>'satish','Lname'=>'khatri'),
    array('name'=>'bmw','Lname'=>'ayra'),
    array('name'=>'cmw','Lname'=>'balyana'),
    array('name'=>'abmw','Lname'=>'dusaja')
);
sort($car);

foreach($car as $vechile):
echo implode(' ',$vechile).'<br>';
endforeach;

