<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1">
	<meta name="description" content="<?php echo $metaDesc; ?>">
	<meta name="keywords" content="<?php echo $metaKey; ?>">
	<meta name="robots" content="index, follow">
	<meta name="author" content="OKESIP MANAGEMENT">
	<title>Galeri</title>
	<link href="../inc/img/icon.png" rel="icon">
	<link href="../fw/build/fw.css" rel="stylesheet">
	<link href="../inc/css/style.tentang.css" rel="stylesheet">
	<link href="../fw/build/font-awesome.min.css" rel="stylesheet">
	<script src="../inc/js/jquery-3.1.1.js"></script>
	<script src="../inc/js/script.index.js"></script>
</head>
<body>

<div class="atas">
	<div id="tblMenu" aksi="bkMenu"><i class="fa fa-bars"></i></div>
	<h1 class="judul">GALERI FOTO</h1>
</div>

<div class="menu">
	<div class="wrap">
		<a href="./tentang-kami"><li>TENTANG</li></a>
		<a href="./galeri" id="active"><li>GALERI</li></a>
		<a href="../?contact"><li>CONTACT US</li></a>
	</div>
</div>

<div class="konten">
	<div class="wrap">
		<?php
		$dir = "../inc/img/";
		$scan = scandir($dir);
		for ($i=2; $i <= count($scan) - 1; $i++) {
			$nama_file = $scan[$i];
			$p = explode(".", $nama_file);
			$eks = count($p) - 1;
			$ext = ".".$p[$eks];
			$namaFile = str_replace($ext, "", $nama_file);
			?>
		<div class="boxFoto">
			<img src="../inc/img/<?php echo $scan[$i]; ?>" alt="<?php echo $namaFile; ?>" title="<?php echo $namaFile; ?>">
			<div class="wrap">
				<h3><?php echo $namaFile; ?></h3>
			</div>
		</div>
		<?php
		}
		?>
	</div>
</div>

<button class="tblHome biru" mundur="ya"><i class="fa fa-home"></i></button>

</body>
</html>