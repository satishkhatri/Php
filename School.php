<?php
/**
 * Created by PhpStorm.
 * User: Satish Khatri
 * Date: 12/09/2017
 * Time: 11:55 AM
 */

class ValdateArgument extends InvalidArgumentException{

    public function __construct($message='invalid data',$code = 0, $previous = null){
        return parent::__construct($message,$code,$previous);
    }

}
function add($a,$b){
    if($a<6):
        throw new ValdateArgument;
        endif;
    try{
        validate_first_number($a);
    }catch (Exception $e){
        throw $e;
    }

    return $a+$b;
}
function validate_first_number($a){

    if($a>14):
        throw new ValdateArgument;
        endif;
}

try{
    echo add(15,5);
}catch (Exception $e){
    echo $e->getMessage();
    echo"\n";

}finally{
    echo "hello";
}

