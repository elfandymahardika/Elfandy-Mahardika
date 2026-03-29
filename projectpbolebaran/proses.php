<?php
require_once "class/Data.php";

// Ambil data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$umur = $_POST['umur'];

// Buat object
$data = new Data($nama, $email, $umur);

// Tampilkan hasil
echo $data->tampilkanData();
?>