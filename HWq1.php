<!DOCTYPE html>
<html>
<body>


<?php

/*Add integers */
$x = 5;
$y = 17;
echo "Add integers: " . ($x + $y) . "<br>". "<br>";

/*Concatenate*/
$txt1 ="I have worked at Pace for ";
$x = 3;
$txt2 = " years";

echo "Concatenate: " .$txt1 . $x . $txt2 . "!". "<br>". "<br>";

/*IF statement*/
$t = date("H");
echo "IF statement: ";
if ($t%2==0) {
    echo "Even";
} else {
    echo "Odd";
}


?>


</body>
</html>