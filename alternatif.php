<?php 
	include('config.php');
	include('fungsi.php');

	// menjalankan perintah edit
	if(isset($_POST['edit'])) {
		$id = $_POST['id'];

		header('Location: edit.php?jenis=alternatif&id='.$id);
		exit();
	}

	// menjalankan perintah delete
	if(isset($_POST['delete'])) {
		$id = $_POST['id'];
		deleteAlternatif($id);
	}

	// menjalankan perintah tambah
	if(isset($_POST['tambah'])) {
		$nama = $_POST['nama'];
		tambahData('alternatif',$nama);
	}

	include('header.php');

?>


<div class="container">

	<h2>Alternatif (Pilihan)</h2>

	<table class="table">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Alternatif</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>

		<?php
			// Menampilkan list alternatif
			$query = "SELECT id,nama FROM alternatif ORDER BY id";
			$result	= mysqli_query($koneksi, $query);

			$i = 0;
			while ($row = mysqli_fetch_array($result)) {
				$i++;
		?>
			<tr>
				<td><?php echo $i ?></td>
				<td><?php echo $row['nama'] ?></td>
				<td>
					<form method="post" action="alternatif.php">
						<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
						<button type="submit" name="edit" class="btn btn-warning">EDIT</button>
						<button type="submit" name="delete" class="btn btn-danger">DELETE</button>
					</form>
				</td>
			</tr>

<?php } ?>
	
		</tbody>
		
			<tr>
				<th colspan="3">
					<a href="tambah.php?jenis=alternatif">
						<div class="btn btn-success">Tambah
						</div>
					</a>
				</th>
			</tr>
		
	</table>
	</form>
	</div>
			<ul class="pager">
			  <li class="previous"><a href="kriteria.php">Kembali</a></li>
			  <li class="next"><a href="bobot_kriteria.php">Lanjut</a></li>
			</ul> 
</section>

<?php include('footer.php'); ?>