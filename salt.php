
<?php
/* salt.php */
$salt = "";
$salt = mcrypt_create_iv(32,MCRYPT_DEV_URANDOM);
 /*echo "This is the salt --&gt; &nbsp; <h1><b>{$salt}</b></h1>";*/
?>