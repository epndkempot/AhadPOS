<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "ahadpos";

// disable error message level E_NOTICE
//error_reporting(E_ALL);
error_reporting(E_ERROR & ~E_NOTICE);


// Koneksi dan memilih database di server
mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");

session_start();





// ================= STOP KONFIGURASI ==========================



?>
