<?php include_once("./../components/admin/header.php"); ?>

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
                    <div class="d-flex row justify-content-center">
                        <form class="col-md-6" action="./action.php" method="post">
                            <h5 class="mb-4 text-center">Tambah Menu</h5>
                            <div class="form-group">
                                <label for="nama">Nama Makanan</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama makanan">
                            </div>
                            <div class="form-group">
                                <label for="stok">Stok Makanan</label>
                                <input type="number" class="form-control" id="stok" name="stok" placeholder="Masukkan stok makanan">
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga Makanan</label>
                                <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan harga makanan">
                            </div>
                            <div class="form-group">
                                <label for="jenis">Pilih Jenis Makanan</label>
                                <select class="form-control" name="jenis" id="jenis">
                                    <option>Makanan</option>
                                    <option>Minuman</option>
                                </select>
                            </div>
                            <button type="submit" name="tambah_makanan" class="btn btn-primary" style="width: 100%;">Tambah</button>
                            </form>
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
