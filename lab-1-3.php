<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1-3</title>
</head>
<body>

<?php
define('NUM_E', 2.71828);

echo "Число e равно " . NUM_E . "<br>";

$num_e1 = NUM_E;
echo "\$num_e1 = $num_e1 " . gettype($num_e1) . "<br>";
 
$num_e1 = (string)$num_e1;
echo "\$num_e1 = $num_e1 " . gettype($num_e1) . "<br>";

$num_e1 = (int)$num_e1;
echo "\$num_e1 = $num_e1 " . gettype($num_e1) . "<br>";

$num_e1 = (bool)$num_e1;
echo "\$num_e1 = $num_e1 " . gettype($num_e1) . "<br>";

?>

</body>
</html>
