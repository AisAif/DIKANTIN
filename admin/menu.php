<?php include_once("./../components/admin/header.php"); ?>

<?php

$dataMakanan = getAllMenu($con);

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
                                    <th scope="col">Nama</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col">Jenis</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($dataMakanan as $key => $data): ?>
                                <tr>
                                    <th scope="row"><?=$key+1?></th>
                                    <td><?=$data['nama']?></td>
                                    <td><?=$data['stok']?></td>
                                    <td><?=$data['jenis']?></td>
                                    <td><?=$data['harga']?></td>
                                    <td>
                                        <a href="./menu-update.php?id=<?=$data['id_makanan']?>" style="padding: 2px 4px; font-size: 12px;" class="btn btn-primary">Ubah</a>
                                        <form action="./action.php" method="post" style="display: inline;">
                                            <input type="number" name="id_makanan" value="<?= $data['id_makanan'] ?>" readonly hidden>
                                            <button type="submit" name="hapus_makanan" style="padding: 2px 4px; font-size: 12px;" class="btn btn-danger">Hapus</button>
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
