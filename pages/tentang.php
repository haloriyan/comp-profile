<?php
function getContent($str) {
	$fp = file_get_contents("../konfigurasi");
	$res = preg_match("/<".$str.">(.*)<\/".$str.">/siU", $fp, $title_matches);

	$title = preg_replace("/\s+/", " ", $title_matches[1]);
	$title = trim($title);
	return $title;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1">
	<meta name="description" content="<?php echo $metaDesc; ?>">
	<meta name="keywords" content="<?php echo $metaKey; ?>">
	<meta name="robots" content="index, follow">
	<meta name="author" content="OKESIP MANAGEMENT">
	<title>Tentang Kami</title>
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
	<h1 class="judul">TENTANG KAMI</h1>
</div>

<div class="menu">
	<div class="wrap">
		<a href="#" id="active"><li>TENTANG</li></a>
		<a href="./galeri"><li>GALERI</li></a>
		<a href="../?contact"><li>CONTACT US</li></a>
	</div>
</div>

<div class="konten">
	<div class="wrap">
		<img src="../inc/img/toko bibit parfum laundry surabaya putra mandiri.jpg" style="width: 40%">
		<?php echo getContent("TENTANG"); ?>
	</div>
</div>

<button class="tblHome biru" mundur="ya"><i class="fa fa-home"></i></button>

</body>
</html>