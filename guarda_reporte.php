<?php 
	
	require('conexion.php');
	
	$email   =$_POST['email'];
	$reporte =$_POST['reporte'];
	
	$query="INSERT INTO reportes (id_report, email, reporte) VALUES ('','$email','$reporte')";
	$resultado=$mysqli->query($query);
?>

<html>
	<head>
		<title></title>
	</head>
	<body>
		<center>	
			
			<?php if($resultado>0){ ?>
				<h1>Reporte Enviado</h1>
				<?php }else{ ?>
				<h1>Error al Enviar Reporte</h1>		
			<?php	} ?>		
			
			<p></p>	
			
			<a href="index.html">Regresar</a>
			
		</center>
	</body>
	</html>	