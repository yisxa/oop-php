<?php

echo strftime('%c');
echo "<br>";
print date('r');
echo "<br>";
$a = getdate();
printf('%d %s, %d',$a['mday'],$a['month'],$a['year']);
echo "<br>";
echo "<hr>";
//print strftime('%c');
print date('d/m/Y');
echo "<br>";
echo "<hr>";
print strftime("Today is day %d of the month and %j of the year.");
print 'Today is day '.date('d').' of the month and '.date('z').' of the year.';

?>