<!DOCTYPE html>
<html>
<head>
	
	<title>Sistem Pendukung Keputusan metode AHP</title>
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
		<div class="jumbotron">
		  <div class="container text-center">
		    <h1>Sistem Penunjang Keputusan</h1>      
    		<p>Rekomendasi Laptop, notebook dan Pc Terbaik Menggunakan Metode AHP</p>
		  </div>
		
		<nav class="navbar navbar-inverse"> <!-- warna -->
			<div class="container-fluid">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>                        
			      </button>
			      <a class="navbar-brand" href="./">Beranda</a>
			    </div>
			    <div class="collapse navbar-collapse" id="myNavbar">
		      	<ul class="nav navbar-nav">
					<li class="active"><a href="home.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
					<li>
						<a href="kriteria.php">Kriteria
							<?php getJumlahKriteria(); ?>
						</a>
					</li>
					<li>
						<a href="alternatif.php">Alternatif
							<?php getJumlahAlternatif(); ?>
						</a>
					</li>
					<li>
						<a href="bobot_kriteria.php">Perbandingan Kriteria
						</a>
					</li>
					<li><a  href="bobot.php?c=1">Perbandingan Alternatif</a></li>
					
							<?php

								if (getJumlahKriteria() > 0) {
									for ($i=0; $i <= (getJumlahKriteria()-1); $i++) { 
									echo  "<li><a class='item' href='bobot.php?c=".($i+1)."'>".getKriteriaNama($i)."</a></li>";
									}
								}

							?>
						</ul>
						<ul class="nav navbar-nav navbar-right">
					<li><a href="hasil.php"><span class="glyphicon glyphicon-log-in"></span> Hasil</a></li>
				</ul>
		</nav>
		<div class="container">
		
	