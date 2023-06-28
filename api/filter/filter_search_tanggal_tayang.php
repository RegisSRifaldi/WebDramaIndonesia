<?php
// Mengimpor file koneksi.php
require_once '../config/koneksi.php';

// Mendapatkan nilai kata kunci pencarian dari parameter GET
$tanggal_tayang = $_GET['tanggal_tayang'];

// Mengeksekusi query untuk melakukan pencarian
$query = "SELECT * FROM drama WHERE tanggal_tayang LIKE '%$tanggal_tayang%'";
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
