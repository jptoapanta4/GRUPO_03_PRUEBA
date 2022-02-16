<?php
class romboide extends figura implements formulas{
    private $lado1;
    private $lado2;
    private $lado3;
    private $lado4;
  
	
	function __construct($l1,$l2,$l3,$l4){
		$this->tipo = "romboide";
		$this->lado1=$l1;
        $this->lado2=$l2;
        $this->lado3=$l3;
        $this->lado4=$l4;
	}
	
	public function area(){
		$this->a=(($this->lado3 * $this->lado4));	
	}
		
	public function perimetro(){
		$this->p=(2*($this->lado1 +$this->lado2));
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

