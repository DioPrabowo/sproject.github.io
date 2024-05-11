
<h2>Data Pegawai</h2>


<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Telepon</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM pegawai"); ?>
		<?php while ($pecah = $ambil->fetch_assoc()) { ?> 
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_pegawai']; ?></td>
			<td><?php echo $pecah['email_pegawai']; ?></td>
			<td><?php echo $pecah['telepon_pegawai']; ?></td>
			<td>
				<!-- Tombol Hapus dengan Form -->
				<form method="post" action="hapuspegawai.php">
					<input type="hidden" name="id_pegawai" value="<?php echo $pecah['id_pegawai']; ?>">
					<button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
				    <a href="admin_home.php?halaman=ubah_pegawai&id=<?php echo $pecah['id_pegawai']; ?>" class="btn btn-warning">Ubah</a>
				</form>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
<a href="admin_home.php?halaman=tambah_data&" class="btn btn-primary">Tambah Data</button></a>


<!-- <td>
	<a href="admin_home.php?halaman=hapus_pegawai&id=<?php echo $pecah['id_pegawai']; ?>" 
	class="btn btn-danger">hapus</a>
</td> -->