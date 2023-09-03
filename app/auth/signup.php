<?php
session_start();

require './../../app/database.php';
require './../../app/middleware.php';

if (isset($_POST['signup'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $password = $_POST['password'];
    // var_dump($telepon);
    // die;

    $existUser = mysqli_query($con, "SELECT * FROM user WHERE email='$email' LIMIT 1");
    // var_dump($existUser->fetch_assoc());
    // exit;

    if ($existUser->num_rows > 0) {
        header('Location: ./../../signup.php?msg=Pengguna sudah ada, silahkan coba lagi');
    } else {
        if (mysqli_query($con, "INSERT INTO `user`(`id_user`, `nama`, `email`, `telepon`, `password`, `level`) VALUES (NULL,'$nama','$email','$telepon','$password',2)")) {
            header('Location: ./../../login.php?msg=Berhasil mendaftar, silahkan login');
        } else {
            $error = mysqli_error($con);
            header("Location: ./../../signup?msg=$error");
        }
    }
} else {
    header('Location: ./../../login.php');
}

exit;