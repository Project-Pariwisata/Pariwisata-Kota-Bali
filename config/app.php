<?php
include '../config/connection.php';

function getWisata($conn) {
    $condition = [];

    //filter untuk dropdown
    if (isset($_GET['sub_kategori']) && $_GET['sub_kategori'] != "") {
        $id = $_GET['sub_kategori'];
        $condition[] = "sub_kategori_id = $id";
    }

    //filter untuk search
    if (isset($_GET['search']) && $_GET['search'] != "") {
        $search = $_GET['search'];
        $condition[] = "nama_wisata LIKE '%$search%'";
    }

    //menggabungkan kondisi
    $where = "";
    if (count($condition) > 0) {
        $where = "WHERE " . implode(" AND ", $condition);
    }

    $query = "SELECT * FROM wisata $where";
    return mysqli_query($conn, $query);
}
?>