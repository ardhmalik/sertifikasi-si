<?php
class Algorithm
{
    private $new_array;

    public function __construct()
    {
        $this->new_array = [];
    }

    private function print_array($array)
    {
        $arr = implode(", ", $array);
        echo "[ $arr ]";
    }

    private function goto_menu($res)
    {
        switch ($res) {
            case "y":
                $this->index();
                break;
            case "n":
                echo "\n>>>>>>>>> KELUAR PROGRAM >>>>>>>>>";
                die;
                break;
            default:
                $this->index();
                break;
        }
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
            case 2:
                $this->insertion_sort($this->new_array);
                break;
            case 4:
                echo "\n>>>>>>>>> KELUAR PROGRAM >>>>>>>>>";
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

        echo "----------------------------------\n";

        $this->index();
    }

    public function insertion_sort($arr)
    {
        if ($this->new_array == null) {
            echo "-----------------------------------\n";
            echo "Masukkan data angka terlebih dahulu!\n\n";
            $this->index();
        } else {
            $count = count($arr);
            
            echo "\n======== Insertion Sort ========\n";
            echo "Data array   : ";
            $this->print_array($arr);
            echo "\n";
    
            for ($i=1; $i < $count; $i++) { 
                $key = $arr[$i];
                $temp = $i - 1;
                
                while ($temp >= 0 && $key < $arr[$temp]) {
                    $arr[$temp+1] = $arr[$temp];
                    $temp = $temp - 1;
                }
        
                $arr[$temp+1] = $key;
    
                echo "\nIterasi ke-$i : ";
                $this->print_array($arr);
            }
            
            echo "\n\nHasil sorting : ";
            $this->print_array($arr);
            echo "\n";
            echo "--------------------------------\n";
            echo "Kembali ke halaman menu [y/n]? ";
            $res = trim(fgets(STDIN));
            echo "--------------------------------\n";
            $this->goto_menu($res);
        }
    }
}

$algorithm = new Algorithm();
$algorithm->index();

?>