<?php
include "../../conf/conn.php";

// Mendapatkan data dari form
$id = $_POST['id'];
$buku = $_POST['buku'];
$kasir = $_POST['kasir'];
$jumlah = $_POST['jumlah'];
$total = $_POST['total'];
$tanggal = $_POST['tanggal'];

// Periksa apakah variabel $jumlah telah didefinisikan
if (!isset($jumlah)) {
  echo '<script>alert("Error: Jumlah tidak didefinisikan");
  window.location.href="../../index.php?page=data_penjualan"</script>';
  exit(); // Hentikan eksekusi jika terjadi error
}

// Query update data
$query = "UPDATE penjualan SET id_buku='$buku', id_kasir='$kasir', jumlah='$jumlah', total='$total', tanggal='$tanggal' WHERE id_penjualan ='$id'";

// Eksekusi query
$result = $koneksi->query($query);

// Periksa hasil query
if ($result) {
  echo '<script>alert("Data Berhasil Diupdate !!!");
  window.location.href="../../index.php?page=data_penjualan"</script>';
} else {
  echo '<script>alert("Error: ' . $koneksi->error . '");
  window.location.href="../../index.php?page=data_penjualan"</script>';
}
?>
