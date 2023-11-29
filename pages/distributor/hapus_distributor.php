<?php
include "../../conf/conn.php";
$id = $_GET['id'];

// Hapus terlebih dahulu semua entri terkait di tabel 'pasok'
$queryDeletePasok = "DELETE FROM pasok WHERE id_distributor = '$id'";
if ($koneksi->query($queryDeletePasok)) {
  // Jika entri di tabel 'pasok' telah dihapus, lanjutkan untuk menghapus distributor
  $queryDeleteDistributor = "DELETE FROM distributor WHERE id_distributor = '$id'";
  if ($koneksi->query($queryDeleteDistributor)) {
    // Jika berhasil menghapus distributor, redirect ke halaman data distributor
    header("location: ../../index.php?page=data_distributor");
  } else {
    // Pesan kesalahan jika gagal menghapus distributor
    echo "Data Gagal Diubah !!!";
  }
} else {
  // Pesan kesalahan jika gagal menghapus entri terkait di tabel 'pasok'
  echo "Data Gagal Diubah !!!";
}
?>
