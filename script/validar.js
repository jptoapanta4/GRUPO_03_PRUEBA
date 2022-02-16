
	function pedirDatos(value){
	if (value=='trapecio'){
		document.getElementById('lado1').disabled=false;
		document.getElementById('lado2').disabled=false;
		document.getElementById('lado3').disabled=false;
		document.getElementById('lado4').disabled=false;
	}
	else if (value=='rombo'){
		document.getElementById('lado1').disabled=false;
		document.getElementById('lado2').disabled=false;
		document.getElementById('lado3').disabled=false;
		document.getElementById('lado4').disabled=true;

	}
	else if (value=='romboide'){
		document.getElementById('lado1').disabled=false;
		document.getElementById('lado2').disabled=false;
		document.getElementById('lado3').disabled=false;
		document.getElementById('lado4').disabled=false;
	}
	else {
		document.getElementById('lado1').disabled=true;
		document.getElementById('lado2').disabled=true;
		document.getElementById('lado3').disabled=true;
		document.getElementById('lado4').disabled=true;
	}
} 
