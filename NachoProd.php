<?php
require_once ("vendor/autoload.php");

use PhilipBrown\Nacho\Nacho;

echo "Hola";
$asnp = new NachoProd();
//$np -> testNachHasCheese();
echo "<br> Adios 1";

 
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

