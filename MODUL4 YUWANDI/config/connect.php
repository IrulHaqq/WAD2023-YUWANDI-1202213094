<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$servername = "localhost:3308";
$username = "root";
$passwd = "";
$database = "modul4_wad";

$conn = mysqli_connect($servername,$username,$passwd,$database);
// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if (!$conn) {
    echo "Gagal terkoneksi!";
}
// 
 
?>