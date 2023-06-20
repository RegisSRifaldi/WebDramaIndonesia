<?php
require_once('./config/koneksi.php');

if (isset($_POST['id_drama']) && isset($_POST['gambar']) && isset($_POST['judul']) && isset($_POST['genre']) && isset($_POST['tanggal_tayang']) && isset($_POST['sinopsis']) && isset($_POST['sutradara']) && isset($_POST['pemeran'])) {
	$id_drama   	= $_POST['id_drama'];
	$gambar   	    = $_POST['gambar'];
	$judul          = $_POST['judul'];
	$genre 			= $_POST['genre'];
	$tanggal_tayang = $_POST['tanggal_tayang'];
	$sinopsis       = $_POST['sinopsis'];
	$sutradara      = $_POST['sutradara'];
	$pemeran        = $_POST['pemeran'];
	$sql = $conn->prepare("INSERT INTO drama (id_drama, gambar, judul, genre, tanggal_tayang, sinopsis, sutradara, pemeran) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
	$sql->bind_param('ssssssss', $id_drama, $gambar, $judul, $genre, $tanggal_tayang, $sinopsis, $sutradara, $pemeran);
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
