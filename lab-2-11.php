<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Поиск делителей числа</title>
</head>
<body>

<?php
// Генерация случайного числа N
$N = mt_rand(1, 900);

echo "<p>Натуральное число N: $N</p>";
echo "<p>Делители числа N:</p>";

// Находим делители числа N
for ($i = 1; $i <= $N; $i++) {
    if ($N % $i === 0) {
        echo "$i<br>";
    }
}
?>

</body>
</html>
