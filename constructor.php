<?php

class Product {
	public $no_of_item = 10;

	function __construct(){
		echo $this->no_of_item;
	}

	function categories(){
		echo "this is a dummy categories";
	}


}
// for constructor we doesn't need to call the function
$pdt1 = new Product();
echo "<br>";
//$pdt2 = new Product; //here you may use class name without parenthesis

// for normal function we have to call the function to echo the function
$pdt1->categories();

//$pdt2 = new Product; //here you may use class name without parenthesis


?>

