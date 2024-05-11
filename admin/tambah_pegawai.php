<h2>Tambah Pegawai</h2>

<form action="tambah_pegawai.php" method="get">
	

	<label>Nama</label><br>
	<input type="text" name="nama" placeholder="masukan nama anda"><br>

	<label>Email</label><br>
	<input type="text" name="email" placeholder="masukan email anda"><br>

	<label>Telepon</label><br>
	<input type="text" name="telepon" placeholder="masukan telepon anda"><br>


	<button class="button btn-primary" type="submit">Tambah</button>
</form>


<?php include "koneksi.php";
if(!empty($_GET['nama'])){

	$nama=$_GET['nama'];
	$email=$_GET['email'];
	$telepon=$_GET['telepon'];

	$simpan=$koneksi->query("INSERT INTO `pegawai`(`nama_pegawai`, `email_pegawai`, `telepon_pegawai`) VALUES ('$nama','$email','$telepon')");
	if ($simpan) {
	echo "sukses";
	echo "<script>location.href='admin_home.php?halaman=pegawai'</script>";
	}
	else{
		echo 'gagal';
	}
}

 ?>
 