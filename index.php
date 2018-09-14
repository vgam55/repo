<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Condicional con generación de números aleatorios</title>
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
	<header id="header">
		cabecera de prueba	
	</header><!-- /header -->
	<div id="cuerpo">
		<?php
			$dim=rand(1,10);         //Genera un número aleatorio entre 1 y 10
			$matriz=array($dim);      //Generamos un arrray con n posiciones
			$suma=0;				 //Guarda la suma de los datos del array que queramos sumar
			for($i=0;$i<$dim;$i++)
			{
				$matriz[$i]=rand();
			}
			
			switch ($dim) {
				case 1:
					$suma=$matriz[$dim-1];
					echo($suma." caso 1");
					break;
				case 2:
				    for($j=$dim-1; $j>0;$j--)
				    {
				    	$suma=$suma+$matriz[$j];
				    	
				    }
				    echo($suma." caso 2");
					break;
				default:
					for($k=$dim-1; $k>$dim-3;$k--)
				    {
				    	$suma=$suma+$matriz[$k];
				    	
				    }
				    echo($suma." caso de tres o más elementos");
					break;
			}

			s
		?>
	</div>
	<footer>
		pie de prueba
	</footer>
</body>
</html>