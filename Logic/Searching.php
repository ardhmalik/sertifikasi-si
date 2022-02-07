<?php
/**
 * linearSearch($arr)
 * Fungsi untuk teknik Insertion pada Algoritma Sorting
 * Parameter $arr menyatakan data array  
 */
function linearSearch($num, $arr)
{
    $i = 0;
    $result = false;
    $jml = count($arr);

    while ($i < $jml) {
        if ($arr[$i] == $num) {
            echo "Result: Number $arr[$i] was found <br>";
            $result = true;
            // Breaking the loop if the number is found
            break; 
        }
        $i++;
    }

    if (!$result) {
        echo "Result: $num was not found . . . <br>";
    }
}
?>