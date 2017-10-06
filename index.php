<?php 

	include_once("simple_html_dom.php");
	$html = file_get_html("http://www.yxdm.tv/resource/4982.html");

	// $title = $html->find("div#intro", 0)->innertext;
	$title = $html->find("div.main-right .neirong .normal-nei2 .info .info1", 0)->outertext;
	// $title = $html->find("div#intro", 0)->plaintext;
	echo $title;

?>