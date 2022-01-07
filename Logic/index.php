<?php
/**
 * Connect to file Sorting & Searching
 */
include $_SERVER['DOCUMENT_ROOT'] . "/Logic/Searching.php";
include $_SERVER['DOCUMENT_ROOT'] . "/Logic/Sorting.php";

/**
 * Class MyArray()
 * For generate new array 
 */
class myArray
{
    public function getArray($arr) {
        $newArray = [];
        $count = 0;
        
        for ($count; $count < $arr; $count++) {
            $random = mt_rand(1, 100);
            array_push($newArray, $random);
        }
        
        for ($i=0; $i <= count($newArray); $i++) { 
            if ($i < count($newArray)-1) {
                echo $newArray[$i] . ", ";
            } else {
                echo $newArray[$i];
            }
        }
    }
}

// Instansiasi myArray 
$myArray = new myArray();

?>