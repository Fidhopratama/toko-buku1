<?php
include "../../conf/conn.php";

$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$telepon = $_POST["telepon"];
$status = $_POST["status"];
$username = $_POST["username"];
$password = md5($_POST["password"]);
$level = "user"; // or set to whatever the appropriate level is

// Prepare and bind the SQL statement to prevent SQL injection
$stmt = $koneksi->prepare("INSERT INTO kasir (nama, alamat, telepon, status, username, password, level) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $nama, $alamat, $telepon, $status, $username, $password, $level);

if ($stmt->execute()) {
    echo '<script>alert("Data Berhasil Disimpan !!!");
    window.location.href="../../index.php?page=data_kasir";</script>';
} else {
    echo '<script>alert("Data Gagal Disimpan !!!");
    window.location.href="../../index.php?page=data_kasir";</script>';
}

$stmt->close();
$koneksi->close();
?>
