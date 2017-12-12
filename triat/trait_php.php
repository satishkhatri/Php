<?php
/**
 * Created by PhpStorm.
 * User: Satish Khatri
 * Date: 12/09/2017
 * Time: 09:48 AM
 */

trait Log{

    protected function log($message){
        echo"{$message}\n";
    }
}

class Table {
    use Log;

    public function save(){
        $this->log("save start");
    }
}

(new Table())->save();