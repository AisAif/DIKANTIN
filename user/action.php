<?php

session_start();

require "./../app/database.php";
require "./../app/repository/makanan_repository.php";
require "./../app/repository/keranjang_repository.php";
require "./../app/middleware.php";

if (!isLogin() || !isUser()) {
    header("Location: ./../index.php");
}

if (isset($_POST['tambah_keranjang'])) {
    $id_makanan = $_POST['id_makanan'];
    $id_keranjang = $_POST['id_keranjang'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];

    // var_dump($id_makanan, $id_keranjang, $jumlah, $harga);
    $msg = addMakananToKeranjang($con, $id_makanan, $id_keranjang, $jumlah, $harga);
    header("Location: ./foods.php?msg=$msg");
}

if (isset($_POST['kurang_keranjang'])) {
    $id_makanan_keranjang = $_POST['id_makanan_keranjang'];
    $id_keranjang = $_POST['id_keranjang'];

    $msg = minMakananToKeranjang($con, $id_makanan_keranjang, $id_keranjang);
    header("Location: ./foods.php?msg=$msg");
}

if (isset($_POST['belanja'])) {
    $informasi_tambahan = $_POST['informasi_tambahan'];
    $id_keranjang = $_POST['id_keranjang'];
    $id_user = $_POST['id_user'];

    $msg = belanjaNow($con, $informasi_tambahan, $id_keranjang, $id_user);
    header("Location: ./foods.php?msg=$msg");
}