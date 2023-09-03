    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    
    <!-- Buying Modal-->
    <form action="./action.php" method="post" class="modal fade" id="buyingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pembelian Makanan atau Minuman</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 style="text-align: center; margin-bottom: 2rem;">Yakin membeli?</h5>
                    <label>
                        <p>Informasi Tambahan</p>
                        <textarea name="informasi_tambahan" cols="52" rows="5"></textarea>
                    </label>
                </div>
                <span style="text-align: center; color: yellowgreen; font-weight: bold;">Total: Rp. <?=$keranjang['total_harga'];?>.00,-</span>
                <input type="number" name="id_keranjang" value="<?= $keranjang['id_keranjang'] ?>" readonly hidden>
                <input type="number" name="id_user" value="<?= $_SESSION['login']['id_user'] ?>" readonly hidden>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <button class="btn btn-primary" type="submit" name="belanja">Ya</button>
                </div>
            </div>
        </div>
    </form>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Yakin untuk keluar?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <form action="./../app/auth/logout.php" method="post">
                        <button class="btn btn-primary" type="submit">Ya</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <?php if(isset($_GET['msg'])): ?>
        <div id="notif" style="position: fixed; bottom: 1em; right: 2em; padding: 0.4em; background-color: white; color: rgba(0, 0, 0, 0.9); box-shadow: 0px 2px 5px 1px rgba(0,0,0,0.75); -webkit-box-shadow: 0px 2px 5px 1px rgba(0,0,0,0.75); -moz-box-shadow: 0px 2px 5px 1px rgba(0,0,0,0.75); border-radius: 4px;">
            <span>
                <?=$_GET['msg']?>
            </span>
            <span id="close_notif" style="border-left: 2px; border-color: black; border-style: solid; border-top: none; border-right: none; border-bottom: none; padding-left: 0.4em; padding-right: 0.1em; cursor: pointer; color: red;"> x </span>
        </div>
    <?php endif ?>
    <script>
        document.getElementById('close_notif').addEventListener('click', () => {
            document.getElementById('notif').style.display = "none";
        })
    </script>
    
    <!-- Bootstrap core JavaScript-->
    <script src="./../assets/vendor/jquery/jquery.min.js"></script>
    <script src="./../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="./../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="./../assets/js/sb-admin-2.min.js"></script>

</body>

</html>