<?php
	abstract class figura{
		private $tipo;
		private $a; //area
		private $p; //perimetro
		
		public static function get_form(){
			$html = '
			<form name="figuras" method="POST" action="index.php" >
			<table border=0 align="center">
				<tr>
					<th colspan="2">INGRESO DATOS DE LA FIGURA</th>
				</tr>
				<tr>
					<td>Tipo: </td>
					<td>
						<select id="opcion" name="tipo" onchange="pedirDatos(this.value);">
							<option value="sel">Seleccione...</option>
							<option value="trapecio">Trapecio</option>
							<option value="rombo">Rombo</option>
							<option value="romboide">Romboide</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Lado 1:</td>
					<td><input type="text" id="lado1" name="lado_1"size="4" disabled></td>
				</tr>
				<tr>
					<td>Lado 2:</td>
					<td><input type="text" id="lado2" name="lado_2"size="4" disabled></td>
				</tr>
				<tr>
					<td>Lado 3:</td>
					<td><input type="text" id="lado3" name="lado_3"size="4" disabled></td>
				</tr>
				<tr>
					<td>Lado 4:</td>
					<td><input type="text" id="lado4" name="lado_4"size="4" disabled></td>
				</tr>							
				<tr>
					<th colspan="2"><input type="submit" name="calcular" value="Calcular"></th>
				</tr>
			</table>
			</form>';
			return $html;
		}
		// METODOS ABSTRACTOS	
		public abstract function GetArea();
	    public abstract function GetPerimetro();
	    public abstract function GetTipo();
	}
?>
