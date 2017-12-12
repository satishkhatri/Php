<?php
/**
 * Created by PhpStorm.
 * User: Satish Khatri
 * Date: 12/09/2017
 * Time: 02:13 PM
 */
interface TableInterface {

    public function save(array $data);
}


class Table implements TableInterface{

    public function save( array $data){
        return $data['1'];
    }


}
$satish= array('satish','khatri');
echo (new Table())->save($satish);