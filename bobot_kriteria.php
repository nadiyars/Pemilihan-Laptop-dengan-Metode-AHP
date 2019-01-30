<?php
	include('config.php');
	include('fungsi.php');

	include('header.php');
?>
<div class="container">
	<h2>Matrik Perbandingan Berpasangan</h2>
	<h4>(Matrik Pairwise Comparison)</h4>
	<?php showTabelPerbandingan('kriteria','kriteria'); ?>
</div>

<?php include('footer.php'); ?>