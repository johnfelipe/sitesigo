<?php  
	function view($template, $vars = array())
	{
		extract($vars);
		require "views/$template.tpl.php";	
	}

	function controller($namepage, $vars = array())
	{
		extract($vars);
		if (empty($namepage)) {
			$namepage = "vpresentacion";
		}
		$file = "vista/$namepage.php";
		if (file_exists($file)) 
		{
			require "vista/$namepage.php";
		}
		else
		{
			header("HTTP/1.0 404 Not Found");
			require "vista/verrorpage.php";
		}
	}