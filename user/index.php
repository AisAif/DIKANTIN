<?php include_once("./../components/user/header.php"); ?>

<?php

$dataPesanan = getAllUserPesanan($con, $_SESSION['login']['id_user']);

?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include_once("./../components/user/sidebar.php"); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include_once("./../components/user/topbar.php"); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container mt-5 mb-5">
                    <div class="d-flex justify-content-center row">
                        <div class="col-md-10">
                            <?php foreach($dataPesanan as $pesanan): ?>
                            <div class="row p-2 bg-white border rounded mt-2">
                                <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="./../assets/img/makanan.jpg"></div>
                                <div class="col-md-6 mt-1">
                                    <p style="font-weight: bold;">Kode Pembayaran: <?= $pesanan["kode_pembayaran"] ?></p>
                                    <p class="text-justify small text-primary">
                                        Tanggal pemesanan: <?= $pesanan["tanggal_pesanan"] ?>
                                        <br>
                                        Informasi Tambahan: <?= $pesanan['informasi_tambahan'] != '' ? $pesanan['informasi_tambahan'] : 'Tidak ada informasi tambahan.' ?>
                                    </p>
                                </div>
                                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                    <div class="d-flex flex-row align-items-center">
                                        <h4 class="mr-1 mt-2">Rp. <?= $pesanan["total_harga"] ?>,-</h4>
                                    </div>
                                    <div class="d-flex flex-column mt-2">
                                        <div class="d-flex justify-content-around text-center" style="color: <?= $pesanan['is_lunas'] ? 'green' : 'red' ?>;">
                                            <?= $pesanan['is_lunas'] ? 'Lunas' : 'Belum Lunas' ?>
                                        </div>
                                        <a href="./detail-transaksi.php?id=<?= $pesanan['id_pesanan'] ?>" class="btn btn-outline-primary btn-sm">Detail</a>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach ?>
                        </div>
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

    <?php include_once("./../components/user/footer.php"); ?>
