<?php

function getAllUser($con) {
    $query = "SELECT * FROM user";
    $result = mysqli_query($con, $query);
    return $result;
}

function getUser($con, $email) {
    $query = "SELECT * FROM user WHERE email='$email'";
    $result = mysqli_query($con, $query);
    return $result->fetch_assoc();
}

function addUser($con, $nama, $email, $password) {
    $query = "INSERT INTO user (nama, email, password) VALUES ('$nama', '$email', '$password')";
    if (mysqli_query($con, $query)) {
        return 'Data Berhasil Ditambah';
    } else {
        return 'Data Gagal Ditambah' . mysqli_error($con);
    }
}

function updateUser($con, $previousEmail, $nama, $email, $password) {
    $query = "UPDATE user SET nama='$nama', email='$email', password='$password' WHERE email='$previousEmail'";
    if (mysqli_query($con, $query)) {
        return 'Data Berhasil Diubah';
    } else {
        return 'Data Gagal Diubah' . mysqli_error($con);
    }
}

function deleteUser($con, $email) {
    $query = "DELETE FROM user WHERE email='$email'";
    if (mysqli_query($con, $query)) {
        return 'Data Berhasil Dihapus';
    } else {
        return 'Data Gagal Dihapus' . mysqli_error($con);
    }
}