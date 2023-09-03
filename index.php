<?php include_once("./components/common/header.php"); ?>
    <title>Selamat Datang di DIKANTIN</title>
</head>
<body>
    <nav>
        <a href="./" class="logo">DIKANTIN</a>
        <div class="list-nav">
            <a href="./#home">Home</a>
            <a href="./#primacy">Keunggulan</a>
            <a href="./#about">About</a>
            <a href="./#testimony">Testimoni</a>
        </div>
        <a class="btn btn-primary" href="./login.php">Masuk</a>
    </nav>
    <main>
        <div id="home" class="py-4 d-flex justify-content-between align-items-center gap-5 h-screen">
            <div class="left-side d-flex flex-column gap-3">
                <h1 style="font-weight: 700;">SELAMAT DATANG DI KANTIN FST UIN WALISONGO</h1>
                <p>Nikmati Pengalaman Makanan dan Jajan di  Kampus UIN Walisongo  dengan Mudah, Murah, Higenis dan Efisien!!</p>
                <div class="section-btn">
                    <a href="./user/" class="btn btn-primary">Lihat Menu</a>
                </div>
            </div>
            <div class="right-side">
                <img src="./assets/img/home.png" width="900px" >
            </div>
        </div>
        <div id="primacy" class="py-4 d-flex flex-column justify-content-between align-items-center py-5">
            <h1 style="font-weight: 700;" class="mb-5 mt-5">Keunggulan Kami</h1>
            <div class="mt-5 d-flex justify-content-between align-items-center gap-4">
                <div class="d-flex flex-column justify-content-center align-items-center gap-2" style="width: 25%; text-align: center;">
                    <h4 style="font-weight: 600;">Mudah</h4>
                    <p style="font-size: large;">Pelayanan Mudah secara online dan Offline</p>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center gap-2" style="width: 25%; text-align: center;">
                    <h4 style="font-weight: 600;">Murah</h4>
                    <p style="font-size: large;">Harga sesuai dengan kantong Mahasiswa</p>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center gap-2" style="width: 25%; text-align: center;">
                    <h4 style="font-weight: 600;">Halal</h4>
                    <p style="font-size: large;">Terjamin Makanan dan Minuman </p>
                </div>
            </div>
        </div>
        <div id="about" class="py-4 d-flex justify-content-between align-items-center gap-5 h-screen position-relative">
            <div class="left-side">
                <img src="./assets/img/about.png" width="900px">
            </div>
            <div class="right-side d-flex flex-column gap-3">
                <h1 style="font-weight: 700;">Kantin Fakultas Sains dan Teknologi</h1>
                <p>Tersedia berbagai macam makanan, minuman dan camilan dengan harga terjangkau bagi Mahasiswa</p>
                <div class="section-btn">
                    <a href="./user/" class="btn btn-primary">Beli Yuk!</a>
                </div>
            </div>
            <img src="./assets/img/vector-167.png" class="position-absolute" height="600px" style="z-index: -1;transform: translateX(-100px);">
        </div>
        <div id="testimony" class="py-4 d-flex flex-column justify-content-between align-items-center py-5">
            <h1 style="font-weight: 700;" class="mb-5 mt-5">Apa Kata Pelanggan?</h1>
            <div class="mt-5 d-flex justify-content-between align-items-center gap-4" style="width: 100%;">
                <div class="p-3 d-flex flex-column justify-content-center align-items-center gap-2" style="width: 30%; background-color: #FAFAFA; border-radius: 10px;">
                    <div class="d-flex justify-content-between align-items-center gap-1" style="width: 100%;">
                        <div class="d-flex justify-content-between align-items-center gap-2">
                            <img src="./assets/img/dekan.png" width="40px" height="40px">
                            <div class="d-flex flex-column">
                                <span style="font-size: 12px; font-weight: 500;">Dr. H. Ismail, M.Ag</span>
                                <span style="font-size: 8px;">Dekan FST</span>
                            </div>
                        </div>
                        <div class="d-flex gap-2">
                            <img src="./assets/img/star.png" height="12px" width="12px">
                            <span style="font-size: 10px;">4.8</span>
                        </div>
                    </div>
                    <p style="font-size: 10px; text-align: justify;">“Hadirnya Kantin ini  menjadi salah satu efisiensi bagi mahasiswa yang ingin mencari makanan atau minuman yang halalan toyyiban.”</p>
                </div>
                <div class="p-3 d-flex flex-column justify-content-center align-items-center gap-2" style="width: 30%; background-color: #FAFAFA; border-radius: 10px;">
                    <div class="d-flex justify-content-between align-items-center gap-1" style="width: 100%;">
                        <div class="d-flex justify-content-between align-items-center gap-2">
                            <img src="./assets/img/dhila.png" width="40px" height="40px">
                            <div class="d-flex flex-column">
                                <span style="font-size: 12px; font-weight: 500;">Nadilatul Uqba</span>
                                <span style="font-size: 8px;">Mahasiswa</span>
                            </div>
                        </div>
                        <div class="d-flex gap-2">
                            <img src="./assets/img/star.png" height="12px" width="12px">
                            <span style="font-size: 10px;">4.9</span>
                        </div>
                    </div>
                    <p style="font-size: 10px; text-align: justify;">“Makananya enak dan harganya terjangkau. Hadirnya Kantin Saintek ini sangat membantu sekali bagi mahasiwa seperti kami yang ingin mencari makanan atau minuman.”</p>
                </div>
                <div class="p-3 d-flex flex-column justify-content-center align-items-center gap-2" style="width: 30%; background-color: #FAFAFA; border-radius: 10px;">
                    <div class="d-flex justify-content-between align-items-center gap-1" style="width: 100%;">
                        <div class="d-flex justify-content-between align-items-center gap-2">
                            <img src="./assets/img/nabil.png" width="40px" height="40px">
                            <div class="d-flex flex-column">
                                <span style="font-size: 12px; font-weight: 500;">Nabil El Hamamy</span>
                                <span style="font-size: 8px;">Mahasiswa</span>
                            </div>
                        </div>
                        <div class="d-flex gap-2">
                            <img src="./assets/img/star.png" height="12px" width="12px">
                            <span style="font-size: 10px;">4.8</span>
                        </div>
                    </div>
                    <p style="font-size: 10px; text-align: justify;">“Semoga makananya bisa tambah varianya, saya suka sotonya dan sate-satenya harganya terjangkau.”</p>
                </div>
            </div>
        </div>
    </main>
    <footer style="background-color: #E5E5E5; font-size: 10px;">
        <div class="top d-flex gap-3 justify-content-between align-items-start mb-1" style="padding: 3rem 4rem;">
            <div class="d-flex flex-column gap-2">
                <div class="d-flex flex-column gap-1">
                    <h4>Kantin FST</h4>
                    <span>Belakang Laboratorium terpadu</span>
                    <span>Fakultas Sains dan Teknologi</span>
                    <span>Kampus III UIN Walisongo Semarang</span>
                </div>
                <span><i class="bi bi-envelope"></i> kantinfstws@gmail.com</span>
                <span><i class="bi bi-telephone"></i> 022-876-869-893</span>
            </div>
            <div class="d-flex flex-column gap-2">
                <h4>Menu Unggulan</h4>
                <span>Soto</span>
                <span>Aneka Jajanan</span>
                <span>Aneka Minuman</span>
            </div>
            <div class="d-flex flex-column gap-2">
                <h4>Layanan</h4>
                <span>Titip Jualan</span>
                <span>Pembeli</span>
                <span>Admin</span>
            </div>
            <div class="d-flex flex-column gap-2">
                <h4>Scan Menu</h4>
                <a href="https://drive.google.com/file/d/1amBMPoBIDao56wxh2z5KWP4NolRD5UXq/view?usp=sharing" target="_blank">
                    <img src="./assets/img/qrcode.png" width="150px">
                </a>
            </div>
        </div>
        <div class="bottom text-center p-2" style="background-color: #0079FF; color: white;">
            <span>Copyright @Kelompok7 - Kantin FST</span>
        </div>
    </footer>
<?php include_once("./components/common/footer.php"); ?>