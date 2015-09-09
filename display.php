<!--
Author      : Jonathan Lurie
Email       : lurie.jo@gmail.com
Version     : 0.1
Licence     : MIT
description : VSCO CAM is a photography social network. It is great but does not
              allow rightclick on it's website to get image url, so you cannot
              re-use the already online version of an image even if you took it.

              C'MON VSCO just display the fullsier image from the URL taken from
              VSCO GRID. The URL usually has this format:
              http://USERNAME.vsco.co/media/ID_WITH_NUMBERS_AND_LETTERS
-->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">


<?php

	$pageUrl = $_POST["url"];
	$tags = get_meta_tags($pageUrl);
	$pos = strpos($tags["twitter:image"], "?");
	$urlFullImage = substr($tags["twitter:image"], 0, $pos);

	$title = $tags["twitter:title"];

	echo '<div id="imgDiv"><img src="' . $urlFullImage .'?w=1920" class="fullscreenimage"></div>';
?>
	<div id="urlDiv">
		<input class="urlTxt" type="text" onClick="this.select();" name="url" value="<?php echo $urlFullImage; ?>">


	</div>
	<div id="squareOpen" onclick="window.open('<?php echo $urlFullImage; ?>', '_blank');">
		<i class="fa fa-download downloadButton"></i>
	</div>


<div id="credits">
	<span class="whiteText"><?php echo $title; ?></span> - Fork <i>C'MON VSCO</i> on <a href="https://github.com/jonathanlurie/cmonvsco">Github</a>
</div>
