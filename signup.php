<?php include_once("./components/common/header.php"); ?>
    <title>DIKANTIN - Signup</title>
</head>
<body>
    <div class="d-flex">
        <form action="./app/auth/signup.php" method="post" class="d-flex flex-column justify-content-center align-items-center gap-3" style="width: 50%; height: 100vh; text-align: left; padding: 0.5em 4em; font-size: small;">
            <h2>Daftar</h2>
            <label style="border: 2px solid #65CBF3; border-radius: 100px; padding: 0.5em 1em; cursor: pointer; width: 80%;">
                Nama: 
                <input required type="text" name="nama" id="nama">
            </label>
            <label style="border: 2px solid #65CBF3; border-radius: 100px; padding: 0.5em 1em; cursor: pointer; width: 80%;">
                Email: 
                <input required type="email" name="email" id="email">
            </label>
            <label style="border: 2px solid #65CBF3; border-radius: 100px; padding: 0.5em 1em; cursor: pointer; width: 80%;">
                No HP: 
                <input required type="varchar" name="telepon" id="telepon">
            </label>
            <label style="border: 2px solid #65CBF3; border-radius: 100px; padding: 0.5em 1em; cursor: pointer; width: 80%;">
                Password: 
                <input required type="password" name="password" id="password">
            </label>
            <button type="submit" name="signup" style="background-color: #0079FF; border-radius: 100px; padding: 0.5em 1em; cursor: pointer; width: 80%; text-align: center; color: white;">Daftar</button>
            <span>Sudah memiliki akun? <a href="./login.php">Login di sini</a></span>
        </form>
        <img src="./assets/img/auth-hero.png" style="width: 50%; height: 100vh;">
    </div>
<?php include_once("./components/common/footer.php"); ?>