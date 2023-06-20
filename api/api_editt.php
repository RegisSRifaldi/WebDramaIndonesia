<?php
require_once('./config/koneksi.php');
$data = json_decode(file_get_contents("php://input"));

if ($data->id_drama ?? 'None') {
    $id_drama = $data->id_drama;
    $gambar= $data->gambar;
    $judul = $data->judul;
    $genre = $data->genre;
    $tanggal_tayang = $data->tanggal_tayang;
    $sinopsis = $data->sinopsis;
    $sutradara = $data->sutradara;
    $pemeran= $data->pemeran;
    
    $sql = $conn->prepare("UPDATE drama SET gambar=?, judul=?, genre=?, tanggal_tayang=?, sinopsis=?, sutradara=?, pemeran=? WHERE id_drama=?");
    $sql->bind_param('ssssssss', $gambar, $judul, $genre, $tanggal_tayang, $sinopsis, $sutradara, $pemeran, $id_drama);
	$sql->execute();
    if ($sql) {
		echo json_encode(array('RESPONSE' => 'SUCCESS'));
		// header("location:../../readapi/edit.php");
	} else {
		echo json_encode(array('RESPONSE' => 'FAILED'));
	}
} else {
	echo "GAGAL";
}