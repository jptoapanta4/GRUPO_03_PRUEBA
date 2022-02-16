<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Prueba - GRUPO 3</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<script src="./script/validar.js"></script>
	<!-- Estilos para el HTML-->
    <style>
        body {
        margin: 0;
        color: #1D85A6;
        background: #E2E9F7;
        }

        h3{
        color: #FF5733;
        }

        h1, h2{
        color: black;
        }

        .row > * {
        flex-shrink: 0;
        width: 100%;
        max-width: 100%;
        }

        .table-responsive {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        }

        footer.footer {
        padding-top: 4rem;
        padding-bottom: 4rem;
        }
        #tbl{
        margin: auto;
        text-decoration: none;
        }
		.btnregresar{
        color: #FF5733;

        }
    </style>
</head>

<center>
<img src="img/logo.png" width="600" height="100">
</br></br>
<h1>Aplicación de Tecnologías Web</h1>
		</br>
		<h2>Grupo: 3</h2>
		<h2>David Diaz</h2>
		<h2>Jerry Tovar</h2>
		<h2>Jean Toapanta</h2>
		</br>
        <h3>PRUEBA</h3>	

	</br>
<h2>NRC: 7383</h2>
</center>
<body>
	<?php
		include("include/class.figura.php");
		include("include/Interface.formulas.php");
		include("figuras/class.trapecio.php");
		include("figuras/class.rombo.php");
		include("figuras/class.romboide.php");
		
		if(isset($_POST['calcular'])){
			switch($_POST['tipo']){
				case "trapecio": $f = new trapecio($_POST['lado_1'],$_POST['lado_2'],$_POST['lado_3'],$_POST['lado_4']);break;
				case "rombo": $f = new rombo($_POST['lado_1'],$_POST['lado_2'],$_POST['lado_3']);break;
				case "romboide": $f = new romboide($_POST['lado_1'],$_POST['lado_2'],$_POST['lado_3'],$_POST['lado_4']);
			}
			mostrar($f);
		}else{
			echo figura::get_form();
		}
		
		function mostrar(formulas $fig){
			$fig->area();
			$fig->perimetro();
			echo "El área del " . $fig->GetTipo() . " es: " . $fig->GetArea();
			echo "<br>El perímetro del " . $fig->GetTipo() . " es: " . $fig->GetPerimetro();
			
			
		}
	?>
	<br>
	<a href="index.php" class="btnregresar"><h4>Regresar</h4></a>

</body>

</html>
