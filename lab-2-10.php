<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица 10x10</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        .even {
            color: red;
        }

        .odd {
            color: black;
        }
    </style>
</head>
<body>

<table>
    <?php
    $count = 1;

    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 10; $j++) {
            echo "<td class='" . ($count % 2 === 0 ? 'even' : 'odd') . "'>$count</td>";
            $count++;
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
