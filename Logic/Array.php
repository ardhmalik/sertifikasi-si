<?php
/**
 * $newArray
 * Variabel untuk menyimpan nilai array
 */ 
$newArray = [];
/**
 * $qty
 * Variabel untuk menentukan jumlah array yang dibuat
 */
$qty = 6;

// Perulangan for untuk melakukan generate array
for ($i=0; $i < $qty; $i++) {
    // Me-generate bilangan integer dari 1 - 100
    $random = mt_rand(1, 100);
    // Menyimpan bilangan ke variabel $newArray
    array_push($newArray, $random);
}

/**
 * getArrays()
 * Fungsi yang digunakan untuk mencetak nilai dari $newArray
 * Parameter $arr menyatakan data array  
 */
function getArrays($arr)
{
    /**
     * global $newArray
     * Mendefinisikan ulang variabel $newArray yang berada di luar fungsi
     */
    global $newArray;
    
    // Perulangan untuk mencetak array
    for ($i=0; $i <= count($arr); $i++) { 
        if ($i < count($arr)-1) {
            echo "$arr[$i], ";
        } else {
            echo $arr[$i];
        }
    }
}
?>