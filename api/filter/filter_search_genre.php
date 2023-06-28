<?php
// Mengimpor file koneksi.php
require_once '../config/koneksi.php';

// Mendapatkan nilai genre dari parameter GET
$genre = $_GET['genre'];

// Mengeksekusi query untuk melakukan filter berdasarkan genre
$query = "SELECT * FROM drama WHERE genre LIKE '%$genre%'";
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
