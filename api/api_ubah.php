<?php
require_once('./config/koneksi.php');

if (isset($_POST['id_drama'])) {
    $id_drama       = $_POST['id_drama'];
    $gambar         = $_POST['gambar'];
    $judul          = $_POST['judul'];
    $genre          = $_POST['genre'];
    $tanggal_tayang = $_POST['tanggal_tayang'];
    $sinopsis       = $_POST['sinopsis'];
    $sutradara      = $_POST['sutradara'];
    $pemeran        = $_POST['pemeran'];
    $sql = $conn->prepare("UPDATE drama SET gambar=?, judul=?, genre=?, tanggal_tayang=?, sinopsis=?, sutradara=?, pemeran=? WHERE id_drama=?");
    $sql->bind_param('ssssssss', $gambar, $judul, $genre, $tanggal_tayang, $sinopsis, $sutradara, $pemeran, $id_drama);
    $sql->execute();
    if ($sql) {
        // echo json_encode(array('RESPONSE' => 'SUCCESS'));
        header("location:../../../../WebDramaIndonesia/api/readapi/tampil.php");
    } else {
        echo json_encode(array('RESPONSE' => 'FAILED'));
    }
} else {
    echo "GAGAL";
}
