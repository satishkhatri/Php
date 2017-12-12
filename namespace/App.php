<?php
namespace app;
use project\Testing as ProjectTesting;

/**
 * Created by PhpStorm.
 * User: Satish Khatri
 * Date: 12/09/2017
 * Time: 12:36 PM
 */
include 'project.php';

class Testing {

    public static function get(){
        echo "app.g.project \n";
    }
}

echo ProjectTesting::get();