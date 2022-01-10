<?php
/**
 * linearSearch($arr)
 * Fungsi untuk teknik Insertion pada Algoritma Sorting
 * Parameter $arr menyatakan data array  
 */
function linearSearch($num, $arr)
{
    /**
     * global $newArray
     * Mendefinisikan ulang variabel $newArray yang berada di luar fungsi
     */
    global $newArray;

    $i = 0;
    $result = false;
    $jml = count($arr);

    while ($i < $jml) {
        if ($arr[$i] == $num) {
            echo "$arr[$i] is TRUE <br>";
            $result = true;
            // Breaking the loop if the number is found
            break; 
        }
        $i++;
    }

    if (!$result) {
        echo "$num was not found . . . <br>";
    }
}

/**
 * binarySearch($arr)
 * Fungsi untuk teknik Insertion pada Algoritma Sorting
 * Parameter $arr menyatakan data array  
 */
function binarySearch($num, $arr)
{
    /**
     * global $newArray
     * Mendefinisikan ulang variabel $newArray yang berada di luar fungsi
     */
    global $newArray;

    // Mengurutkan array secara ascending jika array belum urut
    sort($arr);
    echo "[ ";
    getArrays($arr);
    echo " ]<br>";

    // Index of left (first) value in array
    $l = 0;
    // Index of right (last) value in array
    $r = count($arr)-1;

    $result = false;

    while ($l < $r && !$result) {
        // Index of middle value in array
        $m = (int) round(($l * $r) / 2);

        if ($arr[$m] == $num) {
            $result = true;
            echo "<br> Value: $arr[$m] is TRUE!";
        } elseif ($arr[$m] < $num) {
            // Here we're cutting left part (from left to middle) and now our "middle + 1" is the left value of divided array
            $l = $m + 1;
        } else {
            # "middle - 1" value is the right value of divided array
            $r = $m - 1;
        }
    }

    if (!$result) {
        echo "<br>$num was not found . . .";
    }
}
?>