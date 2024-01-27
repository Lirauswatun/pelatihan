<?php
$coon = mysqli_connect("localhost", "root", "pelatihan lp");
if ($coon == true){
    echo "berhasil terhubung ke database";
} else {
    echo "gagal terhubung ke database";
}