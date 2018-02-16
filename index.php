<?php
function getContent($str) {
	$fp = file_get_contents("konfigurasi");
	$res = preg_match("/<".$str.">(.*)<\/".$str.">/siU", $fp, $title_matches);

	$title = preg_replace("/\s+/", " ", $title_matches[1]);
	$title = trim($title);
	return $title;
}

$metaDesc = getContent("DESCRIPTION");
$metaKey = getContent("KEYWORD");
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
	<title>Bibit Parfum</title>
	<link href="fw/build/fw.css" rel="stylesheet">
	<link href="inc/css/style.index.css" rel="stylesheet">
	<link href="fw/build/font-awesome.min.css" rel="stylesheet">
	<link href="inc/img/icon.png" rel="icon">
	<script src="inc/js/jquery-3.1.1.js"></script>
	<script src="inc/js/script.index.js"></script>
</head>
<body>

<div class="pertama"></div>
<div class="index">
	<div class="wrap">
		<h1>Jual Bibit Parfum di Surabaya</h1>
		<!-- USE INDEX -->
		<p>
			<?php echo getContent("INDEX"); ?>
		</p>
		<button id="tblIndex" class="tbl biru">Selengkapnya</button>
	</div>
</div>

<div class="atas">
	<img src="inc/img/logo.png" alt="bibit parfum murah" class="judul">
	<nav class="menu">
		<a href="./pages/tentang-kami"><li>TENTANG</li></a>
		<a href="./pages/galeri"><li>GALERI</li></a>
		<li id="tblContact">CONTACT US</li>
	</nav>
	<div id="tblMenu" aksi="bkMenu"><i class="fa fa-bars"></i></div>
</div>

<div class="bawah">
	<div class="bagian" id="ttg">
		<div class="wrap">
			<h2>Sekilas Tentang Kami</h2>
			<p>
				<!-- USE OVERVIEW -->
				<?php echo getContent("OVERVIEW"); ?>
			</p>
		</div>
	</div>
	<div class="bagian rata-tengah" id="galeri">
		<div class="wrap">
			<h2>Galeri</h2>
			<hr size="3" color="#444" width="10%" style="margin-bottom: 25px;">
			<img src="inc/img/toko bibit parfum laundry surabaya.jpg" class="galeri">
			<img src="inc/img/WhatsApp Image 2018-02-06 at 19.18.37 (2).jpeg" class="galeri">
			<img src="inc/img/WhatsApp Image 2018-02-06 at 19.18.38.jpeg" class="galeri">
			<img src="inc/img/WhatsApp Image 2018-02-06 at 19.18.36.jpeg" class="galeri"><br />
			<button class="tbl biru" style="margin-top: 18px;">Lihat semua foto <i class="fa fa-angle-double-right"></i></button>
		</div>
	</div>
	<div class="bagian" id="blog">
		<div class="wrap">
			<h2>Ikuti terus update dari kami!</h2>
			<hr size="4" color="#444" width="10%">
			<?php
			$key = "AIzaSyDqYJGuWw9nfoyPG8d9L1uhm392uETE-mA";
			$blogId = "5619993998593687336";

			$url = "https://www.googleapis.com/blogger/v3/blogs/".$blogId."/posts?key=".$key;

			$get = file_get_contents($url);

			$blog = json_decode($get, true);

			foreach ($blog['items'] as $row) {
				$isi = substr($row['content'], 0, 50);
				echo "<div class='boxPos'>".
					 	"<div class='wrap'>".
					 		"<h3>".$row['title']."</h3>".
					 		"<a href='./pos/".$row['id']."'>Baca selengkapnya...</a>".
					 	"</div>".
					 "</div>";
			}
			?>
		</div>
	</div>
	<div class="footer biru">
		<div class="bagFoot">
			<div class="wrap">
				<?php echo getContent("FOOTER1"); ?>
			</div>
		</div>
		<div class="bagFoot">
			<div class="wrap">
				<?php echo getContent("FOOTER2"); ?>
			</div>
		</div>
		<div class="bagFoot">
			<div class="wrap">
				<?php echo getContent("FOOTER3"); ?>
			</div>
		</div>
	</div>
</div>

<div class="bg"></div>
<div class="popupWrapper" id="formContact">
	<div class="popup">
		<div class="wrap">
			<h3>Contact Us!</h3>
			<form>
				<div class="isi">Nama :</div>
				<input type="text" class="box" id="nama">
				<div class="isi">E-Mail :</div>
				<input type="text" class="box" id="email">
				<div class="isi">Keperluan :</div>
				<input type="text" class="box" id="subjek">
				<div class="isi">Isi pesan :</div>
				<textarea class="box" id="msg"></textarea>
				<div class="bag-tombol">
					<button class="biru"><i class="fa fa-paper-plane"></i> KIRIM</button><br />
					<div>
						tekan tombol esc untuk <a href="#" id="xPopup">batal</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<?php
$awaljs = '<script>';
$akirjs = '</script>';
if(isset($_GET['contact'])) {
	echo $awaljs.
		 'munculPopup("#formContact");'.
		 $akirjs;
}
?>

</body>
</html>