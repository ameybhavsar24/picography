<?php
$path = 'img/header-bkgs-m/nature-hd.jpg';
$type = pathinfo('$path',PATHINFO_EXTENSION);
$data = file_get_contents($path);
$base64 = base64_encode($data);
$image = base64_decode($base64);

$favicon =
$base64
;



if (isset($_GET['img']))
{
    switch ($_GET['img'])
    {
        case 'image' :
        /*header("Content-type: image/x-icon");*/
        echo base64_decode($favicon);
        exit();
    }
}




?>
<!doctype html> 

<html>
<head>
<meta charset="UTF-8" />
</head>
<body>
<form>
<input type='file' name='hey' />
<input type='submit' />
</form>
<h4><?php echo $base64 ?></h4>
<img src='?img=image' />
</body>
</html>