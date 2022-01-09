<?php
/**
 * insertionSort($arr)
 * Fungsi untuk teknik Insertion pada Algoritma Sorting
 * Parameter $arr menyatakan data array  
 */
function insertionSort($arr) 
{
    /**
     * global $newArray
     * Mendefinisikan ulang variabel $newArray yang berada di luar fungsi
     */
    global $newArray;
    /**
     * $jml
     * Variabel untuk menghitung panjang array $arr
     */
    $jml = count($arr);

    // Perulangan sebanyak panjang array
    for ($i=1; $i < $jml; $i++) { 
        /**
         * $key
         * Variabel pembantu untuk proses penukaran data array
         */
        $key = $arr[$i];
        /**
         * $j
         * Variabel untuk menyimpan indeks array
         */
        $j = $i - 1;

        /**
         * Perulangan untuk melakukan pengecekan dan penukaran data array
         */
        while ($j >= 0 AND $key < $arr[$j]) {
            // Melakukan penukaran data
            $arr[$j+1] = $arr[$j];
            // Mengurangi nilai $j untuk menghentikan perulangan
            $j = $j - 1;
        }
        // Melakukan penukaran data
        $arr[$j+1] = $key;

        // Cetak hasil iterasi ke 1 - n
        echo "Iterasi ke-$i <br>";
        getArrays($arr);
        echo "<br>";
    }
    
    echo "<h3 class='text-center mt-2'><mark>[ ";
    getArrays($arr);
    echo " ]</mark></h3>";
}

/**
 * swapArray()
 * Fungsi untuk melakukan penukaran variabel dengan operator XOR
 */
// function swapArrayXor($x, $y) {
//     global $newArray;

//     if ($y < $x) {
//         $x1 = $x ^ $y;
//         $y1 = $x1 ^ $y;
//         $x2 = $x1 ^ $y1;
//     }

//     echo "array ke-1: $x2 <br>";
//     echo "array ke-n: $y1 <br>";
// }

?>