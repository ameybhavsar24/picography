<?php
function compress_image($source_url,$destination_url, $quality) {
	$info = getimagesize($source_url);
	
	switch ($info['mime']) :
	
	case 'image/jpeg':
	$image = imagecreatefromjpeg($source_url);
	break;
	
	case 'image/png':
	$image = imagecreatefrompng($source_url);
	break;
	
	case 'image/gif':
	$image = imagecreatefromgif($source_url);
	break;
	
	endswitch;
	
	imagejpeg($image, $destination_url, $quality);
	return $destination_url;

}
$name = "catfish";
$source_url = "img/photos/{$name}.jpg";
$quality = '20';
$destination_url = "img/optimism/photos/desk/{$name}.jpg";

compress_image($source_url,$destination_url, $quality);

?>
<meta charset='UTF-8'/>
	<img src='<?php echo $source_url ?>' width='60%' /> <img src='<?php echo $destination_url ?>' width='60%' />
	<b>Quality : <?php echo $quality ?></b>