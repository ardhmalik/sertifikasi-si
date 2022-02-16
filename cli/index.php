<?php
class Algorithm
{
    private $new_array;

    public function __construct()
    {
        $this->new_array = [];
    }

    public function index()
    {
        echo "\n============== MENU ==============\n";
        echo "~:| Algorithm Implementation |:~ \n";
        echo "[1] Input Angka \n";
        echo "[2] Sorting \n";
        echo "[3] Searching \n";
        echo "[4] Selesai \n";
        echo "Masukkan pilihan [1, 2, 3, 4] : ";
        $input = trim(fgets(STDIN));

        switch ($input) {
            case 1:
                $this->input_angka();
                break;
            case 4:
                $this->print_array($this->new_array);
                echo "\n>>>>>>>>> KELUAR PROGRAM >>>>>>>>>";
                break;
            default:
                $this->index();
                break;
        }
    }

    public function input_angka()
    {
        echo "\n========== INPUT_ANGKA ==========\n";
        echo "Masukkan jumlah nilai tugas: ";
        
        $qty = trim(fgets(STDIN));

        if ($qty <= 0 ) {
            echo "Angka harus lebih dari 0!\n";
            $this->input_angka();
        } elseif ($qty > 10) {
            echo "Maksimal 10 angka!\n";
            $this->input_angka();
        }

        echo "Input angka secara acak! \n";

        for ($i=0; $i < $qty; $i++) { 
            $no = $i+1;
            echo "Angka ke-$no : ";
            $int = trim(fgets(STDIN));

            if (strlen($int) <= 2) {
                array_push($this->new_array, $int);
            } else {
                echo "Masukkan angka dua digit!\n";
                $i -= 1;
            }
        }

        // $qty = 0;

        $this->index();
        // var_dump($this->new_array);
        // die;
    }

    public function print_array($array)
    {
        $arr = implode(", ", $array);
        echo "[ $arr ]";
    }
}

$algorithm = new Algorithm();
$algorithm->index();



?>