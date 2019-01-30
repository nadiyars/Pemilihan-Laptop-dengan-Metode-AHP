
<?php
include('config.php');
include('fungsi.php');

// header
include('header.php');
?>

	<div class="container">
			<h2>Permasalahan</h2>

			<p>PT.Oke jaya Abadi ingin membeli perangkat komputer untuk perusahaannya. 
			Beberapa alternatif Notebook Pilihan yang beredar dipasaran adalah:<b> Asus, HP, Dell, Fujitsu.</b></p>
			
			<p>Untuk kriteria penilaian yang dipertimbangkan adalah: <b>Penampilan, Kehandalan, dan Harga</b> 
			Bagaimana untuk memberikan solusi untuk PT.Oke Jaya Abadi mengenai perangkat komputer mana yang 
			layak digunakan untuk perusahaannya ?</p>

			<div class="well">
				<h2>Kriteria</h2>
				Kehandalan <b>3x</b> lebih utama dibanding Penampilan <br>
				Penampilan <b>2x</b> lebih utama dibanding Harga <br>
				Kehandalan <b>4x</b> lebih utama dibanding Harga <br>
			</div>

			<div class="well">
				<h3>Bobot Alternatif Penampilan</h3>
				HP <b>3</b> x Lebih keren dari Asus dan Dell <br>
				Fujitsu <b>2</b> x Lebih keren dari Asus, <b>1</b> x lebih keren dari HP <br>
				Asus <b>1</b> x Lebih keren Dell <br>
				Fujitsu <b>1</b> x Lebih keren Dell <br>
			</div>
			<div class="well">
				<h3>Bobot Alternatif Kehandalan</h3>
				HP <b>1</b> x Lebih handal dari Asus dan Dell <br>
				Fujitsu <b>2</b> x Lebih handal dari Asus, <b>1</b> x lebih handal dari HP <br>
				Asus <b>1</b> x Lebih handal Dell <br>
				Fujitsu <b>2</b> x Lebih handal Dell <br>
			</div>
			<div class="well">
				<h3>Bobot Alternatif Harga</h3>
				HP <b>2</b> x Lebih terjangkau dari Asus dan Dell <br>
				Fujitsu <b>1</b> x Lebih terjangkau dari Asus dan HP <br>
				Asus <b>3</b> x Lebih terjangkau dari Dell <br>
				Fujitsu <b>1</b> x Lebih terjangkau Dell <br>
			</div>
	</div>
			 <ul class="pager">
			  <li class="previous"><a href="#">Kembali</a></li>
			  <li class="next"><a href="kriteria.php">Lanjut</a></li>
			</ul> 

<?php include('footer.php'); ?>
