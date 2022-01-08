<?php
/**
 * Connect to file Array, Sorting & Searching
 */
include $_SERVER['DOCUMENT_ROOT'] . "/Logic/Array.php";
include $_SERVER['DOCUMENT_ROOT'] . "/Logic/Searching.php";
include $_SERVER['DOCUMENT_ROOT'] . "/Logic/Sorting.php";

/**
 * getArrays()
 * Fungsi yang digunakan untuk mencetak nilai dari $newArray
 */
function getArrays()
{
    /**
     * global $newArray
     * Digunakan untuk mengakses variabel $newArray
     * yang berada di luar fungsi
     */
    global $newArray;

    // Perulangan untuk mencetak array
    for ($i=0; $i <= count($newArray); $i++) { 
        if ($i < count($newArray)-1) {
            echo $newArray[$i] . ", ";
        } else {
            echo $newArray[$i];
        }
    }
}
?>