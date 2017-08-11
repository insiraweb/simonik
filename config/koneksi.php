<?php
//http://www.insiraweb.com

$host = 'localhost'; 	// nama server lokal
$user = 'root';			// nama user mysql
$pass = '';				// password mysql
$dbname ='appmegatim1'; //nama database yang digunakan

try {
  $konek = new PDO("mysql:host={$host};dbname={$dbname}",$user,$pass);
  $konek->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $ex) {
  print("Koneksi Gagal!:" . $ex->getMessage() . "<br>");
  die();
}
?>
