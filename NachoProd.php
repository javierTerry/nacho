<?php

//use PhilipBrown\Nacho\Nacho;

//require_once ("vendor/autoload.php");



class NachoProd {
	private $nacho = null;
	
	public function __contructor(){
		error_log(print_r("CADENA",true));
		$this -> nacho = new Nacho();
		error_log(print_r($this -> nacho -> cadena(),true));
		
	}
  public function testNachHasCheese()
  {
    $nacho = new Nacho();
    
  }
 
}

echo "Hola";
$asnp = new NachoProd();
//$np -> testNachHasCheese();
echo "<br> Adios 1";