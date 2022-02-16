<?php
class rombo extends figura implements formulas{
    private $lado1;
    private $lado2;
    private $lado3;

  
	
	function __construct($l1,$l2,$l3){
		$this->tipo = "rombo";
		$this->lado1=$l1;
        $this->lado2=$l2;
        $this->lado3=$l3;
	}
	
	public function area(){
		$this->a=(($this->lado1 * $this->lado2)/2);	
	}
		
	public function perimetro(){
		$this->p=($this->lado1 *4);
	}
	
	// METODOS IMPLEMENTADOS
	 public function GetArea(){
			return $this->a;
	    }
	    
	 public function GetPerimetro(){
			return $this->p;
	    }
	    
	    public function GetTipo(){
			return $this->tipo;
	    }  
	
}
?>

