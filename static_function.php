<?php

class StaticClass {
	static $no_of_days = 14;

	static function workingHour() {
		echo "total no of year <br>";
		// self keyword is used for the same class static variables
		echo self::$no_of_days;
		echo "<hr>";
		echo StaticClass::$no_of_days; //same as self
	}
}
//calling the static function
StaticClass::workingHour();
echo "<hr>";
//calling the static property
echo StaticClass::$no_of_days;



 ?>
