<?php	
	#Redirecciona  el navegador
	function redirect_to($url)
	{
		header("Location:".$url);
		exit();
	}

?>