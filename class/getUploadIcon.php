<?php
	header("Content-type:text/html");
	
	$icon = $_FILES["icon"];
    $url = "https://www.academic-gihara0655.com/streaming/profile/icon/";
    move_uploaded_file ($icon["tmp_name"], $url);
?>