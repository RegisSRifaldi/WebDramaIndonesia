<?php
require_once('./config/koneksi.php');

if (isset($_GET['id_drama'])) {
    $id_drama  = $_GET['id_drama'];
    $sql = $conn->prepare("DELETE FROM drama WHERE id_drama=?");
    $sql->bind_param('i', $id_drama);
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










// Backup
// require_once('./config/koneksi.php');
// $data = json_decode(file_get_contents("php://input"));

// if ($data->id_drama!=null) {
//     $id_drama   = $data->id_drama;
//     $sql        = $conn->prepare("DELETE FROM drama WHERE id_drama=?");
//     $sql->bind_param('i', $id_drama);
//     $sql->execute();
//     if ($sql) {
//         echo json_encode(array('RESPONSE' => 'SUCCESS'));
//         //header("location:../readapi/tampil.php");
//     } else {
//         echo json_encode(array('RESPONSE' => 'FAILED'));
//     }
// } else {
//     echo "GAGAL";
// }