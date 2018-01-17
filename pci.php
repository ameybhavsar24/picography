<?php
echo  $_FILES['fileToUpload']['name'];
header('Cache-control : public, max-age=100');
print_r($_SERVER);
?>