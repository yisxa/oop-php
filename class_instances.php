<?php
/**
 *php file is created by bandhu
 */


// class definition
class Cars {
	//variables and methods in a class are called properties.

	//variables are called member variables or data members.
	// variables in a class are defined by "var" keyword.
	// keywords are reserved word and have special meaning. one can't assign a keyword as a variable name.
 	var $no_of_wheels = 4;

 	// function in a class is called method or member function
	function manyCars(){
		//when we are inside a class, 'this' refers to the same class we have
		//'this' is called pseudo variables
		return "This car has " . $this->no_of_wheels . " wheels"; //Output: This car has 4 wheels
		//for accessing member variables within the class we have to use 'this' keyword
	}
}

//instance of cars. one can instantiate(create object) as many as possible
$bmw = new Cars();
$mercedes = new Cars();
$jaguar = new Cars();
//$skoda = new Cars();
//$honda = new Cars();
//$hyundai = new Cars();

//accessing member function or methods. if a function is in the
//class it is called methods but if it is outside of the class it is called function.

//accessing member function or methods.
echo $bmw->manyCars();
echo "<br>"; //line break
//accessing data members
echo $bmw->no_of_wheels; //here don't need a $ because the variables are already defined //output: 4
echo "<br>"; //line break
echo $mercedes->no_of_wheels = 10; // here value is reassigned and the output is 10
echo "<br>"; //line break
//no need for 'this' keyword outside of the class
echo $jaguar->no_of_wheels;
 ?>