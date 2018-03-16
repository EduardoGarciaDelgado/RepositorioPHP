<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title> Programa Dia De La Mujer</title>
	</head>
	<body>
		<?php
	$Nombre = $_GET["TXT_Nombre"];
	$Edad = $_GET["TXT_Edad"];
    $Genero = $_GET["RB_Genero"];
    
    /*
    echo "Nombre: " .$Nombre;
    	echo "<br/>";
	echo "Edad: " .$Edad;
		echo "<br/>";
    echo "Genero: " .$Genero;
		echo "<br/>";
	*/
		if ($Genero == 'Femenino') 
		{
			$conexion = mysqli_connect("localhost:8889","root","root","Historial");
			$consulta = mysqli_query($conexion,"insert into Registros values ('','$Nombre','$Edad','$Genero');") or die (mysqli_error());

			$consulta_2 = mysqli_query($conexion,"select * from Registros;") or die (mysqli_error());
			if (mysqli_num_rows($consulta_2) > 0) 
			{
				while($renglon = mysqli_fetch_array($consulta_2)) 
				{
					//echo "ID: ".$renglon['ID']."<br>";
					echo "<font color='red'>" ."Nombre: ".$renglon['Nombre']."<br>". "</font>";
					echo "<font color='red'>" ."Edad: ".$renglon['Edad']."<br>". "</font>";
					echo "<font color='red'>" ."Genero: ".$renglon['Genero']."<br><br>". "</font>";
				}
			} 
			else 
			{
			echo "No hay visitas";
			}
			mysqli_close($conexion);
		}
		else 
		{
			//MASCULINO
	
			$conexion = mysqli_connect("localhost:8889","root","root","Historial");
			$consulta = mysqli_query($conexion,"insert into Registros values ('','$Nombre','$Edad','$Genero');") or die (mysqli_error());

			$consulta_2 = mysqli_query($conexion,"select * from Registros;") or die (mysqli_error());
			if (mysqli_num_rows($consulta_2) > 0) 
			{
				while($renglon = mysqli_fetch_array($consulta_2)) 
				{
					//echo "ID: ".$renglon['ID']."<br>";
					echo "Nombre: ".$renglon['Nombre']."<br>" ;
					echo "Edad: ".$renglon['Edad']."<br>";
					echo "Genero: ".$renglon['Genero']."<br><br>";
				}
			} 
			else 
			{
			echo "No hay visitas";
			}
			mysqli_close($conexion);
		}

		?>
	</body>
</html>