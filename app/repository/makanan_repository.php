<?php

function getAllMakanan($con) {
    $query = "SELECT * FROM makanan WHERE jenis='makanan'";
    $result = mysqli_query($con, $query);
    return $result;
}

function getAllMinuman($con) {
    $query = "SELECT * FROM makanan WHERE jenis='minuman'";
    $result = mysqli_query($con, $query);
    return $result;
}

function getAllMenu($con) {
    $query = "SELECT * FROM makanan";
    $result = mysqli_query($con, $query);
    return $result;
}

function getMakanan($con, $id_makanan) {
    $query = "SELECT * FROM makanan WHERE id_makanan=$id_makanan LIMIT 1";
    $result = mysqli_query($con, $query)->fetch_assoc();
    return $result;
}

function addMakanan($con, $nama, $stok, $harga, $jenis) {
    $query = "INSERT INTO `makanan`(`id_makanan`, `nama`, `stok`, `harga`, `jenis`) VALUES (NULL,'$nama','$stok','$harga','$jenis')";
    if (mysqli_query($con, $query)) {
        return "Menu Berhasil Ditambah";
    } else {
        return "Menu Gagal Ditambah" . mysqli_error($con);
    }
}

function updateMakanan($con, $id_makanan, $nama, $stok, $harga, $jenis) {
    $query = "UPDATE `makanan` SET `nama`='$nama',`stok`='$stok',`harga`='$harga',`jenis`='$jenis' WHERE id_makanan='$id_makanan'";
    if (mysqli_query($con, $query)) {
        return "Menu Berhasil Diubah";
    } else {
        return "Menu Gagal Diubah" . mysqli_error($con);
    }
}

function deleteMakanan($con, $id_makanan) {
    $query = "DELETE FROM `makanan` WHERE id_makanan='$id_makanan'";
    if (mysqli_query($con, $query)) {
        return "Menu Berhasil Dihapus";
    } else {
        return "Menu Gagal Dihapus" . mysqli_error($con);
    }
}