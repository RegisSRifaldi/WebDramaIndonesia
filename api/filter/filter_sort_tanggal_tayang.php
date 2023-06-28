<?php
// Mengimpor file koneksi.php
require_once '../config/koneksi.php';

// Mendapatkan nilai tanggal mulai dari parameter GET
$tanggal_tayang = $_GET['tanggal_tayang'];

// Mengeksekusi query untuk melakukan filter dan pengurutan
$query = "SELECT * FROM drama WHERE tanggal_tayang >= '$tanggal_tayang' ORDER BY tanggal_tayang ASC";
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
