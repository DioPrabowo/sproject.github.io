<h2>Ubah Pegawai</h2>

<?php
// Sertakan file koneksi ke database


// Periksa apakah parameter ID Pegawai diterima dari URL
if (isset($_GET['id'])) {
    $id_pegawai = $_GET['id'];

    // Ambil data pegawai berdasarkan ID
    $ambil = $koneksi->query("SELECT * FROM pegawai WHERE id_pegawai = '$id_pegawai'");
    $pecah = $ambil->fetch_assoc();

?>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Pegawai</label>
        <input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_pegawai']; ?>">
    </div>
    <div class="form-group">
        <label>Email Pegawai</label>
        <input type="text" name="email" class="form-control" value="<?php echo $pecah['email_pegawai']; ?>">
    </div>
    <div class="form-group">
        <label>Telepon Pegawai</label>
        <input type="text" name="telepon" class="form-control" value="<?php echo $pecah['telepon_pegawai']; ?>">
    </div>
    <button type="submit" class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
} else {
    echo "ID Pegawai tidak valid.";
}
?>

<?php
// Proses ubah data ketika formulir dikirimkan
if (isset($_POST['ubah'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];

    // Lakukan query UPDATE untuk mengubah data pegawai
    $koneksi->query("UPDATE pegawai SET nama_pegawai='$nama', email_pegawai='$email', telepon_pegawai='$telepon' WHERE id_pegawai='$id_pegawai'");

    echo "<script>alert('Data pegawai telah diubah');</script>";
    echo "<script>location='admin_home.php?halaman=pegawai';</script>";
}
?>
