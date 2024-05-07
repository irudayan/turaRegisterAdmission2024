<?php 
if (eregi("functions.php",$_SERVER['PHP_SELF'])) 
{
   die("You should not access this file directly!");
}

function redirect($url)
{
	echo '<script language="JavaScript">';
	echo 'window.location.href = "'.$url.'"';
	echo '</script>';
}

function authentication()
{
	if (empty($_SESSION["username"]))
	{
		redirect("../index.php?action_type=invalidaccess");
	}
}
function mt_rand_str ($l, $c = 'abcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIGKLMNOPQRSTUVWXYZ') {
    for ($s = '', $cl = strlen($c)-1, $i = 0; $i < $l; $s .= $c[mt_rand(0, $cl)], ++$i);
    return $s;
}
?>