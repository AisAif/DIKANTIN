<style>
    .add-min {
        cursor: pointer;
    }
</style>
<div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-10">
            <?php foreach($makanan as $key => $makanan): ?>
            <div class="row p-2 bg-white border rounded mt-2">
                <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="./../assets/img/<?= $makanan["jenis"] == "makanan" ? 'makanan.jpg' : 'minuman.jpg'; ?>"></div>
                <div class="col-md-6 mt-1">
                    <h5><?= $makanan["nama"] ?></h5>
                    <p class="text-justify small text-primary">Stok: <?= $makanan["stok"] ?> porsi</p>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1 mt-2">Rp. <?= $makanan["harga"] ?>,-</h4>
                    </div>
                    <form action="action.php" method="post" class="d-flex flex-column mt-2">
                        <input type="number" name="id_makanan" value="<?= $makanan["id_makanan"] ?>" hidden>
                        <input type="number" name="id_keranjang" value="<?= $keranjang['id_keranjang'] ?>" hidden>
                        <input type="number" name="harga" value="<?= $makanan["harga"] ?>" hidden>
                        <div class="d-flex justify-content-around text-center">
                            <p class="add-min" onclick="minCount(`count<?= $key; ?>`)" style="width: 25px; height: 25px; border-radius: 100px; background-color: rgba(0, 0, 0, 0.6); color: white;">-</p>
                            <input style="width: 30px; height: 30px; text-align: center;" max="5" readonly id="count<?= $key; ?>" name="jumlah" value="1">
                            <p class="add-min" onclick="plusCount(`count<?= $key; ?>`, `<?= $makanan['stok'] ?>`)" style="width: 25px; height: 25px; border-radius: 100px; background-color: rgba(0, 0, 0, 0.6); color: white;">+</p>
                        </div>
                        <button type="submit" name="tambah_keranjang" class="btn btn-outline-primary btn-sm" type="button">Tambah ke keranjang</button>
                    </form>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</div>

<script>
    const minCount = (id) => {
        if (document.getElementById(id).value > 1) {
            document.getElementById(id).value = parseInt(document.getElementById(id).value) - 1 
        }
        // console.log(document.getElementById('countMakanan').value);
    }
    const plusCount = (id, total) => {
        if (parseInt(document.getElementById(id).value) < 5) {
            if (parseInt(document.getElementById(id).value) < total-1) {
                document.getElementById(id).value = parseInt(document.getElementById(id).value) + 1 
            }
        }
        // console.log(document.getElementById('countMakanan').value);
    }
</script>
