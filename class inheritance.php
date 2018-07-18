<?php
/**
 * created by bandhu
 */
//class inheritance
class ParentClass{

	var $wheels = 4;
	var $gearshift = "manual";
}
class ChildClass extends ParentClass
{
	var $doors = 2;
	function grearShift(){
		return "This cars has " . $this->wheels ." wheels and " . $this->doors . " doors";
	}
}

//instance

$cars = new ChildClass();

echo $cars->grearShift();



 ?>