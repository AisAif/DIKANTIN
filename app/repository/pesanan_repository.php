<?php

function getAllUserPesanan($con, $id_user) {
    $query = "SELECT p.*, k.total_harga FROM pesanan p JOIN keranjang k ON p.id_keranjang=k.id_keranjang WHERE p.id_user='$id_user'";
    $result = mysqli_query($con, $query);
    return $result;
}

function getUserPesanan($con, $id_pesanan) {
    $query = "SELECT p.*, k.total_harga FROM pesanan p JOIN keranjang k ON p.id_keranjang=k.id_keranjang JOIN makanan_keranjang mk ON k.id_keranjang=mk.id_keranjang WHERE id_pesanan='$id_pesanan'";
    $result = mysqli_query($con, $query)->fetch_assoc();
    return $result;
}

function getUserDetailPesanan($con, $id_pesanan) {
    $query = "SELECT mk.jumlah, mk.harga, m.* FROM pesanan p JOIN keranjang k ON p.id_keranjang=k.id_keranjang JOIN makanan_keranjang mk ON k.id_keranjang=mk.id_keranjang JOIN makanan m ON m.id_makanan=mk.id_makanan WHERE id_pesanan='$id_pesanan'";
    $result = mysqli_query($con, $query);
    return $result;
}

function getAllPesanan($con) {
    $query = "SELECT p.*, k.total_harga, u.nama, u.telepon FROM pesanan p JOIN keranjang k ON p.id_keranjang=k.id_keranjang JOIN user u ON u.id_user=p.id_user";
    $result = mysqli_query($con, $query);
    return $result;
}

function setLunasPesanan($con, $id_pesanan) {
    $query = "UPDATE `pesanan` SET `is_lunas`='1' WHERE id_pesanan='$id_pesanan'";
    if (mysqli_query($con, $query)) {
        return 'Berhasil Melakukan Pelunasan';
    } else {
        return 'Gagal Melakukan Pelunasan' . mysqli_error($con);
    }
}

function deletePesanan($con, $id_pesanan) {
    $query = "DELETE FROM `pesanan` WHERE id_pesanan='$id_pesanan'";
    if (mysqli_query($con, $query)) {
        return 'Berhasil Menghapus Pesanan';
    } else {
        return 'Gagal Menghapus Pesanan' . mysqli_error($con);
    }
}