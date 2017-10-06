<?php 

	include_once("simple_html_dom.php");

	$_source_pokemon = file_get_html("http://www.yxdm.tv/resource/4982.html");
	$_source_kamenRider = file_get_html("http://www.kanxi.cc/html/19010/");
	$_source_kamenRider_build = file_get_html("http://www.kanxi.cc/html/21104/");
	
	// $title = $html->find("div#intro", 0)->innertext;
	// $title = $html->find("div#intro", 0)->plaintext;

	$pokemon_sunMoon = $_source_pokemon->find("div.main-right .neirong", 0)->outertext;
	$kamenRider_ExAid = $_source_kamenRider->find("div.k_jianjie-3a-2", 0)->outertext;
	$kamenRider_build = $_source_kamenRider_build->find("div.k_jianjie-3a-2", 0)->outertext;

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>

	<div id="accordion" role="tablist">
  <div class="card">
    <div class="card-header" role="tab" id="headingOne">
      <h5 class="mb-0">
        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        	#1 Pokemon Sun & Moon - 43
        	<a href="http://www.yxdm.tv/resource/4982.html" target="_blank">Link</a>
        </a>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        <?php echo $pokemon_sunMoon; ?>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" role="tab" id="headingTwo">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          #2 Kamen Rider Ex-Aid - 45
          <a href="http://www.kanxi.cc/html/19010/" target="_blank">Link</a>
        </a>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        <?php echo $kamenRider_ExAid; ?>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" role="tab" id="headingThree">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          #3 Kamen Rider Build - 0
          <a href="http://www.kanxi.cc/html/21104/" target="_blank">Link</a>
        </a>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        <?php echo $kamenRider_build; ?>
      </div>
    </div>
  </div>
</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>