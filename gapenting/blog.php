<?php

$key = "AIzaSyDqYJGuWw9nfoyPG8d9L1uhm392uETE-mA";
$blogId = "5619993998593687336";

$url = "https://www.googleapis.com/blogger/v3/blogs/".$blogId."/posts?key=".$key;

$get = file_get_contents($url);

$blog = json_decode($get, true);

foreach ($blog['items'] as $row) {
	echo "<h1><a href='./pos/".$row['id']."'>".$row['title']."</a></h1>".
		 "<p>".$row['content']."</p><br />";
}

/*
foreach ($blog['items'] as $row) {
	foreach ($row as $key => $value) {
		echo "<li>".$row['title']."</li>";
	}
}
*/