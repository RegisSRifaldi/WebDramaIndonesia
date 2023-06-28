<?php
// Mengimpor file koneksi.php
require_once '../config/koneksi.php';

// Mendapatkan nilai kata kunci pencarian dari parameter GET
$sutradara = $_GET['sutradara'];

// Mengeksekusi query untuk melakukan pencarian
$query = "SELECT * FROM drama WHERE sutradara LIKE '%$sutradara%'";
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
