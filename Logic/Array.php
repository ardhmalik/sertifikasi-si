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
 * Variabel untuk menyimpan nilai array yang dibuat
 */
$arr = 5;

/**
 * Perulangan for untuk melakukan generate array
 * Me-generate bilangan integer dari 1 - 100
 */
for ($count; $count < $arr; $count++) {
    $random = mt_rand(1, 100);
    array_push($newArray, $random);
}
?>