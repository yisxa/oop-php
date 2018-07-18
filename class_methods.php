<?php
class Methods {

	function greeting() {
		echo "method exaples";
	}
	function greeting1() {
		echo "method exaples";
	}
}

$methods_list = get_class_methods('Methods');

foreach ($methods_list as  $method) {
	echo $method . "<br>";
}

 ?>