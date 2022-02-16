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
        echo "~:| Algorithm Implementation |:~ \n\n";
        echo "[1] Input Angka \n";
        echo "[2] Sorting \n";
        echo "[3] Searching \n";
        echo "[4] Selesai \n\n";
        echo "Masukkan pilihan [1, 2, 3, 4] : ";
        $input = trim(fgets(STDIN));
        echo "----------------------------------\n";

        switch ($input) {
            case 1:
                $this->input_angka();
                break;
            case 4:
                echo "\n>>>>>>>>> KELUAR PROGRAM >>>>>>>>>";
                var_dump($this->new_array);
                die;
                break;
            default:
                $this->index();
                break;
        }
    }

    public function input_angka()
    {
        if ($this->new_array == !null) {
            echo "Data sudah tersedia!\n";
            $this->index();
        }

        echo "\n========== INPUT ANGKA ==========\n";
        echo "Masukkan jumlah nilai tugas: ";
        $qty = trim(fgets(STDIN));

        if (is_numeric($qty)) {
            if ($qty <= 1) {
                echo "Minimal 2 nilai!\n";
                $this->input_angka();
            } elseif ($qty > 10) {
                echo "Maksimal 10 nilai!\n";
                $this->input_angka();
            }
        } else {
            echo "Masukkan bilangan bulat!\n";
            $this->input_angka();
        }

        echo "Input angka secara acak! \n";

        for ($i=0; $i < $qty; $i++) { 
            $no = $i+1;
            echo "Angka ke-$no : ";
            $int = trim(fgets(STDIN));

            if ($int == null) {
                echo "Masukkan angka minimal satu digit!\n\n";
                $i -= 1;
            } else {
                if ($int == 0) {
                    echo "Masukkan angka lebih dari 0!\n\n";
                    $i -= 1;
                } elseif (strlen($int) > 2) {
                    echo "Masukkan angka maksimal dua digit!\n\n";
                    $i -= 1;
                } else {
                    array_push($this->new_array, $int);
               }
            }
        }

        $this->index();
    }
}

$algorithm = new Algorithm();
$algorithm->index();

?>