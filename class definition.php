<?php

/**file craeted by bandhu
 * listing all classes
 */
class ClassListing {


}

//instantiate class
$class_list = get_declared_classes(); // this will list all classes
foreach ($class_list as  $class) {
	echo $class . "<br>";
}
 ?>