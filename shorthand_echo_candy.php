<?php
    $sizes = [
        '10g' => 15,
        '25g' => 20,
        '40g' => 30
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shorthand Echo</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1><img src="img/logo.png">The Candy Store</h1>
    <h2>Available Sizes</h2>
    <table>
        <tr>
            <th>Size (in grams)</th>
            <th>Price</th>
        </tr>
        <tr>
            <td>10g</td>
            <td><?= $sizes['10g']?></td>
        </tr>
        <tr>
            <td>25g</td>
            <td><?= $sizes['25g']?></td>
        </tr>
        <tr>
            <td>40g</td>
            <td><?= $sizes['40g']?></td>
        </tr>
    </table>
</body>
</html>