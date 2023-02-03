<!DOCTYPE html>
<html>
<head>
	<title>Program to calculate electricity bill in PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	
	<div class="container">
		<h1>Calculate electricity bill in PHP</h1>
		<?php
        $celsuis = 300;
		function tempConversionC($t_celsuis)
		{
			$convert = (($t_celsuis * 9) / 5 + 32);
		
			return number_format($convert,2,'.', ' ')."<br>";
		
		}
		
		echo tempConversionC($celsuis);
		function tempConversionK($t_celsuis)
		{
		 //K = C + 273.15
		
			$constante = 273.15;
		
			$convert =  number_format($t_celsuis + $constante,2,'.', ' ');
		   
			return $convert > 0 ? $convert : "Invalide" ;
		
		}
		echo "\n";
		
		echo tempConversionK($celsuis);
	?>
	</div>
</body>
</html>