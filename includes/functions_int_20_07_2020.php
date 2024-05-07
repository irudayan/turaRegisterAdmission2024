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
	
	
	// to get query string
function formquerystring () {
	foreach($_REQUEST as $index=>$value) {
		$querystring .= "&". $index ."=". $value;
	}
	return $querystring;
}
		

?>