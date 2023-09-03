<?php

session_start();

require "./../app/database.php";
require "./../app/repository/makanan_repository.php";
require "./../app/repository/pesanan_repository.php";
require "./../app/middleware.php";

if (!isLogin() || !isAdmin()) {
    header("Location: ./../index.php");
}

if (isset($_POST['lunas_pesanan'])) {
    $id_pesanan = $_POST['id_pesanan'];

    $msg = setLunasPesanan($con, $id_pesanan);
    header("Location: ./index.php?msg=$msg");
}

if (isset($_POST['hapus_pesanan'])) {
    $id_pesanan = $_POST['id_pesanan'];

    $msg = deletePesanan($con, $id_pesanan);
    header("Location: ./index.php?msg=$msg");
}

if (isset($_POST['tambah_makanan'])) {
    $nama = $_POST['nama'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $jenis = $_POST['jenis'];

    $msg = addMakanan($con, $nama, $stok, $harga, $jenis);
    header("Location: ./menu.php?msg=$msg");
}

if (isset($_POST['ubah_makanan'])) {
    $id_makanan = $_POST['id_makanan'];
    $nama = $_POST['nama'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $jenis = $_POST['jenis'];

    $msg = updateMakanan($con, $id_makanan, $nama, $stok, $harga, $jenis);
    header("Location: ./menu.php?msg=$msg");
}

if (isset($_POST['hapus_makanan'])) {
    $id_makanan = $_POST['id_makanan'];

    $msg = deleteMakanan($con, $id_makanan);
    header("Location: ./menu.php?msg=$msg");
}