<form action="tambah_data.php" method="get">
	

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

	$simpan=$koneksi->query("INSERT INTO `karyawan`(`email_karyawan`, `nama_karyawan`, `telepon_karyawan`) VALUES ('$email','$nama','$telepon')");
	if ($simpan) {
	echo "sukses";
	echo "<script>location.href='index.php?halaman=karyawan'</script>";
	}
	else{
		echo 'gagal';
	}
}

 ?>
 