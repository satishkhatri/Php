<?php
/**
 * Created by PhpStorm.
 * User: Satish Khatri
 * Date: 11/09/2017
 * Time: 01:09 PM
 */

class prot {
    protected $name;


    public function __construct(){
        $this->name = "satish";
    }

}

class prot1 extends prot{

    protected $lastname;

    public function display(){

        $this->lastname= "khatri";
        return $this->name.$this->lastname;


    }
}
$obj= new prot1();
echo $obj->display();