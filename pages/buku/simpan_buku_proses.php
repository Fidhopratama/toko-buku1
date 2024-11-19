<?php
include "../../conf/conn.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];
    $noisbn = $_POST['noisbn'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun'];
    $stok = $_POST['stok'];
    $harga_pokok = $_POST['harga_pokok'];
    $harga_jual = $_POST['harga_jual'];

    // Panggil fungsi upload untuk menangani pengunggahan gambar jika ada
    $gambar = upload();
    if ($gambar === false) {
        die("Gagal mengunggah gambar");
    } elseif ($gambar === null) {
        // Set a default image or leave it as NULL if no image was uploaded
        $gambar = 'default.jpg'; // Assuming 'default.jpg' is a placeholder image in your 'img' directory
    }

    $query = "INSERT INTO buku (judul, noisbn, penulis, penerbit, tahun, stok, harga_pokok, harga_jual, gambar) 
              VALUES ('$judul', '$noisbn', '$penulis', '$penerbit', '$tahun', '$stok', '$harga_pokok', '$harga_jual', '$gambar')";

    if (!mysqli_query($koneksi, $query)) {
        die(mysqli_error($koneksi));
    } else {
        echo '<script>alert("Data Berhasil Disimpan !!!");
              window.location.href="../../index.php?page=data_buku"</script>';
    }
}

function upload() {
    if (!isset($_FILES['gambar']) || $_FILES['gambar']['error'] === UPLOAD_ERR_NO_FILE) {
        // No file was uploaded
        return null;
    }

    if ($_FILES['gambar']['error'] !== UPLOAD_ERR_OK) {
        echo "<script>
                alert('Terjadi kesalahan saat mengunggah gambar!');
              </script>";
        return false;
    }

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    $ekstensiValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiValid)) {
        echo "<script>
                alert('Yang anda upload bukan gambar!');
              </script>";
        return false;
    }

    if ($ukuranFile > 1000000) {
        echo "<script>
                alert('Ukuran gambar terlalu besar!');
              </script>";
        return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    $uploadDir = '../../img/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    if (move_uploaded_file($tmpName, $uploadDir . $namaFileBaru)) {
        return $namaFileBaru;
    } else {
        return false;
    }
}
?>
