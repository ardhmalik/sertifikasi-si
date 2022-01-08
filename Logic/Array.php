<?php
/**
 * $newArray
 * Variabel untuk menyimpan array
 */ 
$newArray = [];
/**
 * $count
 * Variabel untuk melakukan loop generate array
 */
$count = 0;
/**
 * $arr
 * Variabel untuk menentukan jumlah array yang dibuat
 */
$arr = 5;

// Perulangan for untuk melakukan generate array
for ($count; $count < $arr; $count++) {
    // Me-generate bilangan integer dari 1 - 100
    $random = mt_rand(1, 100);
    // Menyimpan bilangan ke variabel $newArray
    array_push($newArray, $random);
}

/**
 * getArrays()
 * Fungsi yang digunakan untuk mencetak nilai dari $newArray
 */
function getArrays()
{
    /**
     * global $newArray
     * Mendefinisikan ulang variabel $newArray yang berada di luar fungsi
     */
    global $newArray;
    
    // Perulangan untuk mencetak array
    for ($i=0; $i <= count($newArray); $i++) { 
        if ($i < count($newArray)-1) {
            echo "$newArray[$i], ";
        } else {
            echo $newArray[$i];
        }
    }
}

/**
 * getArrayIndex($i)
 * Fungsi untuk mencetak nilai array berdasarkan indeks yang diinginkan
 * Parameter $i menyatakan indeks
 */
function getArrayIndex($i)
{
    /**
     * global $newArray
     * Mendefinisikan ulang variabel $newArray yang berada di luar fungsi
     */
    global $newArray;

    echo $newArray[$i];
}
?>