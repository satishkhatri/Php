<?php
/**
 * Created by PhpStorm.
 * User: Satish Khatri
 * Date: 13/09/2017
 * Time: 11:38 AM
 */
$arr= array(2,3,4,4,5,6,7,8,9,7);
$natch = array_filter($arr,function($item){
    return ($item %2 ==0);
});

print_r($natch);


