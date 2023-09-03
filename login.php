<?php include_once("./components/common/header.php"); ?>
    <title>DIKANTIN - Login</title>
</head>
<body>
    <div class="d-flex">
        <img src="./assets/img/auth-hero.png" style="width: 50%; height: 100vh;">
        <form action="./app/auth/login.php" method="post" class="d-flex flex-column justify-content-center align-items-center gap-3" style="width: 50%; height: 100vh; text-align: left; padding: 0.5em 4em; font-size: small;">
            <h2>Masuk</h2>
            <label style="border: 2px solid #65CBF3; border-radius: 100px; padding: 0.5em 1em; cursor: pointer; width: 80%;">
                Email: 
                <input type="email" name="email" id="email" required>
            </label>
            <label style="border: 2px solid #65CBF3; border-radius: 100px; padding: 0.5em 1em; cursor: pointer; width: 80%;">
                Password: 
                <input type="password" name="password" id="password" required>
            </label>
            <button type="submit" name="login" style="background-color: #0079FF; border-radius: 100px; padding: 0.5em 1em; cursor: pointer; width: 80%; text-align: center; color: white;">Masuk</button>
            <span>Belum memiliki akun? <a href="./signup.php">Daftar di sini</a></span>
        </form>
    </div>
<?php include_once("./components/common/footer.php"); ?>