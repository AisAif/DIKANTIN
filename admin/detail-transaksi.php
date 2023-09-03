<?php include_once("./../components/admin/header.php"); ?>

<?php

$dataPesanan = getUserPesanan($con, $_GET['id']);
$dataDetailPesanan = getUserDetailPesanan($con, $_GET['id']);

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
                <div class="row p-2 bg-white border rounded mt-2">
                    <div class="col-md-4 mt-1">
                        <p class="mt-2" style="font-weight: bold;">Kode Pembayaran: <?= $dataPesanan["kode_pembayaran"] ?></p>
                        <p class="text-justify small text-primary">
                            Tanggal pemesanan: <?= $dataPesanan["tanggal_pesanan"] ?>
                            <br>
                            Informasi Tambahan: <?= $dataPesanan['informasi_tambahan'] != '' ? $dataPesanan['informasi_tambahan'] : 'Tidak ada informasi tambahan.' ?>
                        </p>
                    </div>
                    <div class="col-md-5 mt-1 border-left">
                        <p class="mt-2" style="font-weight: bold;">Detail Pesanan</p>
                        <?php foreach($dataDetailPesanan as $detail): ?>
                            <div>
                                <span><?= $detail['nama'] ?>: </span>
                                <span><?= $detail['harga'] ?> x </span>
                                <span><?= $detail['jumlah'] ?> = </span>
                                <span><?= $detail['jumlah'] * $detail['harga'] ?></span>
                            </div>
                        <?php endforeach ?>
                    </div>
                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                        <div class="d-flex justify-content-around text-center">
                            <h4 class="mt-2">Rp. <?= $dataPesanan["total_harga"] ?>,-</h4>
                        </div>
                        <div class="d-flex flex-column mt-2">
                            <div class="d-flex justify-content-around text-center" style="color: <?= $dataPesanan['is_lunas'] ? 'green' : 'red' ?>;">
                                <?= $dataPesanan['is_lunas'] ? 'Lunas' : 'Belum Lunas' ?>
                            </div>
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

    <?php include_once("./../components/admin/footer.php"); ?>
