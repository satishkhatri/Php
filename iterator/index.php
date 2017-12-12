<?php
/**
 * Created by PhpStorm.
 * User: Satish Khatri
 * Date: 12/09/2017
 * Time: 02:48 PM
 */

class BasicIterator extends IteratorIterator {

    public function __construct($pathToFile) {
        // Call the parent constructor with an SplFileObject (also Traversable) for the given path.
        parent::__construct(new SplFileObject($pathToFile, 'r'));

        // These set up the inner SplFileObject's properties to process CSV.
        $file = $this->getInnerIterator();
        $file->setFlags(SplFileObject::READ_CSV);
        $file->setCsvControl(',', '"', "\\");
    }
}

class FilterRaw extends FilterIterator{

    public function accept(){

        $current= $this->getInnerIterator()->current();
        if(count($current)==1){
            return false;
        }
        return true;
    }
}
$filePath = './data.csv';
$iterator = new BasicIterator($filePath);
$iterator2= new FilterRaw($iterator);

foreach ($iterator as $i => $row) {
    var_dump($row);
}
