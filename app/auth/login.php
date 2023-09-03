<?php
session_start();

require './../../app/database.php';
require './../../app/middleware.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $loginResult = mysqli_query($con, "SELECT * FROM user WHERE email='$email' AND password='$password' LIMIT 1");
    // var_dump($loginResult->fetch_assoc());
    // exit;
    $dataLogin = $loginResult->fetch_assoc();

    if ($loginResult->num_rows > 0) {
        $_SESSION['login'] = [
            "id_user" => $dataLogin['id_user'],
            "nama" => $dataLogin['nama'],
            "email" => $dataLogin['email'],
            "password" => $dataLogin['password'],
        ];
        $_SESSION['level'] = $dataLogin['level'];
        if (isUser()) {
            $id_user = $dataLogin['id_user'];
            $keranjang = mysqli_query($con, "SELECT * FROM keranjang WHERE id_user = '$id_user' LIMIT 1");
            // var_dump($keranjang->num_rows);
            // die;
            if ($keranjang->num_rows == 0) {
                $result = mysqli_query($con, "INSERT INTO `keranjang`(`id_keranjang`, `total_harga`, `id_user`) VALUES (NULL,'0','$id_user')");
                if (!$result) {
                    var_dump($con->error);
                    die;
                }
            }
            header('Location: ./../../user/');
        } elseif (isAdmin()) {
            header('Location: ./../../admin/');
        }
    } else {
        header('Location: ./../../login.php?loginFail=1');
    }
} else {
    header('Location: ./../../login.php');
}

exit;