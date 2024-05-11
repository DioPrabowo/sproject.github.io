<?php
// Periksa apakah ada pengiriman data ID dari formulir
if (isset($_POST['id_pegawai'])) {
    // Sertakan file koneksi ke database
    include 'koneksi.php';

    // Ambil ID pegawai dari formulir
    $id_pegawai = $_POST['id_pegawai'];

    // Lakukan query DELETE untuk menghapus data pegawai berdasarkan ID
    $hapus = $koneksi->query("DELETE FROM pegawai WHERE id_pegawai = '$id_pegawai'");

    // Periksa apakah penghapusan berhasil
    if ($hapus) {
        // Jika berhasil, arahkan kembali ke halaman data pegawai
        header("Location: admin_home.php?halaman=pegawai");
    } else {
        // Jika gagal, tampilkan pesan kesalahan
        echo "Gagal menghapus data pegawai. Silakan coba lagi.";
    }

    // Tutup koneksi ke database
    $koneksi->close();
} else {
    // Jika tidak ada pengiriman data ID, arahkan ke halaman lain atau berikan pesan kesalahan
    echo "Tidak ada data yang dikirim untuk dihapus.";
}
?>