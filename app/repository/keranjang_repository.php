<?php

function selectKeranjang($con, $id_user) {
    $query = "SELECT * FROM keranjang WHERE id_user = '$id_user' ORDER BY id_keranjang DESC LIMIT 1";
    $data = mysqli_query($con, $query)->fetch_assoc();
    return $data;
}

function addMakananToKeranjang($con, $id_makanan, $id_keranjang, $jumlah, $harga) {
    $query = "INSERT INTO `makanan_keranjang`(`id_makanan`, `id_keranjang`, `jumlah`, `harga`) VALUES ('$id_makanan','$id_keranjang','$jumlah','$harga')";
    if (mysqli_query($con, $query)) {
        $makanan_keranjang = mysqli_query($con, "SELECT * FROM `makanan_keranjang` WHERE id_keranjang=$id_keranjang ORDER BY id_makanan_keranjang DESC LIMIT 1")->fetch_assoc();
        $keranjang = mysqli_query($con, "SELECT * FROM `keranjang` WHERE id_keranjang=$id_keranjang")->fetch_assoc();

        $total_harga = $keranjang['total_harga'] + $makanan_keranjang['harga'] * $makanan_keranjang['jumlah'];
        $query_update_keranjang = "UPDATE `keranjang` SET `total_harga`='$total_harga' WHERE id_keranjang=$id_keranjang";
        if(mysqli_query($con, $query_update_keranjang)) {
            return 'Makanan Berhasil Ditambah';
        } else {
            return 'Makanan Gagal Ditambah' . mysqli_error($con);
        }

    } else {
        return 'Makanan Gagal Ditambah' . mysqli_error($con);
    }
}

function minMakananToKeranjang($con, $id_makanan_keranjang, $id_keranjang) {
    $makanan_keranjang = mysqli_query($con, "SELECT * FROM `makanan_keranjang` WHERE id_makanan_keranjang='$id_makanan_keranjang'")->fetch_assoc();
    $keranjang = mysqli_query($con, "SELECT * FROM `keranjang` WHERE id_keranjang=$id_keranjang")->fetch_assoc();
    $total_harga = $keranjang['total_harga'] - $makanan_keranjang['harga'] * $makanan_keranjang['jumlah'];

    if (mysqli_query($con, "UPDATE `keranjang` SET `total_harga`='$total_harga' WHERE id_keranjang='$id_keranjang'")) {
        if (mysqli_query($con, "DELETE FROM `makanan_keranjang` WHERE id_makanan_keranjang='$id_makanan_keranjang'")) {
            return 'Makanan Berhasil Dihapus dari Keranjang';
        } else {
            return 'Makanan Gagal Dihapus dari Keranjang' . mysqli_error($con);
        }
    } else {
        return 'Makanan Gagal Dihapus dari Keranjang' . mysqli_error($con);
    }
}

function selectAllMakananFromKeranjang($con, $id_keranjang) {
    $query = "SELECT m.nama, mk.* FROM makanan m JOIN makanan_keranjang mk ON m.id_makanan=mk.id_makanan WHERE mk.id_keranjang='$id_keranjang'";
    $data = mysqli_query($con, $query);
    return $data;
}

function belanjaNow($con, $informasi_tambahan, $id_keranjang, $id_user) {
    // var_dump($informasi_tambahan, $id_keranjang, $id_user);
    // die;
    $makanan_keranjang = mysqli_query($con, "SELECT * FROM `makanan_keranjang` WHERE id_keranjang = '$id_keranjang'");
    if ($makanan_keranjang->num_rows > 0) {    
        $tanggal_pesanan = date('Y-m-d H:i:s');
        $kode_pembayaran = strtoupper(base_convert(strtotime(date('Y-m-d H:i:s.u')),10,16));
        $query = "INSERT INTO `pesanan`(`id_pesanan`, `kode_pembayaran`, `is_lunas`, `informasi_tambahan`, `tanggal_pesanan`, `id_keranjang`, `id_user`) VALUES (NULL,'$kode_pembayaran',0,'$informasi_tambahan','$tanggal_pesanan','$id_keranjang','$id_user')";
        if (mysqli_query($con, $query)) {
            if (mysqli_query($con, "INSERT INTO `keranjang`(`id_keranjang`, `total_harga`, `id_user`) VALUES (NULL,'0','$id_user')")) {
                try {
                    // var_dump($makanan_keranjang);
                    // die;
                    foreach ($makanan_keranjang as $makanan) {
                        $id_makanan = $makanan["id_makanan"];
                        $jumlah = $makanan["jumlah"];
                        mysqli_query($con, "UPDATE `makanan` SET `stok`=stok-$jumlah WHERE id_makanan=$id_makanan");
                    }
                } catch (\Throwable $th) {
                    return 'Anda gagal memesan makanan';
                }
                return 'Anda berhasil memesan makanan';
            } else {
                return 'Anda gagal memesan makanan' . mysqli_error($con);
            }
        } else {
            return 'Anda gagal memesan makanan' . mysqli_error($con);
        }
    } else {
        return 'Silahkan masukkan makanan ke keranjang dahulu';
    }
    

}