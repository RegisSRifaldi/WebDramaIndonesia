<?php
// Mengimpor file koneksi.php
require_once '../config/koneksi.php';

// Mengeksekusi query untuk mengurutkan genre dari A sampai Z
$query = "SELECT * FROM drama ORDER BY judul ASC";
$result = $conn->query($query);

// Membuat array kosong untuk menyimpan data hasil query
$data = array();

// Memasukkan hasil query ke dalam array
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Mengkonversi array menjadi format JSON
$json = json_encode($data);

// Mengirimkan respons JSON ke klien
header('Content-Type: application/json');
echo $json;

// Menutup koneksi
$conn->close();
?>
