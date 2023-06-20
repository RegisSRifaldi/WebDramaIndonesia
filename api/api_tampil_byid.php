<?php
    require_once('./config/koneksi.php');

    $myArray = array();
    if (isset($_GET['id_drama'])) {
        $id_drama = $_GET['id_drama'];

        if ($result = mysqli_query($conn, "SELECT * FROM drama WHERE id_drama=$id_drama")) {
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $myArray[] = $row;
            }
            mysqli_close($conn);
            echo json_encode($myArray);
        }
    }
?>