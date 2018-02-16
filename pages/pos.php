<?php

$id = $_GET['id'];
if(empty($id)) {
	die('error');
}

$key = "AIzaSyDqYJGuWw9nfoyPG8d9L1uhm392uETE-mA";
$blogId = "5619993998593687336";

$url = "https://www.googleapis.com/blogger/v3/blogs/".$blogId."/posts/".$id."?key=".$key;
$get = file_get_contents($url);
$blog= json_decode($get, true);


$postTitle = $blog['title'];

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
	<title><?php echo $postTitle; ?></title>
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
	<h1 class="judul"><?php echo $postTitle; ?></h1>
</div>

<div class="menu">
	<div class="wrap">
		<a href="../"><li>HOME</li></a>
		<a href="./tentang-kami"><li>TENTANG</li></a>
		<a href="./galeri"><li>GALERI</li></a>
		<a href="../?contact"><li>CONTACT US</li></a>
	</div>
</div>

<div class="konten">
	<div class="wrap">
		<?php echo $blog['content'];?>
	</div>
</div>

</body>
</html>