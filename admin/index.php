<?php include_once("./../components/admin/header.php"); ?>

<?php

$dataPesanan = getAllPesanan($con);

?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include_once("./../components/admin/sidebar.php"); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include_once("./../components/admin/topbar.php"); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container mt-5 mb-5">
                    <div class="d-flex justify-content-center row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama Akun</th>
                                    <th scope="col">Telepon</th>
                                    <th scope="col">Kode Pembayaran</th>
                                    <th scope="col">Informasi Tambahan</th>
                                    <th scope="col">Tanggal Pesanan</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($dataPesanan as $key => $pesanan): ?>
                                <tr>
                                    <th scope="row"><?=$key+1?></th>
                                    <td><?=$pesanan['nama']?></td>
                                    <td><?=$pesanan['telepon']?></td>
                                    <td><?=$pesanan['kode_pembayaran']?></td>
                                    <td><?=$pesanan['informasi_tambahan'] != '' ? $pesanan['informasi_tambahan'] : 'Tidak ada' ?></td>
                                    <td><?=$pesanan['tanggal_pesanan']?></td>
                                    <td><?=$pesanan['is_lunas'] ? 'Lunas' : 'Belum Lunas' ?></td>
                                    <td>
                                        <a href="./detail-transaksi.php?id=<?= $pesanan['id_pesanan'] ?>" style="padding: 2px 4px; font-size: 12px;" class="btn btn-primary">Detail</a>
                                        <form action="./action.php" method="post" style="display: inline;">
                                            <input type="number" name="id_pesanan" value="<?= $pesanan['id_pesanan'] ?>" readonly hidden>
                                            <button type="submit" name="lunas_pesanan" style="padding: 2px 4px; font-size: 12px;" class="btn btn-success">Lunas</button>
                                        </form>
                                        <form action="./action.php" method="post" style="display: inline;">
                                            <input type="number" name="id_pesanan" value="<?= $pesanan['id_pesanan'] ?>" readonly hidden>
                                            <button type="submit" name="hapus_pesanan" style="padding: 2px 4px; font-size: 12px;" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright @Kelompok7 - Kantin FST</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <?php include_once("./../components/admin/footer.php"); ?>
